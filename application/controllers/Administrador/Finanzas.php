<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finanzas extends CI_Controller
{

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

	public function __construct()
	{
		parent::__construct();

		$this->permisos = $this->backend_lib->control();

		$this->load->model("Finanzas_model");
		$this->load->model("Ingresos_model");
	}



	public function index()
	{



		$data = array(

			'info_mes' => $this->Finanzas_model->getinfo(),
			'permisos' => $this->permisos,			

		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/finanzas/list_mes", $data);
		$this->load->view("layouts/footer");
	}

	public function estadoc($id)
	{

		$total_in = $this->Finanzas_model->getsumin($id);
		
		

		$total_eg = $this->Finanzas_model->getsumeg($id);

		$ingreso_int = floatval($total_in->a);

		$egreso_int = floatval($total_eg->a);
		

		$capital_mes = $ingreso_int - $egreso_int;

		$this->Finanzas_model->savecapm($capital_mes,$id);

		$id_ant = $id -1;

		$info_cap = $this->Finanzas_model->getcapi($id);

		$info_cap_a = $this->Finanzas_model->getcapiant($id_ant);

		$ingreso_int2 = floatval($info_cap->monto_capital);
		
		if(!is_null($info_cap_a)){

		$mes_ant = floatval($info_cap_a->monto_capital);

		
		}else{

			$mes_ant = 0;

		}

		$cap_total =  $ingreso_int2 + $mes_ant;		


            
		$data = array(

			'info_ingresos' => $this->Finanzas_model->getinfoing($id),

			'info_capital' => $this->Finanzas_model->getcapi($id),

			'info_egresos' => $this->Finanzas_model->getinfoeg($id),

			'sum_in' => $this->Finanzas_model->getsumin($id),

			'sum_eg' => $this->Finanzas_model->getsumeg($id),

			'info_mes' => $this->Finanzas_model->getmes($id),

			'info_cap_ant' => $this->Finanzas_model->getcapiant($id_ant),

			


		);


	$this->load->view("layouts/header");
	$this->load->view("layouts/aside");
	$this->load->view("admin/finanzas/estado_cuenta",$data);
	$this->load->view("layouts/footer");	
	
	$this->Finanzas_model->updatecap($cap_total,$id);
	
	}	
}
