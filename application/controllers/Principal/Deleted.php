<?php defined('BASEPATH') or exit('No direct script access allowed');

class Deleted extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->permisos = $this->backend_lib->control();        

        if (!$this->session->userdata("login")) {

            redirect(base_url());
        }
        $this->load->model("Deleted_model");
        
    }


    public function index()
    {

        $data = array(

            'info_total' => $this->Deleted_model->getinfo(),
            
            'permisos' => $this->permisos,             


        );


        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/eliminados/list_in", $data);
        $this->load->view("layouts/footer");
    } //fin function index()

    public function gastos()
	{
     
        $data = array(
            
            'info_gastos' => $this->Deleted_model->getinfog(),
			
			'permisos' => $this->permisos,     
             


            ); 


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/eliminados/list_gas",$data);
		$this->load->view("layouts/footer");

    }//fin function index()

}
