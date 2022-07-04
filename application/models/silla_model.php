<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Silla_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
    function registrarSilla($data)
    {
        # code... registraremso al silla a nombre de un cliente
        $this->db->update('mapa',$data); // aca la clave ses construir bien data, q va a contener

    }

    public function registroSilla($data2)
    {
        $this->db->insert('silla',$data2); 
    }


    //aca para obtener las sillas

    function get_cantidad($mesa){

         //armamos la consulta
         $query = $this->db-> query("SELECT silla,@rownum:=@rownum+1 as numero
                                    FROM mapa t, (SELECT @rownum:=0) r
                                    where estado = 1 and mesa = $mesa GROUP BY 1");
         // si hay resultados
         if ($query->num_rows() > 0) {
             // almacenamos en una matriz bidimensional
             foreach($query->result() as $row)
                $arrDatos[htmlspecialchars($row->silla, ENT_QUOTES)] = 
                          htmlspecialchars($row->numero, ENT_QUOTES);
             $query->free_result();
             return $arrDatos;
          }

   

               
    }




    
    function get_precio($mesa){
        $result="SELECT Z.precio as monto
                                    FROM zona Z 
                                    INNER JOIN mapa M ON M.zona = Z.idZona
                                    WHERE M.mesa = '$mesa' and Z.estado = 1
                                    GROUP BY 1";
       

        $query = $this->db->query($result);
        if ($query->num_rows() > 0) {
                return $query->row()->monto;
        }
        return false; 
    }


    function get_sillas(){
      

            $this->db->select('estado')->from('mapa');
                $query = $this->db->get();
                    return $query->result_array();


            
    }

//     function get_sillas2(){
      

//         $this->db->select('estado')->from('mapa')->where(mesa='46');
//             $query = $this->db->get();
//                 return $query->result_array();


        
// }



    

}