<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Twilio\Rest\Client;
class Visitas extends CI_Controller {

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
		
		
				
        $this->load->library('Ciqrcode');
        $this->load->library('WhatsmsApi');
        
		$this->load->model("Visitas_model");
		
	}
	
	
	
	public function index()
	{

        $data = array(

            'info_visita' => $this->Visitas_model->getinfo2()


        );

	
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/list",$data);
		$this->load->view("layouts/footer");

		
	}
	
    public function add(){
        
        $data = array(

            'info_visita' => $this->Visitas_model->getinfo()


        );

       
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/visitas/add",$data);
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

		$dd = explode("(",$telefono_v);
    
		$dd2 = explode(")",$dd[1]);    
			
		$dd3 = explode("-",$dd2[1]);   
		
		$telefono_v2 = $dd[0].$dd2[0].$dd3[0].$dd3[1];

		$newDate = date("Y-m-d", strtotime($fecha_visita));
		
		$date = date_create("$newDate");
		
		date_add($date,date_interval_create_from_date_string("$dias_d DAY"));

		$finalizacion = date_format($date,"Y-m-d");

		$this->QRcode($codigo_a);
   
        $data = array(


            'id_tipo_v' => $id_tipo_v,

			'id_casa' => $id_casa,
			
            'nombre_visitante' => $nombre_visitante,

			'fecha_visita' => $newDate,
			
			'max_persona' => $max_persona,

			'telefono_v' => $telefono_v2,
			
            'fecha_vencimiento' => $finalizacion,
			
			'codigo_a' => $codigo_a

		


        );


        if ($this->Visitas_model->save($data)) {


            redirect(base_url() . "Principal/Visitas");

			
		}
		else{

			redirect(base_url() . "Principal/Visitas");
		}

    } //fin 	

	public function QRcode($clave){

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


	public function enviarwhats($telefono){

		list($numero,$codigo) = explode("a", $telefono);    

		$Mensaje = "Tu código de acceso es: $codigo";
		
		redirect("https://api.whatsapp.com/send?phone=$numero&text=$Mensaje");
	
	
    


}

}