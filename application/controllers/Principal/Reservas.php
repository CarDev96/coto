<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservas extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct(){
		parent::__construct();

		$this->permisos = $this->backend_lib->control();		
		$this->load->model("Espacios_model");
		
	}
	
	
	
	public function index()
	{

		$data = array(


			'info_espacios' => $this->Espacios_model->getesp(),
			'permisos' => $this->permisos, 			

		);

        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/espacios/list",$data);
		$this->load->view("layouts/footer");

		
	}
	
	
	public function listr()
	{

		$data = array(


			'info_espacios' => $this->Espacios_model->getesp(),
			'permisos' => $this->permisos, 			

		);

        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/espacios/list_r",$data);
		$this->load->view("layouts/footer");

		
	}
		
    public function add(){
        
	  
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
		}

		$data = array(

			'info_dias' =>$this->Espacios_model->getdia(),
			'permisos' => $this->permisos, 			


		);
				
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/espacios/add",$data);
		$this->load->view("layouts/footer");
        
        
	} //fin function add()

    public function reservar($id){
        
	  
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
		}

		$data = array(

			'info_reserva' =>$this->Espacios_model->getesp2($id),
			'info_dias' =>$this->Espacios_model->get_dias2($id),
			'permisos' => $this->permisos, 			


		);
				
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/espacios/reserva",$data);
		$this->load->view("layouts/footer");
        
        
	} //fin function add()	


    public function reservas($id){
        
	  
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
		}

		$data = array(

			'info_reserva2' =>$this->Espacios_model->getreservas($id),
			'info_reserva' =>$this->Espacios_model->getesp2($id),
			
			'permisos' => $this->permisos, 			


		);
				
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/espacios/reservas",$data);
		$this->load->view("layouts/footer");
        
        
	} //fin function add()		

    public function v_rechazar($id){
        
	  
   

		$data = array(

			
			'info_reserva4' =>$this->Espacios_model->getre2($id),
			
			


		);
				
        
        
		
		$this->load->view("admin/espacios/v_reservas",$data);
		
        
        
	} //fin function add()		
	
    public function edit($id){
        
	  
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
		}

		$data = array(

			'info_edit' =>$this->Espacios_model->getesp2($id),
			'info_dias2' =>$this->Espacios_model->get_dias2($id),
			'info_dias' =>$this->Espacios_model->getdia(),			
			'permisos' => $this->permisos, 			


		);
				
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/espacios/edit",$data);
		$this->load->view("layouts/footer");
        
        
    } //fin function add()	
    
    public function nuevo()
    {

        $config['upload_path'] = './assets/images/espacios';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
		$config['max_height'] = '2008'; 
		
        $this->load->library('upload',$config);
        
                if (!$this->upload->do_upload("foto_es")) {
            
            $this->session->set_flashdata( 'error_msg', $this->upload->display_errors() );            
            redirect(base_url()."Administrador/Espacios/add");
        } else {	
			
            $file_info = $this->upload->data();

            $this->crearMiniatura($file_info['file_name']);            

		//Agregar campos en los textFields
		
        $foto_es = $file_info['file_name'];  		

        $name_es = $this->input->post("name_es"); //id_casa

        $descri_es = $this->input->post("descri_es"); //id_concepto_in
		
		$dias_disp = $this->input->post("dias_disp"); //ingreso

		echo $dias_disp;

        if(is_null($dias_disp)){
            
            
            $new_dias = $dias_disp;
            
        }
     else{
     
        $new_dias = implode(",",$dias_disp);
        }


        $data = array(

            'name_es' => $name_es,

            'foto_es' => $foto_es,

            'descri_es' => $descri_es,


        );


        if ($this->Espacios_model->save($data,$new_dias)) {



            redirect(base_url() . "Administrador/Espacios/add");
        } else {

            redirect(base_url() . "Administrador/Espacios/add");
		}
	}
	} //fin 

    public function res()
    {


		//Agregar campos en los textFields
		
        

        $id_es = $this->input->post("id_espacio"); //id_casa

        $id_casa = $this->input->post("id_casa"); //id_concepto_in
		
		$fecha_reserva = $this->input->post("fecha_reserva"); //ingreso

		$hora_reserva = $this->input->post("hora_reserva"); //ingreso

        $newDate = date("Y-m-d", strtotime($fecha_reserva));		

		$estatus_reserva = "En revisión";

		$dia_elegido = date("w",strtotime($newDate));

		echo $dia_elegido;

		if(!$this->Espacios_model->getdisp($id_es,$dia_elegido)){

            $this->session->set_flashdata( 'error_msg', 'Día  no disponible para reservación' );            
            redirect(base_url()."Principal/Reservas/reservar/$id_es");
		}

		
		if($this->Espacios_model->getfr($newDate)){

            $this->session->set_flashdata( 'error_msg', 'Ya existe una reservacion para esa fecha' );            
            redirect(base_url()."Principal/Reservas/reservar/$id_es");			

		}


        $data = array(

            'id_es' => $id_es,

            'id_casa' => $id_casa,

			'fecha_reserva' => $newDate,
			
			'hora_reserva' => $hora_reserva,
			
            'estatus_reserva' => $estatus_reserva,


        );


        if ($this->Espacios_model->res($data)) {



            redirect(base_url() . "Principal/Reservas/reservar/$id_es");
        } else {

            redirect(base_url() . "Principal/Reservas/reservar/$id_es");
		}
	
	} //fin 	

    public function reservasp($id){

  
		$data = array(

			'info_espacios' =>$this->Espacios_model->getres($id),
			
			'permisos' => $this->permisos, 			


		);
				
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/espacios/view_reservas",$data);
		$this->load->view("layouts/footer");		

	}	
	
    public function aceptar($id){

		$aceptar = "Aceptado";
  
		$data = array(

			'estatus_reserva' => $aceptar
			
			


		);
				
		if($this->Espacios_model->aceptar($data,$id)){

            redirect(base_url() . "Administrador/Espacios");
        } else {

            redirect(base_url() . "Administrador/Espacios");
		}


	}
	
    public function rechazar(){

        
		$motivo_rechazo = $this->input->post("motivorechazo");

		$rechazar = "Rechazado";

		$id_reserva = $this->input->post("id_reserva");
   

		$data = array(

			
			'motivo_cancelacion' =>$motivo_rechazo,

			'estatus_reserva' =>$rechazar,
			
			


		);
				
				
		if($this->Espacios_model->rechazar($data,$id_reserva)){

            redirect(base_url() . "Administrador/Espacios");
        } else {

            redirect(base_url() . "Administrador/Espacios");
		}


	}	

    public function update()
    {

		


		$id_es = $this->input->post("id_es"); //id_casa
		
        $name_es = $this->input->post("name_es"); //id_casa

        $descri_es = $this->input->post("descri_es"); //id_concepto_in
		
		$dias_disp = $this->input->post("dias_disp"); //ingreso

        if(is_null($dias_disp)){
            
            
            $new_dias = $dias_disp;
            
        }
     else{
     
        $new_dias = implode(",",$dias_disp);
        }


        if (empty($_FILES['foto_es']['name'])){
      
            $datos_recuperados = $this->Espacios_model->CapturarArchivo($id_es);
            $imagen = $datos_recuperados->foto_perfil;//recupero el nombre de la imagen
            
            
        }//Compruebo si el array $_files no tiene ningun valor en  su elemento name       

        else{
        
            $config = [
                
            "upload_path" => "./assets/images/espacios",
            "allowed_types" => "gif|jpg|png",
            "max_size" => "2048"
                
                
            ];
            
            $this->load->library("upload",$config);
            
            if ($this->upload->do_upload("foto_es")) {
                
                $registro = $this->Espacios_model->CapturarArchivo($id_es);
                
                
                
                unlink("./assets/images/espacios/".$registro->foto_es);
                unlink("./assets/images/espacios/thumbs/".$registro->foto_es);
                
                $data3 = array("upload_data" => $this->upload->data());
                $this->crearMiniatura($data3['upload_data']['file_name']);
                
                $imagen = $data3['upload_data']['file_name'];
                
            }else{
                
                echo $this->upload->display_errors();
                
            } 
                
            }          
 
        $data = array(

            


            'name_es' => $name_es,

            'foto_es' => $imagen,

            'descri_es' => $descri_es,          

            


        );


        if ($this->Espacios_model->update($data,$id_es,$new_dias)) {



            redirect(base_url() . "Administrador/Espacios");
        } else {

            redirect(base_url() . "Administrador/Espacios");
        }
	} //fin  	
	
    function crearMiniatura($file_name){

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
                
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/images/espacios/'.$file_name;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='assets/images/espacios/thumbs/';
        $config['thumb_marker']='';//captura_thumb.png
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();
	}    	
	
}
