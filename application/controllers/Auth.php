<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	}
	
	
	
	public function index()
	{

		
		
		if($this->session->userdata("login")){

			redirect(base_url()."Dashboard");


		}
		else{

		$this->load->view("layouts/header_log");
		
		$this->load->view('admin/login');
		
		$this->load->view("layouts/footer_log");		
		
	}

		
	}
	
	
	public function login(){
		
		$username = $this->input->post("correo");
		$password = $this->input->post("contraseña");
		$res = $this->Usuarios_model->login($username, sha1($password));

		if (!$res) {
			
			$this->session->set_flashdata("error","Correo o Contraseña Incorrectos");
			
			redirect(base_url());
		}
		else{
			$data  = array(
				'id_usuario' => $res->id_usuario, 
				'username' => $res->username,
				'rol' => $res->id_rol,
				'login' => TRUE
			);
			
			$this->session->set_userdata($data);


			
		

			redirect(base_url()."Dashboard");
			
		}
	}
	
	
		public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
	
}