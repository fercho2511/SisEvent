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



    function mesas(){
        
      



                $query = $this->db-> query("SELECT id, mesa from mapa
                where evento = 1
                GROUP BY mesa 
                ORDER BY id ASC");
                // si hay resultados
                if ($query->num_rows() > 0) {
                // almacenamos en una matriz bidimensional
                foreach($query->result() as $row)
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
                    htmlspecialchars($row->mesa, ENT_QUOTES);
                $query->free_result();
                return $arrDatos;
                }

    }


    function comprador(){

                $query = $this->db-> query("SELECT m.idCliente AS id, CONCAT(c.nombres,' ',c.apellidos) AS Nombre
                from mapa m
                INNER JOIN cliente c on c.idCliente = m.idCliente 
                where evento = 1
                GROUP BY nombre
                ORDER BY m.idCliente asc");
                // si hay resultados
                if ($query->num_rows() > 0) {
                // almacenamos en una matriz bidimensional
                foreach($query->result() as $row)
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
                    htmlspecialchars($row->Nombre, ENT_QUOTES);
                $query->free_result();
                return $arrDatos;
            }
    }


    function vendedor(){
        $query = $this->db-> query("SELECT m.idUsuarioAcciones as id, CONCAT(u.nombres,' ',u.apellido1,' ',u.apellido2) as nombre
        from mapa m
        INNER JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        where m.evento = 1
        GROUP BY nombre
        ORDER BY m.idUsuarioAcciones asc");
        // si hay resultados
        if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
        $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
            htmlspecialchars($row->nombre, ENT_QUOTES);
        $query->free_result();
        return $arrDatos;
        }
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

    function reporteFechas($inicio,$fin){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = 1 and m.estado = 0 and fechaventa BETWEEN '$inicio 00:00:00 ' AND '$fin 23:59:00' 
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;

    }

    function reporteMesa($mesa){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = 1 and m.estado = 0 and mesa = $mesa 
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;
    }


    function reporteComprador($comprador){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = 1 and m.estado = 0 and CONCAT(c.nombres,' ',c.apellidos)  = '$comprador' 
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;
    }

    function reporteVendedor($vendedor){
        $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
        FROM mapa m
        LEFT  JOIN cliente c on c.idCliente = m.idCliente
        LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
        LEFT JOIN zona z on z.idZona = m.zona
        LEFT JOIN evento e on e.Id = m.evento
         WHERE m.evento = 1 and m.estado = 0 and CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2)='$vendedor'
         GROUP BY m.idCliente asc
         ORDER BY m.mesa";
        $resultados = $this->db->query($query);
              return $resultados;
    }



    function reporteFantasma(){
        

         $query= "SELECT c.idCliente, CONCAT(c.nombres,' ',c.apellidos) as nombreComprador, CONCAT(u.nombres,' ', u.apellido1,' ', u.apellido2) nombreVendedor, m.mesa, COUNT(m.silla) as Cantidadsillas, z.precio as precioxsilla, m.fechaventa,e.evento
         FROM mapa m
         LEFT  JOIN cliente c on c.idCliente = m.idCliente
         LEFT JOIN usuario u on u.idUsuario = m.idUsuarioAcciones
         LEFT JOIN zona z on z.idZona = m.zona
         LEFT JOIN evento e on e.Id = m.evento
          WHERE m.evento = 1 and m.estado = 10  
          GROUP BY m.idCliente asc
          ORDER BY m.mesa";
         $resultados = $this->db->query($query);
               return $resultados;
    }
	
}