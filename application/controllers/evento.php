<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {


	public function evento1()
	{
         //$query=$_GET['mesa'];
         $data['arrMesa']= "";
         $data['mesa']= "";
         $data['precio']= "";
         $data['sillas']= $this->silla_model->get_sillas();
         //$data['general']= $this->silla_model->get_sillas2();

 
 
         $mesa =$this->input->get('mesa', TRUE);
        //  if ($mesa =="general") {
        //      $mesa = 0;
        //  }
         if ($mesa) {
             //$result = $this->silla_model->get_cantidad($query); 
             
                 $data['arrMesa']=$this->silla_model->get_cantidad($mesa);
                 $data['mesa']=$mesa;
                 $data['precio']= $this->silla_model->get_precio($mesa);
                 //$data['sillas']=$this->silla_model->get_sillas();
 
              
                
             
         }
       
         
        // $lista=$this->usuarioper_model->lista();
         //$data['usuario']=$lista; 
 
         //$data['arrZona'] = $this->zona_model->get_zona();        
 
         //$this->load->view('inc_inicio.php');
         $this->load->view('inc_menu3.php');
          $this->load->view('inc_menu4.php');
         $this->load->view('evento/evento1',$data);
         $this->load->view('inc_fin2.php');

	}

    function formUser (){
        //$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu3.php');
         $this->load->view('inc_menu4.php');
		$this->load->view('venta/formulario2');
		$this->load->view('inc_fin2.php');

    }


    function reporte(){
        $this->load->view('inc_menu3.php');
        $this->load->view('inc_menu4.php');
       $this->load->view('evento/reporte');
       $this->load->view('inc_fin2.php');

    }


} 
