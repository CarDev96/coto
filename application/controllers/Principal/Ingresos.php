<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ingresos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->permisos = $this->backend_lib->control();        

        if (!$this->session->userdata("login")) {

            redirect(base_url());
        }
        $this->load->model("Ingresos_model");
        $this->load->model("Fraccionamientos_model");        
    }


    public function index()
    {

        $data = array(

            'info_total' => $this->Ingresos_model->getinfototal(),
            'info_sum_total' => $this->Ingresos_model->getsumtotal(),
            'permisos' => $this->permisos,             


        );


        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/list", $data);
        $this->load->view("layouts/footer");
    } //fin function index()

    public function abonos()
    {

        $data = array(

            'info_abonos' => $this->Ingresos_model->getabono(),

            'info_liq' => $this->Ingresos_model->getabono2(),
            
            'permisos' => $this->permisos,             


        );


        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/list_ab", $data);
        $this->load->view("layouts/footer");
    } //fin function index()    

    public function cuotas()
    {

        $data = array(

            'info_cuota' => $this->Ingresos_model->getinfocuota(),
            'info_sum' => $this->Ingresos_model->getsum(),


        );


        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/list_cuota", $data);
        $this->load->view("layouts/footer");
    } //fin function tags()    

    public function tags()
    {

        $data = array(

            'info_tag' => $this->Ingresos_model->getinfotag(),
            'info_sum_tag' => $this->Ingresos_model->getsum_tag(),


        );


        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/list_tags", $data);
        $this->load->view("layouts/footer");
    } //fin function tags()

    public function varios()
    {

        $data = array(

            'info_varios' => $this->Ingresos_model->getinfovarios(),
            'info_sum_varios' => $this->Ingresos_model->getsum_varios(),


        );


        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/list_varios", $data);
        $this->load->view("layouts/footer");
    } //fin function tags() 
    
    
    public function recibo($id)
    {


            $data = array(

                'info_recibo' => $this->Ingresos_model->getrecibo($id),


            );
  

        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/recibo",$data);
        $this->load->view("layouts/footer");
    } //fin function tags()     


    public function add()
    {

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        $data = array(

            'info_casas' => $this->Ingresos_model->getinfo(),
            'info_concepto' => $this->Ingresos_model->getinfoConcep()


        );



        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/add", $data);
        $this->load->view("layouts/footer");
    } //fin function add()

    public function nuevo()
    {

        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

        $nombre_in = $this->input->post("name_pago");

        $id_casa = $this->input->post("id_casa"); //id_casa

        $id_concepto_in = $this->input->post("txtconcepto"); //id_concepto_in

        $ingreso = $this->input->post("tch2"); //ingreso

        $fecha_ingreso = $this->input->post("fecha_ingreso"); //fecha_ingreso

        $fecha_inicio_pago = $this->input->post("fecha_inicio_pago"); //fecha_ingreso        

        $descripcion_ingreso = $this->input->post("descripcion_in");   //descripcion ingreso    

        $desc_ap = $this->input->post("desc_ap");   //descripcion ingreso 
        
        $eliminado = 0;

        if(is_null($desc_ap)){

            $desc_ap2 = 0;



        }else{

            $desc_ap2 = $desc_ap;



        }

        $desc_adicional = $this->input->post("desc_adicional");   //descripcion ingreso    

        if(is_null($desc_adicional)){

            $desc_adicional2 = 0;



        }else{

            $desc_adicional2 = $desc_adicional;



		}
		
		if($id_concepto_in == 3){

			$monto_final = $ingreso;

		}else{

        if($desc_ap2 >$ingreso){

            $monto_final = 0;

        }else{

            $monto_sumado = $desc_adicional2 + $desc_ap2;

            $monto_final = $ingreso - $monto_sumado;

		}
		
	}
        $fechaf = $fecha_ingreso;



        $newDate = date("Y-m-d", strtotime($fechaf));

        $newDate2 = date("Y-m-d", strtotime($fecha_inicio_pago));

        
        
        $anio = date("Y", strtotime($fecha_inicio_pago));

        $mes = date("m", strtotime($fecha_inicio_pago));   
        
      
        
        
        if($this->Ingresos_model->getfr($anio,$mes,$id_casa)){
            
            $this->session->set_flashdata( 'error_msg', 'No se puede realizar un pago al mismo mes' );            
            redirect(base_url()."Principal/Ingresos/add");

        }

        if($this->Ingresos_model->getanio($anio,$id_casa)){
            
            $this->session->set_flashdata( 'error_msg', 'No se puede realizar un pago mensual a una suscripción anual' );            
            redirect(base_url()."Principal/Ingresos/add");

        }        

        $id_casa2 = $id_casa;

        $ingreso_int = intVal($monto_final);

        $data = array(

            'id_casa' => $id_casa,

            'id_concepto_in' => $id_concepto_in,

            'ingreso' => $monto_final,

            'fecha_ingreso' => $newDate,

            'fecha_inicio'  => $newDate2,

            'descripcion_ingreso' => $descripcion_ingreso,

            'eliminado' => $eliminado,



        );


        if ($this->Ingresos_model->save($data, $id_casa2, $ingreso_int, $newDate2,$nombre_in)) {


            $recibo = $this->Ingresos_model->getid();
            
            $data = array(

                'info_recibo' => $this->Ingresos_model->getrecibo($recibo->id_ingreso),


            );
  

        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/recibo",$data);
        $this->load->view("layouts/footer");

        } else {

            $recibo = $this->Ingresos_model->getid();
            
            $data = array(

                'info_recibo' => $this->Ingresos_model->getrecibo($recibo->id_ingreso),


            );
  

        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ingresos/recibo",$data);
        $this->load->view("layouts/footer");
        }
    } //fin 	






    public function view_a($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            'info_monto' => $this->Fraccionamientos_model->get_monto(),
            'info_a' => $this->Fraccionamientos_model->get_a($id),
            
        
        
        );
            
            
        
		$this->load->view("admin/ingresos/view_abono",$data);
        
        
        
    }//fin function view  
    


   
    
    
    public function view_a2($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            'info_monto' => $this->Fraccionamientos_model->get_monto(),
            'info_a' => $this->Fraccionamientos_model->get_a($id),
            
        
        
        );
            
            
        
		$this->load->view("admin/ingresos/view_abono2",$data);
        
        
        
    }//fin function view   

    public function eliminar($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            
            'info_a' => $this->Ingresos_model->geti($id),
            'info_motivo' => $this->Ingresos_model->getmoti($id),
            
        
        
        );
            
            
        
		$this->load->view("admin/ingresos/eliminar",$data);
        
        
        
    }//fin function view       
    
	public function abona(){

               
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

        $id_casa = $this->input->post("id_casa");

        $id_abono = $this->input->post("id_abono");
        
		$aboni = $this->input->post("aboni");        

        $monto_mes = $this->input->post("monto_mes");
         
        $fecha_correspondiente = $this->input->post("fecha_correspondiente");
     
        $ingreso_int = intVal($monto_mes);
               

        $sum = $ingreso_int + $aboni;

        
            

            
            $info_absum = $this->Ingresos_model->get_absum($id_abono);
            
            
        
        
           

        $abon_ant = intVal($info_absum->monto_abono);  
        
        $abono_ant_fin = $abon_ant + $aboni;

        if($abono_ant_fin > 200){

            $this->session->set_flashdata( 'error_msg', 'No se puede exceder el monto abonado al monto de la cuota mensual' );            
            redirect(base_url()."Principal/Ingresos/abonos");

        }

        $data = array(


            "monto_abono" => $sum  

        );
      
            if($this->Ingresos_model->abon($data,$id_casa,$id_abono,$aboni,$sum,$fecha_correspondiente) == true)
                  
                  
                  redirect(base_url()."Principal/Ingresos/abonos");
                
                else
                          
                    redirect(base_url()."Principal/Ingresos/abonos");
                    
                
          
                
    }//fin    
    
    


	public function delete(){

               
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }

        $id_ingreso = $this->input->post("id_ingreso");

        $usuario_elimina = $this->input->post("usuario_elimina");
        
		$motivo_elim = $this->input->post("motivo_elim");        

        $monto_mes = $this->input->post("monto_mes");

        $eliminado = 1;
         
        $fecha_eliminado = date("Y/m/d H:i:s");
     
 
        $data = array(


            "eliminado" => $eliminado,
            "motivo" => $motivo_elim,
            "fecha_eliminado" => $fecha_eliminado,
            "usuario_elimina" => $usuario_elimina

        );
      
            if($this->Ingresos_model->delete($data,$id_ingreso) == true)
                  
                  
                  redirect(base_url()."Principal/Ingresos");
                
                else
                          
                    redirect(base_url()."Principal/Ingresos");
                    
                
          
                
    }//fin        

}
