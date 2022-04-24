
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Silla extends CI_Controller {


    function registrarSilla()
    {
        # code...
        
            $this->load->library(array('form_validation'));
            $this->load->helper('form');
            $data['numSilla']=$_POST['numSilla'];
            $data['zona']=$_POST['zona'];
            $data['nombre']=$_POST['nombre'];
            $data['apellido']=$_POST['apellido'];
            $data['telefono']=$_POST['telefono'];
            $data['ci']=$_POST['ci'];
            $data['correo']=$_POST['correo'];
            //provando loguin
           
            $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];  
            $this->silla_model->registrarSilla($data);
            redirect('usuario_per/test', 'refresh');
        // if ($this->form_validation->run()==FALSE) {
        //     # code...
        //     // $data=$config;
        //     echo '<script>
        //     alert("CI YA REGISTRADO");
        //     </script>'; 
        //     //  redirect($_SERVER['HTTP_REFERER']);

        //         redirect('usuario_per/agregar','refresh');

        //     // $data=$config;
        //     // redirect('usuario_per/agregar',$data);
        // }
        // else {
        //     // $this->load->view('formsuccess');
        //     $data['login']=$this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci); 
        //     $data['password']=md5($this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci)); 
        //     $this->usuarioper_model->agregarUsuario($data); 
        //     echo '<script>
        //     alert("Registro Satisfactorio");
        //     </script>';
        //     redirect('usuario_per/test','refresh');
   
        // }

    }


        
       

    
    
}