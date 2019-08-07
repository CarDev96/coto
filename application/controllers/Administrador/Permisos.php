<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

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
		$this->load->model("Usuarios_model");
		$this->load->model("Permisos_model");
	}
	
	
	
	public function index()
	{
		if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

		$data = array(

			'info_permisos' => $this->Permisos_model->getPermisos()

		);
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/list",$data);
		$this->load->view("layouts/footer");

		
	}
	
    public function add(){
        
	  
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
		}
				
        $data = array(

            'info_menu' => $this->Permisos_model->getmenu(),
            'info_rol' => $this->Usuarios_model->getrol(),
        );
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/add",$data);
		$this->load->view("layouts/footer");
        
        
    } //fin function add()
    
    public function nuevo()
    {


        $id_rol = $this->input->post("id_rol"); //id_casa

        $id_menu = $this->input->post("id_menu"); //id_concepto_in

		$leer = $this->input->post("leer"); //ingreso
		
		if(is_null($leer)){

			$n_leer = 0;
		}else{

			$n_leer = $leer;
		}

		$agrega = $this->input->post("agrega"); //ingreso
		
		if(is_null($agrega)){

			$n_agrega = 0;
		}else{

			$n_agrega = $agrega;
		}


		$edita = $this->input->post("edita"); //ingreso
		
		if(is_null($edita)){

			$n_edita = 0;
		}else{

			$n_edita = $edita;
		}		

		$elimina = $this->input->post("elimina"); //ingreso
		
		if(is_null($elimina)){

			$n_elimina = 0;
		}else{

			$n_elimina = $elimina;
		}

   
        $data = array(

            'id_rol' => $id_rol,

            'id_menu' => $id_menu,

            'lectura' => $n_leer,

            'insercion' => $n_agrega,

			'actualizar' => $n_edita,
			
            'borrar' => $n_elimina,


        );


        if ($this->Permisos_model->save($data)) {



            redirect(base_url() . "Administrador/Permisos/add");
        } else {

            redirect(base_url() . "Administrador/Permisos/add");
        }
    } //fin 
	
}
