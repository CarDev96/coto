<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fraccionamientos extends CI_Controller {
	
       public function __construct(){
		parent::__construct();

		$this->load->model("Fraccionamientos_model");
  	
     
	} 


	public function index()
	{
     
               $data = array(
            
            'info_casas' => $this->Fraccionamientos_model->getInfo()


            ); 


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/fraccionamiento/list",$data);
		$this->load->view("layouts/footer");

	}//fin function index()
   

	public function perfil($id)
	{
     
        $data = array(
            
            'info_perfil' => $this->Fraccionamientos_model->getInfop($id),
            'info_perfil2' => $this->Fraccionamientos_model->getInfop2($id),            
            'info_perfil3' => $this->Fraccionamientos_model->getInfop3($id),              
            'info_perfil4' => $this->Fraccionamientos_model->getInfop4($id),              
            'info_perfil5' => $this->Fraccionamientos_model->getInfop5($id),              
            'info_sump' => $this->Fraccionamientos_model->getsump($id),              


            ); 
          


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/fraccionamiento/perfil",$data);
		$this->load->view("layouts/footer");

	}//fin function index()    

    

    public function add(){
        
       

        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/fraccionamiento/add");
		$this->load->view("layouts/footer");
        
        
	} //fin function add()
	
	public function nuevo(){

        
        $propietario = $this->input->post("propietario");
         
        $numero_casa = $this->input->post("numero_casa");
     
		$habitada = $this->input->post("habitada");
		
        $direccion = $this->input->post("calle");
        
		$telefono = $this->input->post("telefono");        

		$estatus = "Deudor";
        
           
       $data = array(
            
            'id_casa' => $numero_casa, 
        
            'responsable' => $propietario, 
           
            'habitada' => $habitada, 
           
			'direccion' => $direccion, 
			
            'estatus_pago' => $estatus,
            
			'telefono' => $telefono,            
 
           
           
            
           
                     
                     
                     ); 
        
      
        if( $this ->Fraccionamientos_model->save($data)){
            
             //  $this->session->set_flashdata('Add', 'Invitacion Agregada Correctamente');
                  
            redirect(base_url()."Principal/Fraccionamientos/add");
        }
        else{
                  //   $this->session->set_flashdata('Add', 'Invitacion Agregada Correctamente');
            redirect(base_url()."Principal/Fraccionamientos/add");
            
        }
                
    }//fin 	

}