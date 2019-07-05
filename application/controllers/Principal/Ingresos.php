<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresos extends CI_Controller {
	
       public function __construct(){
		parent::__construct();

		$this->load->model("Ingresos_model");
  	
     
	} 


	public function index()
	{
     
        $data = array(
            
            'info_cuota' => $this->Ingresos_model->getinfocuota(),
            'info_sum' => $this->Ingresos_model->getsum(),            


            ); 


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ingresos/list_cuota",$data);
		$this->load->view("layouts/footer");

	}//fin function index()
   
    

    public function add(){
        
        $data = array(
            
            'info_casas' => $this->Ingresos_model->getinfo(),
            'info_concepto' => $this->Ingresos_model->getinfoConcep()


            ); 
       

        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ingresos/add",$data);
		$this->load->view("layouts/footer");
        
        
	} //fin function add()
	
	public function nuevo(){

        
        $id_casa = $this->input->post("id_casa"); //id_casa
         
        $id_concepto_in = $this->input->post("txtconcepto"); //id_concepto_in
     
		$ingreso = $this->input->post("tch2"); //ingreso
		
        $fecha_ingreso = $this->input->post("fecha_ingreso"); //fecha_ingreso

        $fecha_inicio_pago = $this->input->post("fecha_inicio_pago"); //fecha_ingreso        
        
		$descripcion_ingreso = $this->input->post("descripcion_in");   //descripcion ingreso    

        $fechaf = $fecha_ingreso;

               
        
        $newDate = date("Y-m-d", strtotime($fechaf));

        $newDate2 = date("Y-m-d", strtotime($fecha_inicio_pago));        
		
        $id_casa2 = $id_casa;

        $ingreso_int = intVal($ingreso);
           
       $data = array(
            
            'id_casa' => $id_casa, 
        
            'id_concepto_in' => $id_concepto_in, 
           
            'ingreso' => $ingreso, 
           
            'fecha_ingreso' => $newDate, 
            
            'fecha_inicio'  => $newDate2,
			
			'descripcion_ingreso' => $descripcion_ingreso
 
           
           
            
           
                     
                     
                     ); 
        
      
        if( $this ->Ingresos_model->save($data,$id_casa2,$ingreso_int,$newDate2)){
            
             
                  
            redirect(base_url()."Principal/Ingresos/add");
        }
        else{
                  
            redirect(base_url()."Principal/Fraccionamientos/add");
            
        }
                
    }//fin 	

}