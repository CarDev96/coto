<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fraccionamientos extends CI_Controller {

      private $permisos;
       public function __construct(){



		parent::__construct();

        $this->permisos = $this->backend_lib->control();

		if(!$this->session->userdata("login")){

			redirect(base_url());


		}        
		$this->load->model("Fraccionamientos_model");
  	
     
	} 


	public function index()
	{
     
               $data = array(
            
            'permisos' => $this->permisos,    
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
            'info_perfil6' => $this->Fraccionamientos_model->getInfop6($id),              
            'info_sump' => $this->Fraccionamientos_model->getsump($id),              
            'info_sump2' => $this->Fraccionamientos_model->getsump2($id),  
            'permisos' => $this->permisos,                         
              


            ); 
          


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/fraccionamiento/perfil",$data);
		$this->load->view("layouts/footer");

	}//fin function index()    

    

    public function add(){
        
       
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
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
        
		$dd = explode("(",$telefono);
    
		$dd2 = explode(")",$dd[1]);    
			
		$dd3 = explode("-",$dd2[1]);   
		
		$telefono2 = $dd[0].$dd2[0].$dd3[0].$dd3[1];        
        
        $correo_casa = $this->input->post("correo_casa");        
        
        $renta = $this->input->post("renta");        
        
        $dueno = $this->input->post("dueno");        
        
        $telefono_dueno = $this->input->post("telefono_dueno");    

        $descuento_casa = $this->input->post("tch2");    

        $descripcion_desc = $this->input->post("descripcion_desc");    
        
        $dd4 = explode("(",$telefono_dueno);
    
		$dd5 = explode(")",$dd4[1]);    
			
		$dd6 = explode("-",$dd5[1]);   
		
		$telefono_dueno2 = $dd4[0].$dd5[0].$dd6[0].$dd6[1];

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
            
            'telefono' => $telefono2,            
            
            'email' => $correo_casa,            
            
            'dueno_casa' => $dueno,            
            
            'numero_dueno' => $telefono_dueno2,            
            
            'renta' => $renta_f,            
            
            'descuento_casa' => $descuento_casa,            
            
			'descripcion_desc' => $descripcion_desc,            
 
           
           
            
           
                     
                     
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

               
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

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

	public function liq(){

               
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

        $id_casa = $this->input->post("id_casa");

        $id_abono = $this->input->post("id_abono");

        $id_ingreso = $this->input->post("id_ingreso");

        $liquidacion = $this->input->post("liquidacion");

        $monto_mes = $this->input->post("monto_mes");
         
        $fecha_correspondiente = $this->input->post("fecha_correspondiente");
     
		$liquidacion = $this->input->post("liquidacion");

        $eliminado = 0;		
    

        $estatus = "Liquidado";

        $ingreso_int = intVal($monto_mes);

             
       $data = array(
            
            
        
            'monto_liquidacion' => $liquidacion, 
           
            'estatus_p' => $estatus, 

                     ); 
        
      
            if($this->Fraccionamientos_model->liq($data,$id_casa,$id_abono,$fecha_correspondiente,$liquidacion,$ingreso_int,$id_ingreso,$eliminado) == true)
                  
                  
                  redirect(base_url()."Principal/Fraccionamientos");
                
                else
                          
                    redirect(base_url()."Principal/Fraccionamientos");
                    
                
          
                
    }//fin 	    

    public function view($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            'info_up' => $this->Fraccionamientos_model->getinfo_up($id),
            
        
        
        );
            
            
        
		$this->load->view("admin/fraccionamiento/view",$data);
        
        
        
    }//fin function view



    public function view_a($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            'info_monto' => $this->Fraccionamientos_model->get_monto(),
            'info_a' => $this->Fraccionamientos_model->get_a($id),
            
        
        
        );
            
            
        
		$this->load->view("admin/fraccionamiento/view_abono",$data);
        
        
        
    }//fin function view    

    public function eliminar(){
    
                 
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        $id2 = $this->input->post('id',true);          
         
   $this->Fraccionamientos_model->delete($id2);

   redirect(base_url()."Principal/Fraccionamientos");


       
   }//fin function Eliminar    
        

}
