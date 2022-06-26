
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {


        public function index()
        {
        
            
          $this->load->view('usuario/vista');

        
        }
        
        public function index2()
        {
        
     
            //index.php/controlador/metodo/
            $data['msg']=$this->uri->segment(3);

            //carga del panel de control
            if ($this->session->userdata('login')) //consultara si hay una variable de secion
            {
                //si hay entonces redireccionar
                redirect('usuario/panel','refresh'); //panel es un metodo de este controlador
     
            }
            else {
                //cargar un login form
               // $this->load->view('inc_inicio.php');
                $this->load->view('loguin/loguin1',$data);
               // $this->load->view('inc_fin.php');
            }
        
        }

    public function validarUsuario()
    {
        $estado='1';
        //va a lelgar datos desde un formulario
        $login=$_POST['login'];
        $password=md5($_POST['password']); //lo encriptamso directamente
        //antes de encriptar aremos la prueva 
        //$password=$_POST['password'];

        $consulta=$this->usuario_model->validar($login,$password,$estado);

        //ENTONCES CONSULTA VA A TENER UN RESULTADO
        if ($consulta->num_rows()>0) //si fuera true entonces tenemso un usuario bien valuidados
         {
             
            foreach ($consulta->result() as $row)
            {
                //accedemso a las variables de base de datos
                //creamos las variables de sesion

                $this->session->set_userdata('idusuario',$row->idUsuario);
                $this->session->set_userdata('login',$row->login);
                $this->session->set_userdata('password',$row->password);
                $this->session->set_userdata('idRol',$row->idRol);
               // $this->session->set_userdata('foto',$row->foto);
                $this->session->set_userdata('nombres',$row->nombres);



                redirect('usuario/panel','refresh');

            }
        }
        else //si no existe ni una direccion redireccionada
        {
            //sino redireccionamos a index 1 en el urisegment
            redirect('usuario/index/1','refresh');

        }


    }
    
        public function panel()
        {
            if ($this->session->userdata('login') ) //consultara si hay una variable de secion
            {

                
                $rol=$this->session->userdata('idRol');
                switch ($rol) {
                    case '1':
                        # code...
                        //entra al menu admin
                        //panel admin
                        redirect('usuario_per/test','refresh
                        ');
                        break;
                  
                    case '2':
                        # code...
                        //entra al menu admin
                        //panel admin
                        redirect('usuario_per/test','refresh');
                        break;
                    
                    case '3':
                            # code...
                             //entra al menu estudiante
                             //panel admin
                             redirect('usuario_per/test2','refresh');
                            break;                    
                
                //si hay entonces redireccionar                
                //PARA LOS ROLES            

             
             }
                
            }
            else
            {
                //sino redireccionamos a index 2 en el urisegment
                redirect('usuario/index/2','refresh');
            }
        }
 
 //para cerrar sesion
        public function logout()
        {
            $this->session->sess_destroy();   //aca eliminamos las variables de sesion
            redirect('usuario/index/3','refresh');
        }

        //para registro de venta o reserva
        public function registrar_venta()
        {
            # desarrollar el codigo para realizar la venta 
        }

       

    
    
}