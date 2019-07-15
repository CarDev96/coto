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
		$this->load->model("Usuarios_model");
		$this->load->model("Permisos_model");
	}
	
	
	
	public function index()
	{

		$data = array(

			'info_permisos' => $this->Permisos_model->getPermisos()

		);
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/list",$data);
		$this->load->view("layouts/footer");

		
	}
	
    public function add(){
        
      
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

        $username = $this->input->post("username"); //id_concepto_in

        $pass = $this->input->post("pass"); //ingreso

        $rol = $this->input->post("rol");

        $estado = "1";

 
        $data = array(

            'id_casa' => $id_casa,

            'username' => $username,

            'pass' => sha1($pass),

            'id_rol' => $rol,

            'estado' => $estado,


        );


        if ($this->Usuarios_model->save($data)) {



            redirect(base_url() . "Administrador/Usuarios/add");
        } else {

            redirect(base_url() . "Administrador/Usuarios/add");
        }
    } //fin 
	
}