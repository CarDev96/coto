<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Egresos extends CI_Controller {
	
       public function __construct(){
        parent::__construct();
        
        $this->permisos = $this->backend_lib->control();        

		$this->load->model("Ingresos_model");
		$this->load->model("Egresos_model");
  	
     
	} 


	public function index()
	{
     
        $data = array(
            
            'info_gastos' => $this->Egresos_model->getinfo(),
			'sum_e' => $this->Egresos_model->getegreso(),
			'permisos' => $this->permisos,     
             


            ); 


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/gastos/list",$data);
		$this->load->view("layouts/footer");

    }//fin function index()

    public function add(){

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }        
        
        $data = array(
            
            'info_sum_total' => $this->Ingresos_model->getsumtotal(),            
            'info_egreso' => $this->Egresos_model->getegreso(),            
                     


            ); 



        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/gastos/add",$data);
		$this->load->view("layouts/footer");
        
        
	} //fin function add()
	
	public function nuevo(){

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }        

        $config['upload_path'] = './assets/images/gastos';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';        
        
        $this->load->library('upload',$config);
        
                if (!$this->upload->do_upload("recibo")) {
            
            $this->session->set_flashdata( 'error_msg', $this->upload->display_errors() );            
            redirect(base_url()."Principal/Egresos/add");
        } else {
                    
                    
            $file_info = $this->upload->data();

            $this->crearMiniatura($file_info['file_name']);            

        //Agregar campos en los textFields

        $recibo = $file_info['file_name'];                
        

        
        $txt_gasto = $this->input->post("txt_gasto"); //id_casa
         
        $fecha_gasto = $this->input->post("fecha_gasto"); //id_concepto_in
     
		$cantidad_gasto = $this->input->post("cantidad_gasto"); //ingreso
		
        $descripcion_gasto = $this->input->post("descripcion_gasto"); //fecha_ingreso       
        
		$newDate = date("Y-m-d", strtotime($fecha_gasto));
		
		$eliminado = 0;
        
       $data = array(
            
            'name_egreso' => $txt_gasto, 
        
            'monto_egreso' => $cantidad_gasto, 
           
            'descripcion_egreso' => $descripcion_gasto, 
           
            'fecha_egreso' => $newDate, 
			
			'archivos' => $recibo,
			
			'eliminado' => $eliminado
 

                     
                     ); 
        
      
        if( $this ->Egresos_model->save($data)){
            
             
                  
            redirect(base_url()."Principal/Egresos/add");
        }
        else{
                  
            redirect(base_url()."Principal/Egresos/add");
            
        }
            }   
    }//fin 	



    function crearMiniatura($file_name){

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
                
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/images/gastos/'.$file_name;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='assets/images/gastos/thumbs/';
        $config['thumb_marker']='';//captura_thumb.png
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();
	}    

    public function eliminar($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            
            'info_a' => $this->Egresos_model->geti($id),
            'info_motivo' => $this->Egresos_model->getmoti($id),
            
        
        
        );
            
            
        
		$this->load->view("admin/gastos/eliminar",$data);
        
        
        
    }//fin function view       
    	
	
	public function delete(){

               
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

        $id_egreso = $this->input->post("id_egreso");

        $usuario_elimina = $this->input->post("usuario_elimina");
        
		$motivo_elim = $this->input->post("motivo_elim");        

        $monto_mes = $this->input->post("monto_mes");

        $eliminado = 1;
         
        $fecha_eliminado = date("Y/m/d H:i:s");
     
 
        $data = array(


            "eliminado" => $eliminado,
            "motivo" => $motivo_elim,
            "fecha_eliminado" => $fecha_eliminado,
            "usuario_elimina" => $usuario_elimina

        );
      
            if($this->Egresos_model->delete($data,$id_egreso) == true)
                  
                  
                  redirect(base_url()."Principal/Egresos");
                
                else
                          
                    redirect(base_url()."Principal/Egresos");
                    
                
          
                
    }//fin        
	

}

