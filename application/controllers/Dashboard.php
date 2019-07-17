<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
       public function __construct(){
		parent::__construct();
		
		if(!$this->session->userdata("login")){

			redirect(base_url());


		}

$this->load->model("Dashboard_model");
$this->load->model("Ingresos_model");
$this->load->model("Egresos_model");
     
  	
     
	} 

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
	public function index()
	{

		$id_user = $this->session->userdata("id_usuario");
	     
      $data = array(

			
		'count_casas' => $this->Dashboard_model->countcasa(),
		'count_deudor' => $this->Dashboard_model->countdeudor(),
		'sum_ingresos' => $this->Ingresos_model->getsumtotal(),
		'sum_egresos' => $this->Egresos_model->getegreso(),
		'sum_enero' => $this->Dashboard_model->sumenero(),		
		'sum_enero_gasto' => $this->Dashboard_model->sumenerogasto(),		

		'sum_febrero' => $this->Dashboard_model->sumfebrero(),		
		'sum_febrero_gasto' => $this->Dashboard_model->sumfebrerogasto(),				

		'sum_marzo' => $this->Dashboard_model->summarzo(),		
		'sum_marzo_gasto' => $this->Dashboard_model->summarzogasto(),		

		'sum_abril' => $this->Dashboard_model->sumabril(),		
		'sum_abril_gasto' => $this->Dashboard_model->sumabrilgasto(),				

		'sum_mayo' => $this->Dashboard_model->summayo(),
		'sum_mayo_gasto' => $this->Dashboard_model->summayogasto(),
		
		'sum_junio' => $this->Dashboard_model->sumjunio(),
		'sum_junio_gasto' => $this->Dashboard_model->sumjuniogasto(),
		
		'sum_julio' => $this->Dashboard_model->sumjulio(),
		'sum_julio_gasto' => $this->Dashboard_model->sumjuliogasto(),
		
		'sum_agosto' => $this->Dashboard_model->sumagosto(),
		'sum_agosto_gasto' => $this->Dashboard_model->sumagostogasto(),
		
		'sum_septiembre' => $this->Dashboard_model->sumseptiembre(),
		'sum_septiembre_gasto' => $this->Dashboard_model->sumseptiembregasto(),
		
		'sum_octubre' => $this->Dashboard_model->sumoctubre(),
		'sum_octubre_gasto' => $this->Dashboard_model->sumoctubregasto(),
		
		'sum_noviembre' => $this->Dashboard_model->sumnoviembre(),
		'sum_noviembre_gasto' => $this->Dashboard_model->sumnoviembregasto(),
		
		'sum_diciembre' => $this->Dashboard_model->sumdiciembre(),
		'sum_diciembre_gasto' => $this->Dashboard_model->sumdiciembregasto(),		

		'info_aviso' => $this->Dashboard_model->avisos(),		

		'info_usuario' => $this->Dashboard_model->user($id_user)	



	  );
		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside",$data);
		$this->load->view("admin/dashboard",$data);
		$this->load->view("layouts/footer");

	}
}