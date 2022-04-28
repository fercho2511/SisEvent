<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Cliente_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('cliente');
                $this->db->where('estado','1');
                return $this->db->get();

            
	}

    public function crearCliente($data){
        $this->db->insert('cliente',$data); // aca la clave ses construir bien data, q va a contener

    }

   


    //     //consulta para el modificado de datos de lso esudiantes o actualizacion de datos
 

    //     //consulta para ingresar datos del estudiante a la base de datos
    //     //lo importante es lo q contenga data


    //     //aca vamso a crear el usuario y la contraseña
    //     public function crearLoguin($nom,$ap,$am,$ci){          

    //             //aca estamos captantdo ls valores y obteniendo el primer caracter 
    //             $n=$nom[0];
    //             $a=$ap[0];
    //             $a2=$am[0];
                
    //             $cadena=$n.$a.$a2.$ci;
    //             return strtoupper($cadena);             
    //     }

    //     public function validarCarnet ($ci){

            
    //              $this->db->select('ci');
    //              $this->db->from('usuario');
    //              $this->db->where('ci', $ci);
    //              $consulta = $this->db->get();
    //              if ($consulta->num_rows() > 0) {
             
    //                  return 1;
    //              } else {
    //                  return 0;
    //              }




    //     }


    //     public function agregarUsuario($data)
	// {
              
    //             $this->db->insert('usuario',$data); // aca la clave ses construir bien data, q va a contener

    //     // return $this->db->get();
	// }


    //     //metodo q ara la consulta para eliminar estudiante

       public function eliminar($idCliente)
       {
        $datos = ['estado' => '0',];
              // $datos = ['idUsuario_Acciones' => $idUsuario_Acciones];
               $this-> db-> where ('idCliente', $idCliente);
               $this-> db-> update ('cliente', $datos); 
       }

        //     //consulta para obtener al cliente
        public function getCliente($idCliente)
        {
                    $this->db->select('*');
                    $this->db->from('cliente');
                    $this->db->where('idCliente',$idCliente);
                    return $this->db->get();
        }
        public function updateCliente($idCliente,$data)
        {
             
             
                    $this->db->where('idCliente',$idCliente);
                    $this->db->update('cliente',$data);
                     return $this->db->get();
        }

        public function get_Cliente($id){

            $this->db->where("idCliente",$id);
            $resultado = $this->db->get("cliente");
            return $resultado->row();
        }

    //     public function HabilUsuario($idUsuario,$idUsuario_Acciones){
    //         $datos = ['idUsuario_Acciones' => $idUsuario_Acciones,];
    //         $datos = ['estado' => '1',];
    //         $this-> db-> where ('IdUsuario', $idUsuario);
    //         $this-> db-> update ('usuario', $datos); 
    //     }

    //     public function bajaUsuario($idUsuario){
    //         $datos = ['estado' => '0',];
    //        // $datos = ['idUsuario_Acciones' => $idUsuario_Acciones];
    //         $this-> db-> where ('IdUsuario', $idUsuario);
    //         $this-> db-> update ('usuario', $datos); 
    //     }



    //     public function existencia($dato){

    //             $this->db->select('idUsuario');
    //             $this->db->from('usuario');
    //             $this->db->where('password',$dato);

    //             $query = $this->db->get();
    //             if ($query->num_rows() > 0) {
    //                     return true;
    //             }
    //             else{
    //                     return false;
    //             }

    //     }


    //     public function habilitado(){
    //             $this->db->select('estado_nota_1_bimestre');
    //             $this->db->from('calificaciones');
    //             return $this->db->get();

    //     }

    //     public function habilitarBim($datos){
    //        // $datos = ['idUsuario_Acciones' => $idUsuario_Acciones];
    //         $this-> db-> update ('calificaciones', $datos); 

    //     }

    //     public function desabilitarBim($datos){
    //        // $datos = ['idUsuario_Acciones' => $idUsuario_Acciones];
    //         $this-> db-> update ('calificaciones', $datos); 

    //     }



	
}
