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
		$this->load->model("User_model");
	}
	
	
	
	public function index()
	{

		
		


		if($this->session->userdata("login")){
			
			redirect(base_url()."dashboard");
			
			
		}
		
		else{
		
        $this->load->view('admin/login.php');
}
		
	}
	
	
	public function login(){
		
		$username = $this->input->post("correo");
		$password = $this->input->post("contraseña");
		$res = $this->User_model->login($username,$password);

		if (!$res) {
			
			$this->session->set_flashdata("error","Correo o Contraseña Incorrectos");
			
			redirect(base_url());
		}
		else{
			$data  = array(
				'id_u' => $res->id_u, 
				'correo' => $res->correo,
				'rol' => $res->id_tipo_u,
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