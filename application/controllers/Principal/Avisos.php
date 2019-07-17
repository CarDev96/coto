<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avisos extends CI_Controller {

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
		$this->load->model("Avisos_model");
		
	}
	
	
	
	public function index()
	{

        $data = array(

            'info_avisos' => $this->Avisos_model->getinfo()


        );

	
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/avisos/list",$data);
		$this->load->view("layouts/footer");

		
	}
	
    public function add(){
        
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/avisos/add");
		$this->load->view("layouts/footer");
        
        
    } //fin function add()

    public function actualizar($id){

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }        
        
        $data = array(
            
            'editar' => $this->Avisos_model->getaviso($id)
             
                 
                     

            
            );
      
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/avisos/edit",$data);
		$this->load->view("layouts/footer");
        
        
    } //fin function    
    
    public function nuevo()
    {
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

        $fecha_anuncio = $this->input->post("fecha_anuncio"); //id_casa

        $mensaje_anuncio = $this->input->post("mensaje_anuncio"); //id_concepto_in

		$fecha_retiro = $this->input->post("fecha_retiro"); //ingreso

        $newDate = date("Y-m-d", strtotime($fecha_anuncio));

        $newDate2 = date("Y-m-d", strtotime($fecha_retiro));
   
        $data = array(


            'fecha_aviso' => $newDate,

            'fecha_retiro' => $newDate2,

            'mensaje_anuncio' => $mensaje_anuncio

		


        );


        if ($this->Avisos_model->save($data)) {



            redirect(base_url() . "Principal/Avisos");
        } else {

            redirect(base_url() . "Principal/Avisos");
        }
    } //fin 
    
    
    public function update()
    {

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

        $id_aviso = $this->input->post("id_aviso"); //id_casa

        $mensaje_anuncio = $this->input->post("mensaje_anuncio"); //id_concepto_in






  

        if ($this->Avisos_model->update($mensaje_anuncio,$id_aviso)) {



            redirect(base_url() . "Principal/Avisos");
        } else {

            redirect(base_url() . "Principal/Avisos");
        }
    } //fin 

    public function eliminar($id){

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }        
    
        $this->Avisos_model->delete($id);
    redirect(base_url()."Principal/Avisos");
    
            
        }//fin function Eliminar    


}