<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Evento_model extends CI_Model {


    function registrarVenta($cliente,$mesa,$idUsuario)
    {
        # code... registraremso al silla a nombre de un cliente
         $this -> db -> simple_query ( "UPDATE mapa
                SET estado = '0',
                idCliente = '$cliente',
                fechaventa = CURRENT_TIMESTAMP,
                idUsuarioAcciones=$idUsuario
                where mesa = '$mesa'  and estado = 1 
                LIMIT 1 ");
       
    //   $query=  "UPDATE mapa
    //     SET estado = '0',
    //     idCliente = '$cliente',
    //     fechaventa = CURRENT_TIMESTAMP
    //     where mesa = '$mesa'  and estado = 1 
    //     LIMIT 1 " 
        
    }


    function reporteGeneral(){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = 1 and m.estado = 0 
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;
    }

	
}