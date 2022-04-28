
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function listaCliente(){
        $lista=$this->cliente_model->lista();
        $data['cliente']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('cliente/cliente',$data);
		$this->load->view('inc_fin.php');
    }

    public function addCliente(){

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('cliente/add_cliente');
		$this->load->view('inc_fin.php');
    }

    public function guardar(){      

		$this->load->library(array('form_validation'));

		//otro metodo
		
        $this->load->helper('form');
		$data['nombres']=$_POST['nombres'];
        $data['apellidos']=$_POST['apellidos'];
        $data['ci']=$_POST['ci'];

        $data['telefono']=$_POST['telefono'];
        $data['correo']=$_POST['correo'];
        $data['usuario_idUsuario']=$this->session->userdata('idusuario');

	
        

        // aver aca haciendo pruebas de validation de

            $config=array(
                array(
                    'field'=>'ci',
                    'label' =>'carnet',
                    'rules' =>'is_unique[cliente.ci]',
                    // 'errors'=> array(
                    //         'is_unique' =>'El %s. ya se encuentra registrado',
                    // ),

                ),
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run()==FALSE) {
                # code...
                // $data=$config;
                echo '<script>
                alert("CI YA REGISTRADO");
                </script>'; 
                //  redirect($_SERVER['HTTP_REFERER']);

                    redirect('cliente/addCliente','refresh');

                // $data=$config;
                // redirect('usuario_per/agregar',$data);
            }
            else {
                // $this->load->view('formsuccess');
                
                $this->cliente_model->crearCliente($data); 
                echo '<script>
                alert("Registro Satisfactorio");
                </script>';
                redirect('cliente/listaCliente','refresh');
       
            }



			//diferente
				// $nombres = $this->input->post("nombres");
		// $apellidos = $this->input->post("apellidos");
		// $ci = $this->input->post("ci");
		// $telefono = $this->input->post("telefono");
		// $correo = $this->input->post("correo");
        // $usuario_idUsuario = $this->session->userdata('idusuario');


		// $this->form_validation->set_rules("nombres","Nombre del Cliente","required");
		// $this->form_validation->set_rules("apellidos","Tipo de Cliente","required");
		// $this->form_validation->set_rules("telefono","Tipo de Documento","required");
		// $this->form_validation->set_rules("ci","Numero del Documento","required|is_unique[cliente.ci]");

		// if ($this->form_validation->run()) {
		// 	$data  = array(
		// 		'nombres' => $nombres, 
		// 		'apellidos' => $apellidos,
		// 		'ci' => $ci,
		// 		'correo' => $correo,
		// 		'telefono' => $telefono,
		// 		'usuario_idUsuario' => $usuario_idUsuario,
				
		// 	);

		// 	if ($this->cliente_model->crearCliente($data)) { // en aca realiza la consulta para registrar el cliente
		// 		redirect(base_url()."index.php/cliente/listaCliente");
		// 	}
		// 	// else{
		// 	// 	$this->session->set_flashdata("error","No se pudo guardar la informacion");
		// 	// 	// redirect(base_url()."index.php/cliente/addCliente");
		// 	// }
		// }
		// else{
		// 	//  $this->add();
		// 	$this->session->set_flashdata("error","Ingrese informacion correcta");

        //     redirect(base_url()."index.php/cliente/addCliente");
		// }




    }


	public function deleteCliente($idCliente){
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->cliente_model->eliminar($idCliente); // aca se envia el metodo del modelo 
		echo '<script>
		alert("Registro Eliminado");
		</script>';
        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('cliente/listaCliente','refresh');
	}

	public function editarCliente($idCliente){


				$lista=$this->cliente_model->getCliente($idCliente);
				$data['cliente']=$lista; //otro array asociativo
				$this->load->view('inc_inicio.php');
				$this->load->view('inc_menu.php');
				$this->load->view('cliente/edit_Cliente',$data);
				$this->load->view('inc_fin.php');
	}
     

	public function actualizarCliente()
	{


		$idCliente=$_POST['idCliente'];
		$data['nombres']=$_POST['nombres'];
        $data['apellidos']=$_POST['apellidos'];
        $data['ci']=$_POST['ci'];
        $data['telefono']=$_POST['telefono'];
        $data['correo']=$_POST['correo'];
        $data['usuario_idUsuario']=$this->session->userdata('idusuario');
		
		$this->cliente_model->updateCliente($idCliente,$data); 
				//esta linea ya realiza la actualizacion
				echo '<script>
				alert("Registro Satisfactorio");
				</script>';
		 		redirect('cliente/listaCliente','refresh');

		// $clienteActual = $this->cliente_model->get_Cliente($idCliente);

		// $documento=$_POST['ci'];
		// if ($documento == $clienteActual->ci) {
		// 		$this->cliente_model->updateCliente($idCliente,$data); 
		// 		//esta linea ya realiza la actualizacion
		// 		echo '<script>
		// 		alert("Registro Satisfactorio");
		// 		</script>';
		// 		redirect('cliente/listaCliente','refresh');
				

		// }else{
		// 	echo '<script>
        //          alert("CI YA REGISTRADO");
        //          </script>'; 
		// 		//  redirect('cliente/editarCliente','refresh');
		// 		 redirect(base_url()."index.php/cliente/editarCliente/".$idCliente);
		// }


        //ahora la consula
		
		# code...




		
		// $this->load->library(array('form_validation'));

	

		// //otro metodo
		
        // $this->load->helper('form');
		// $idCliente=$_POST['idCliente'];
		// $data['nombres']=$_POST['nombres'];
        // $data['apellidos']=$_POST['apellidos'];
        // $data['ci']=$_POST['ci'];
        // $data['telefono']=$_POST['telefono'];
        // $data['correo']=$_POST['correo'];
        // $data['usuario_idUsuario']=$this->session->userdata('idusuario');
            
		// $clienteActual = $this->cliente_model->get_Cliente($idCliente);

		// $documento=$_POST['ci'];
		// if ($documento == $clienteActual->ci) {
		// 	$is_unique = "";
		// }else{
			  

		// }

        // // aver aca haciendo pruebas de validation de

        //     $config=array(
        //         array(
        //             'field'=>'ci',
        //             'label' =>'carnet',
        //             'rules' =>'is_unique[cliente.ci]',
        //             // 'errors'=> array(
        //             //         'is_unique' =>'El %s. ya se encuentra registrado',
        //             // ),

        //         ),
        //     );
        //     $this->form_validation->set_rules($config);

        //     if ($this->form_validation->run()==FALSE) {
        //         # code...
        //         // $data=$config;
        //         // echo '<script>
        //         // alert("CI YA REGISTRADO");
        //         // </script>'; 
        //         //  redirect($_SERVER['HTTP_REFERER']);
		// 		$this->session->set_flashdata("error","No se pudo actualizar la informacion");

        //             // redirect('cliente/editarCliente.$idCliente','refresh');
		// 			 redirect(base_url()."index.php/cliente/editarCliente/".$idCliente);


        //         // $data=$config;
        //         // redirect('usuario_per/agregar',$data);
        //     }
        //     else {
        //         // $this->load->view('formsuccess');
                
        //         $this->cliente_model->updateCliente($idCliente,$data); 
        //         echo '<script>
        //         alert("Registro Satisfactorio");
        //         </script>';
        //         redirect('cliente/listaCliente','refresh');
       
        //     }

	}
       

    
    
}