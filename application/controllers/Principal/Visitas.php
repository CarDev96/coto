<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Twilio\Rest\Client;

class Visitas extends CI_Controller
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

		$this->load->library('Ciqrcode');
		$this->load->library('WhatsmsApi');

		$this->load->model("Ingresos_model");
		$this->load->model("Visitas_model");
	}



	public function index()
	{

		$data = array(


			'permisos' => $this->permisos,


		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/list", $data);
		$this->load->view("layouts/footer");
	}

	public function historial($id)
	{

		$data = array(

			'info_visita' => $this->Visitas_model->getinfo2($id),
			'permisos' => $this->permisos,


		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/list", $data);
		$this->load->view("layouts/footer");
	}


	public function confirmar($id)
	{



		$this->Visitas_model->asistencia($id);





		redirect(base_url() . "Principal/Visitas/guardia");
	}

	public function guardia()
	{

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/menu_g");
		$this->load->view("layouts/footer");
	}

	public function list_visita_g()
	{

		$data = array(

			'info_visita3' => $this->Visitas_model->getinfo6(),
			'permisos' => $this->permisos,


		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/list_g", $data);
		$this->load->view("layouts/footer");
	}

	public function list_visita_s()
	{

		$data = array(

			'info_visita3' => $this->Visitas_model->getinfo7(),
			'permisos' => $this->permisos,


		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/list_servicios", $data);
		$this->load->view("layouts/footer");
	}	

	public function add()
	{

		$data = array(

			'info_visita' => $this->Visitas_model->getinfo(),
			'info_tipo_vi' => $this->Visitas_model->getinfo5(),
			'info_marca' => $this->Visitas_model->getmarca(),


		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/add", $data);
		$this->load->view("layouts/footer");
	} //fin function add()

	public function add_g()
	{

		$data = array(

			'info_visita' => $this->Visitas_model->getinfo(),
			'info_tipo_vi' => $this->Visitas_model->getinfo5(),
			'info_marca' => $this->Visitas_model->getmarca(),
			'info_casas' => $this->Ingresos_model->getinfo(),


		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/add_g", $data);
		$this->load->view("layouts/footer");
	} //fin function add()	

	public function nuevo()
	{


		$id_tipo_v = $this->input->post("id_tipo_v"); //id_casa

		$id_casa = $this->input->post("id_casa"); //id_concepto_in

		$nombre_visitante = $this->input->post("nombre_visitante"); //ingreso

		$fecha_visita = $this->input->post("fecha_visita"); //ingreso

		$max_persona = $this->input->post("max_persona"); //ingreso

		$telefono_v = $this->input->post("telefono_v"); //ingreso

		$dias_d = $this->input->post("dias_d"); //ingreso

		$codigo_a = $this->input->post("codigo_a"); //ingreso

		$id_tipo_vi = $this->input->post("id_tipo_vi"); //ingreso

		$marca_v = $this->input->post("marca_v"); //ingreso

		$color_v = $this->input->post("color_v"); //ingreso

		$placas_v = $this->input->post("placas_v"); //ingreso

		$dd = explode("(", $telefono_v);

		$dd2 = explode(")", $dd[1]);

		$dd3 = explode("-", $dd2[1]);

		$telefono_v2 = $dd[0] . $dd2[0] . $dd3[0] . $dd3[1];

		$newDate = date("Y-m-d", strtotime($fecha_visita));

		$date = date_create("$newDate");

		date_add($date, date_interval_create_from_date_string("$dias_d DAY"));

		$finalizacion = date_format($date, "Y-m-d");

		$this->QRcode($codigo_a);

		$data = array(


			'id_tipo_v' => $id_tipo_v,

			'id_casa' => $id_casa,

			'nombre_visitante' => $nombre_visitante,

			'fecha_visita' => $newDate,

			'max_persona' => $max_persona,

			'telefono_v' => $telefono_v2,

			'fecha_vencimiento' => $finalizacion,

			'codigo_a' => $codigo_a,

			'id_tipo_vi' => $id_tipo_vi,

			'marca_auto' => $marca_v,

			'color_auto' => $color_v,

			'placas_auto' => $placas_v,




		);


		if ($this->Visitas_model->save($data)) {


			redirect(base_url() . "Principal/Visitas/add");
		} else {

			redirect(base_url() . "Principal/Visitas/add");
		}
	} //fin 

	public function nuevo_g()
	{

		$config['upload_path'] = './assets/images/ine';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['max_width'] = '2024';
		$config['max_height'] = '2008';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload("foto_ine")) {

			$this->session->set_flashdata('error_msg', $this->upload->display_errors());
			redirect(base_url() . "Principal/Visitas/add_g");
		} else {


			$file_info = $this->upload->data();
			$this->crearMiniatura($file_info['file_name']);
		}

		$config['upload_path'] = './assets/images/auto';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['max_width'] = '2024';
		$config['max_height'] = '2008';


		// Cargamos la nueva configuración
		$this->upload->initialize($config);

		if ($this->upload->do_upload("foto_auto")) {
			$data = $this->upload->data();
			$this->crearMiniatura2($data['file_name']);
			$foto_auto = $data['file_name'];

		} else {

			$this->session->set_flashdata('error_msg', $this->upload->display_errors());
			redirect(base_url() . "Principal/Visitas/add_g");
		}


		$foto_ine = $file_info['file_name'];

		$id_tipo_v = $this->input->post("id_tipo_v"); //id_casa

		$id_casa = $this->input->post("id_casa"); //id_concepto_in

		$nombre_visitante = $this->input->post("nombre_visitante"); //ingreso

		$fecha_visita = $this->input->post("fecha_visita"); //ingreso

		$max_persona = $this->input->post("max_persona"); //ingreso

		$telefono_v = $this->input->post("telefono_v"); //ingreso

		$dias_d = $this->input->post("dias_d"); //ingreso

		$codigo_a = $this->input->post("codigo_a"); //ingreso

		$id_tipo_vi = $this->input->post("id_tipo_vi"); //ingreso

		$marca_v = $this->input->post("marca_v"); //ingreso

		$color_v = $this->input->post("color_v"); //ingreso

		$placas_v = $this->input->post("placas_v"); //ingreso

		$dd = explode("(", $telefono_v);

		$dd2 = explode(")", $dd[1]);

		$dd3 = explode("-", $dd2[1]);

		$telefono_v2 = $dd[0] . $dd2[0] . $dd3[0] . $dd3[1];

		$newDate = date("Y-m-d", strtotime($fecha_visita));

		$date = date_create("$newDate");

		date_add($date, date_interval_create_from_date_string("$dias_d DAY"));

		$finalizacion = date_format($date, "Y-m-d");

		$this->QRcode($codigo_a);

		$data = array(


			'id_tipo_v' => $id_tipo_v,

			'id_casa' => $id_casa,

			'nombre_visitante' => $nombre_visitante,

			'fecha_visita' => $newDate,

			'max_persona' => $max_persona,

			'telefono_v' => $telefono_v2,

			'fecha_vencimiento' => $finalizacion,

			'codigo_a' => $codigo_a,

			'id_tipo_vi' => $id_tipo_vi,

			'marca_auto' => $marca_v,

			'color_auto' => $color_v,

			'placas_auto' => $placas_v,

			'foto_auto' => $foto_auto,

			'foto_ine' => $foto_ine,




		);


		if ($this->Visitas_model->save($data)) {


			redirect(base_url() . "Principal/Visitas/add");
		} else {

			redirect(base_url() . "Principal/Visitas/add");
		}
	} //fin 	

	function crearMiniatura($file_name)
	{

		$config['image_library'] = 'gd2';
		$config['source_image'] = 'assets/images/ine/' . $file_name;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['new_image'] = 'assets/images/ine/thumbs/';
		$config['thumb_marker'] = ''; //captura_thumb.png
		$config['width'] = 150;
		$config['height'] = 150;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}

	function crearMiniatura2($file_name2)
	{

		$config['image_library'] = 'gd2';
		$config['source_image'] = 'assets/images/auto/' . $file_name2;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['new_image'] = 'assets/images/auto/thumbs/';
		$config['thumb_marker'] = ''; //captura_thumb.png
		$config['width'] = 150;
		$config['height'] = 150;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}

	public function QRcode($clave)
	{

		//hacemos configuraciones
		$params['data'] = $clave;
		$params['level'] = 'H';
		$params['size'] = 10;

		//decimos el directorio a guardar el codigo qr, en este 
		//caso una carpeta en la raíz llamada qr_code
		$params['savename'] = FCPATH . "/assets/images/QR/qr_$clave.png";

		//generamos el código qr
		$this->ciqrcode->generate($params);
	}


	public function enviarwhats($telefono)
	{

		list($numero, $codigo) = explode("a", $telefono);

		$Mensaje = "Tu código de acceso es: $codigo";

		redirect("https://api.whatsapp.com/send?phone=$numero&text=$Mensaje");
	}

	public function enviarwhats2($telefono)
	{



		$Mensaje = "Tu invitado ha accedido correctamente al coto.";

		redirect("https://api.whatsapp.com/send?phone=$telefono&text=$Mensaje");
	}
}
