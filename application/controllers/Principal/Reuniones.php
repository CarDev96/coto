<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reuniones extends CI_Controller
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
		if (!$this->session->userdata("login")) {

			redirect(base_url());
		}
		$this->load->model("Reuniones_model");

		$this->load->model("Fraccionamientos_model");
	}



	public function index()
	{

		$data = array(


			'info_asistencia' => $this->Reuniones_model->getreu(),
			'permisos' => $this->permisos
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reuniones/list", $data);
		$this->load->view("layouts/footer");
	}

	public function asistencia()
	{

		if (!$this->permisos->insercion) {

			redirect(base_url());
			return;
		}

		$data = array(

			'info_casas' => $this->Fraccionamientos_model->getInfo(),
			'permisos' => $this->permisos


		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reuniones/asistencia", $data);
		$this->load->view("layouts/footer");
	} //fin function add()

	public function actualizar($id)
	{

		if (!$this->permisos->insercion) {

			redirect(base_url());
			return;
		}

		$data = array(

			'editar' => $this->Avisos_model->getaviso($id)





		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/avisos/edit", $data);
		$this->load->view("layouts/footer");
	} //fin function    

	public function nuevo()
	{
		if (!$this->permisos->insercion) {

			redirect(base_url());
			return;
		}

		$id_casa = $this->input->post("id_casa"); //id_casa

		$hora_asistencia = $this->input->post("hora_asistencia"); //id_concepto_in

		$id_aviso = $this->input->post("id_aviso"); //ingreso

		$fecha_asistencia = date("Y-m-d");



		$data = array(


			'id_casa' => $id_casa,

			'id_aviso' => $id_aviso,

			'hora_asistencia' => $hora_asistencia,

			'fecha_asistencia' => $fecha_asistencia




		);


		if ($this->Reuniones_model->save($data)) {



			redirect(base_url() . "Principal/Reuniones/asistencia");
		} else {

			redirect(base_url() . "Principal/Reuniones/asistencia");
		}
	} //fin 


	public function update()
	{

		if (!$this->permisos->insercion) {

			redirect(base_url());
			return;
		}

		$id_aviso = $this->input->post("id_aviso"); //id_casa

		$mensaje_anuncio = $this->input->post("mensaje_anuncio"); //id_concepto_in








		if ($this->Avisos_model->update($mensaje_anuncio, $id_aviso)) {



			redirect(base_url() . "Principal/Avisos");
		} else {

			redirect(base_url() . "Principal/Avisos");
		}
	} //fin 

	public function eliminar()
	{

		if (!$this->permisos->insercion) {

			redirect(base_url());
			return;
		}

		$id2 = $this->input->post('id', true);

		$this->Avisos_model->delete($id2);

		redirect(base_url() . "Principal/Avisos");
	} //fin function Eliminar    

	public function view_r($id)
	{


		if (!$this->permisos->insercion) {

			redirect(base_url());
			return;
		}

		$data = array(



			'info_a' => $this->Fraccionamientos_model->getinfo_up($id),

			'info_reunion' => $this->Reuniones_model->getreu()



		);



		$this->load->view("admin/reuniones/view_r", $data);
	} //fin function view

	public function view_a($id)
	{


		if (!$this->permisos->insercion) {

			redirect(base_url());
			return;
		}


		$data =  array(

			'count_asis' => $this->Reuniones_model->countasis($id),
			'info_asistentes' => $this->Reuniones_model->getasistentes($id),
			'info_e' => $this->Reuniones_model->getevento($id),

		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reuniones/view_a",$data);
		$this->load->view("layouts/footer");

	} //fin function view


}
