<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fraccionamientos extends CI_Controller {
	
       public function __construct(){
		parent::__construct();

		if(!$this->session->userdata("login")){

			redirect(base_url());


		}        
		$this->load->model("Fraccionamientos_model");
  	
     
	} 


	public function index()
	{
     
               $data = array(
            
            'info_casas' => $this->Fraccionamientos_model->getInfo(),

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
        
        $correo_casa = $this->input->post("correo_casa");        
        
        $renta = $this->input->post("renta");        
        
        $dueno = $this->input->post("dueno");        
        
        $telefono_dueno = $this->input->post("telefono_dueno");        

        $estatus = "Deudor";
        
        if(is_null($renta)){

            $renta_f = "No";



        }else{

            $renta_f = $renta;



        }
        
           
       $data = array(
            
            'id_casa' => $numero_casa, 
        
            'responsable' => $propietario, 
           
            'habitada' => $habitada, 
           
			'direccion' => $direccion, 
			
            'estatus_pago' => $estatus,
            
            'telefono' => $telefono,            
            
            'email' => $correo_casa,            
            
            'dueno_casa' => $dueno,            
            
            'numero_dueno' => $telefono_dueno,            
            
			'renta' => $renta_f,            
 
           
           
            
           
                     
                     
                     ); 
        
      
        if( $this ->Fraccionamientos_model->save($data)){
            
             //  $this->session->set_flashdata('Add', 'Invitacion Agregada Correctamente');
                  
            redirect(base_url()."Principal/Fraccionamientos");
        }
        else{
                  //   $this->session->set_flashdata('Add', 'Invitacion Agregada Correctamente');
            redirect(base_url()."Principal/Fraccionamientos/add");
            
        }
                
    }//fin 	

	public function update(){

        
        $id_casa = $this->input->post("id_casa");

        $propietario = $this->input->post("propietario");
         
        $numero_casa = $this->input->post("numero_casa");
     
		$habitada = $this->input->post("habitada");
		
        $direccion = $this->input->post("calle");
        
		$telefono = $this->input->post("telefono");        

		$estatus = $this->input->post("estatus");        
        
        $correo_casa = $this->input->post("correo_casa");        
        
        $renta = $this->input->post("renta");        
        
        $dueno = $this->input->post("dueno");        
        
        $telefono_dueno = $this->input->post("telefono_dueno");        

        $estatus = "Deudor";
        
        if(is_null($renta)){

            $renta_f = "No";



        }else{

            $renta_f = $renta;



        }
             
       $data = array(
            
            
        
            'responsable' => $propietario, 
           
            'habitada' => $habitada, 
           
			'direccion' => $direccion, 
			
            'estatus_pago' => $estatus,
            
            'telefono' => $telefono,  
            
            
            'email' => $correo_casa,            
            
            'dueno_casa' => $dueno,            
            
            'numero_dueno' => $telefono_dueno,            
            
			'renta' => $renta_f,            
 
           
           
                        
 
           
           
            
           
                     
                     
                     ); 
        
      
            if($this->Fraccionamientos_model->update($id_casa,$data) == true)
                  
                  
                  redirect(base_url()."Principal/Fraccionamientos");
                
                else
                          
                    redirect(base_url()."Principal/Fraccionamientos");
                    
                
          
                
    }//fin 	

    public function view($id){
        
       
        
        $data = array(
            

            
            'info_up' => $this->Fraccionamientos_model->getinfo_up($id),
            
        
        
        );
            
            
        
		$this->load->view("admin/fraccionamiento/view",$data);
        
        
        
    }//fin function view

    public function eliminar(){
    
          
        $id2 = $this->input->post('id',true);          
         
   $this->Fraccionamientos_model->delete($id2);

   redirect(base_url()."Principal/Fraccionamientos");


       
   }//fin function Eliminar    
        

}