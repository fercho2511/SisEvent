<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Venta_model extends CI_Model {


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

	
}
