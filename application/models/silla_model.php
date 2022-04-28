<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Silla_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
    function registrarSilla($data)
    {
        # code... registraremso al silla a nombre de un cliente
        $this->db->insert('cliente',$data); // aca la clave ses construir bien data, q va a contener

    }

}
