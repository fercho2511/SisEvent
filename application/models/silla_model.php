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
        //  $query = $this->db-> query("SELECT id,silla FROM mapa where estado = 1 and mesa = '$mesa' ");
        //  // si hay resultados
        //  if ($query->num_rows() > 0) {
        //      // almacenamos en una matriz bidimensional
        //      foreach($query->result() as $row)
        //         $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
        //                   htmlspecialchars($row->silla, ENT_QUOTES);
        //      $query->free_result();
        //      return $arrDatos;
        //   }

                     $sql="SELECT id,silla FROM mapa where estado = 1 and mesa = '$mesa'";

                 $result=$sql;
                 $cadena="<label>Cantidad</label> 
                         <select id='lista2' name='lista2'>";
                 while ($ver=mysqli_fetch_row($result)) {
                     $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                 }

                 return  $cadena."</select>";



                // $movInt = $_GET['movInt'];
                //     $sql="SELECT id,silla FROM mapa where estado = 1 and mesa = '$movInt' group by 1"; 
                //     $result=$mysqli->query($sql);
                //     $options="";
                //     while ($row=$result->fetch_array(MYSQLI_ASSOC)) { 
                //         $options.="<option value=\"$row[id]\">$row[id] $row[silla]</option>"; 
                //     }
                //     echo $options;
    }



    function get_cantidad2 (){

        $sql="SELECT id,silla FROM mapa where estado = 1 and mesa = 1";

        console.log($sql);


        

    }

    
    function get_precio($id){
        $query = $this->db-> query("SELECT Z.precio 
                                    FROM zona Z 
                                    INNER JOIN mapa M ON M.zona = Z.idZona
                                    WHERE M.mesa = '$id' and Z.estado = 1
                                    GROUP BY 1");
        return $query;
    }

}