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

 
 
         $mesa =$this->input->get('mesa', TRUE);
      
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

        

        $data['mesas']= $this->evento_model->mesas();
        $data['venta']= $this->evento_model->vendedor();
        $data['compra']= $this->evento_model->comprador(); 
        $data['reporte']= $this->evento_model->reporteFantasma(); 
        $data['titulo']="";
        
        $opcion =$this->input->get('filtro', TRUE);

      
      
               switch ($opcion) {
                  case '1':
                        $desde =$this->input->get('desde', TRUE);
                        $hasta =$this->input->get('hasta', TRUE);
                      $data['reporte']=$this->evento_model->reporteFechas($desde,$hasta);
                      $data['titulo']="Reporte desde fecha ".$desde." hasta fecha ".$hasta;
                      break;
                  case '2':
                       $mesa =$this->input->get('mesa', TRUE);
                      $data['reporte']=$this->evento_model->reporteMesa($mesa);   
                      $data['titulo']="Reporte de la mesa ".$mesa ;

                      break;
                   case '3':
                         $comprador =$this->input->get('comprador', TRUE);
                      $data['reporte']=$this->evento_model->reporteComprador($comprador); 
                      $data['titulo']="Reporte de comprador ".$comprador;
      
                       break; 
                   case '4':
                        $vendedor =$this->input->get('vendedor', TRUE);
                       $data['reporte']=$this->evento_model->reporteVendedor($vendedor);  
                       $data['titulo']="Reporte del Vendedor ".$vendedor;
      
                       break; 
                   case '5':
                       $data['reporte']=$this->evento_model->reporteGeneral();      
                       $data['titulo']="Reporte General ";
  
                        break; 
              }
      
        $this->load->view('inc_menu3.php');
        $this->load->view('inc_menu4.php');
        $this->load->view('evento/reporte',$data);
        $this->load->view('inc_fin2.php');

    }


    function crearEvento(){

        $data['arrEvento']=$this->evento_model->crearEvento();
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
        $this->load->view('usuario/administrador/evento',$data);
        $this->load->view('inc_fin.php');
    }


} 
