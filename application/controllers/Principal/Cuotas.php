<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cuotas extends CI_Controller {

      private $permisos;
       public function __construct(){



		parent::__construct();

        $this->permisos = $this->backend_lib->control();

		if(!$this->session->userdata("login")){

			redirect(base_url());


		}        
		$this->load->model("Cuotas_model");
  	
     
	} 


	public function index()
	{
     
               $data = array(
            
            'permisos' => $this->permisos,    
            'info_con' => $this->Cuotas_model->getInfo(),

            ); 


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ingresos/list_cuotas",$data);
		$this->load->view("layouts/footer");

	}//fin function index()
   

    public function view_concepto($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            'info_a' => $this->Cuotas_model->get_concep($id),
            
            
        
        
        );
            
            
        
		$this->load->view("admin/ingresos/view_concepto",$data);
        
        
        
    }//fin function view   
    


    public function eliminar(){
    
                 
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        $id2 = $this->input->post('id',true);          
         
   $this->Fraccionamientos_model->delete($id2);

   redirect(base_url()."Principal/Fraccionamientos");


       
   }//fin function Eliminar    
        
   public function update(){

               
    if(! $this->permisos->insercion){ 
            
        redirect(base_url()); return; 
    
    }

    $id_concep_in = $this->input->post("id_concep_in");

    $n_monto = $this->input->post("n_monto");
    
    $data = array(


        "monto_f" => $n_monto



    );

    if($this->Cuotas_model->update($data,$id_concep_in)== true)
                  
                  
    redirect(base_url()."Principal/Cuotas");
  
  else
            
      redirect(base_url()."Principal/Cuotas");
      
      
     

   }

}