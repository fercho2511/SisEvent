<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Zona_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 


        public function lista(){
            $this->db->select('*');
            $this->db->from('zona');
            // $this->db->where('idRol','4');
            $this->db->where('estado','1');

            return $this->db->get();
        }


        public function eliminar($idZona){
            $datos = ['estado' => '0',];
            $this-> db-> where ('idZona', $idZona);
            $this-> db-> update ('zona', $datos);
        }


        public function crearZon($data){

            $this->db->insert('zona',$data);

        }



        public function modificarEstudiante($idZona,$datos){

        //aca pondremos la consulta para modificar lso datos de la zona 
        $this->db->where ('idZona',$idZona);
        $this->db->update('zona',$datos);

        }
    

}
