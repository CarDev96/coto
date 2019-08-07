<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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
  			
		$this->load->model("Usuarios_model");
		$this->load->model("Ingresos_model");
		$this->load->model("Personal_model");
	}
	
	
	
	public function index()
	{

		
      
        $data = array(

            'info_user' => $this->Usuarios_model->getinfo(),
            
        );
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list",$data);
		$this->load->view("layouts/footer");

		
    }
    
	public function seguridad()
	{

		
      
        $data = array(

            'info_user2' => $this->Usuarios_model->getinfo2(),
            
        );
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list_s",$data);
		$this->load->view("layouts/footer");

		
	}    

    
	public function edit(){
		

		
      
        $data = array(

            'info_rol' => $this->Usuarios_model->getrol(),
            'permisos' => $this->permisos,
        );
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list_rol",$data);
		$this->load->view("layouts/footer");

		
	}    	
	
    public function add(){
        
      
        $data = array(

            'info_casas' => $this->Ingresos_model->getinfo(),
            'info_rol' => $this->Usuarios_model->getrol(),
            'info_rol2' => $this->Usuarios_model->getrol2(),
        );
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add",$data);
		$this->load->view("layouts/footer");
        
        
    } //fin function add()

    public function add_s(){
        
      
        $data = array(

            'info_guardias' => $this->Personal_model->getinfo(),
            'info_rol' => $this->Usuarios_model->getrol(),
            'info_rol2' => $this->Usuarios_model->getrol2(),
        );
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add_s",$data);
		$this->load->view("layouts/footer");
        
        
    } //fin function add()    

    public function perfil($id){
        
      $data = array(

        'info_perfil' => $this->Usuarios_model->getperf($id),
        'info_usuario' => $this->Usuarios_model->getinfou($id),


      );
     
        
        $this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/perfil",$data);
		$this->load->view("layouts/footer");
        
        
    } //fin function add() 
    
    public function perfil_guardia($id){
        
        $data = array(
  
          'info_perfil' => $this->Usuarios_model->getperf2($id),
          'info_usuario' => $this->Usuarios_model->getinfou2($id),
  
  
        );
       
          
          $this->load->view("layouts/header");
          $this->load->view("layouts/aside");
          $this->load->view("admin/usuarios/perfil_g",$data);
          $this->load->view("layouts/footer");
          
          
      } //fin function add()     
    
    public function nuevo()
    {


        $id_casa = $this->input->post("id_casa"); //id_casa

        $username = $this->input->post("username"); //id_concepto_in

        $pass = $this->input->post("pass"); //ingreso

        $rol = $this->input->post("rol");

        $estado = "1";

 
        $data = array(

            'id_casa' => $id_casa,

            'username' => $username,

            'pass' => sha1($pass),

            'id_rol' => $rol,

            'estado' => $estado,


        );


        if ($this->Usuarios_model->save($data)) {



            redirect(base_url() . "Administrador/Usuarios/add");
        } else {

            redirect(base_url() . "Administrador/Usuarios/add");
        }
    } //fin 

    public function nuevo_s()
    {


        $id_guardia = $this->input->post("id_guardia"); //id_casa

        $username = $this->input->post("username"); //id_casa

        

        $pass = $this->input->post("pass"); //ingreso

        $rol = 5;

        $estado = "1";

 
        $data = array(

            'id_guardia' => $id_guardia,

            'username' => $username,

            'pass' => sha1($pass),

            'id_rol' => $rol,

            'estado' => $estado,


        );


        if ($this->Usuarios_model->save($data)) {



            redirect(base_url() . "Administrador/Usuarios/add_s");
        } else {

            redirect(base_url() . "Administrador/Usuarios/add_s");
        }
    } //fin     
    
    
    public function actualizar_p()
    {


        $id_usuario = $this->input->post("id_usuario"); //id_casa

        $id_casa = $this->input->post("id_casa"); //id_casa

        $username = $this->input->post("username"); //id_concepto_in

        $pass = $this->input->post("pass"); //ingreso

        if (empty($_FILES['foto_perfil']['name'])){
      
            $datos_recuperados = $this->Usuarios_model->CapturarArchivo($id_usuario);
            $imagen = $datos_recuperados->foto_perfil;//recupero el nombre de la imagen
            
            
        }//Compruebo si el array $_files no tiene ningun valor en  su elemento name       

        else{
        
            $config = [
                
            "upload_path" => "./assets/images/perfil",
            "allowed_types" => "gif|jpg|png",
            "max_size" => "2048"
                
                
            ];
            
            $this->load->library("upload",$config);
            
            if ($this->upload->do_upload("foto_perfil")) {
                
                $registro = $this->Usuarios_model->CapturarArchivo($id_usuario);
                
                
                
                unlink("./assets/images/perfil/".$registro->foto_perfil);
                unlink("./assets/images/perfil/thumbs/".$registro->foto_perfil);
                
                $data3 = array("upload_data" => $this->upload->data());
                $this->crearMiniatura($data3['upload_data']['file_name']);
                
                $imagen = $data3['upload_data']['file_name'];
                
            }else{
                
                echo $this->upload->display_errors();
                
            } 
                
            }          
 
        $data = array(

            

            'username' => $username,

            'pass' => sha1($pass),

            'foto_perfil' => $imagen            

            


        );


        if ($this->Usuarios_model->update_p($data,$id_usuario)) {



            redirect(base_url() . "Administrador/Usuarios/perfil/$id_casa");
        } else {

            redirect(base_url() . "Administrador/Usuarios/perfil/$id_casa");
        }
	} //fin  
	

    public function view_rol($id){
        
              
        if(! $this->permisos->insercion){ 
            
            redirect(base_url()); return; 
        
        }
        
        $data = array(
            

            
            'info_a' => $this->Usuarios_model->getrol22($id),
            
            
        
        
        );
            
            
        
		$this->load->view("admin/usuarios/view_rol",$data);
        
        
        
    }//fin function view   
    	



    public function actualizar_p2()
    {


        $id_usuario = $this->input->post("id_usuario"); //id_casa

        $id_casa = $this->input->post("id_casa"); //id_casa

        $username = $this->input->post("username"); //id_concepto_in

        $pass2 = $this->input->post("pass2"); //ingreso

        if (empty($_FILES['foto_perfil']['name'])){
      
            $datos_recuperados = $this->Usuarios_model->CapturarArchivo($id_usuario);
            $imagen = $datos_recuperados->foto_perfil;//recupero el nombre de la imagen
            
            
        }//Compruebo si el array $_files no tiene ningun valor en  su elemento name       

        else{
        
            $config = [
                
            "upload_path" => "./assets/images/perfil",
            "allowed_types" => "gif|jpg|png",
            "max_size" => "2048"
                
                
            ];
            
            $this->load->library("upload",$config);
            
            if ($this->upload->do_upload("foto_perfil")) {
                
                $registro = $this->Usuarios_model->CapturarArchivo($id_usuario);
                
                
                
                unlink("./assets/images/perfil/".$registro->foto_perfil);
                unlink("./assets/images/perfil/thumbs/".$registro->foto_perfil);
                
                $data3 = array("upload_data" => $this->upload->data());
                $this->crearMiniatura($data3['upload_data']['file_name']);
                
                $imagen = $data3['upload_data']['file_name'];
                
            }else{
                
                echo $this->upload->display_errors();
                
            } 
                
            }          
 
        $data = array(

            

            'username' => $username,

            'pass' => $pass2,

            'foto_perfil' => $imagen            

            


        );


        if ($this->Usuarios_model->update_p($data,$id_usuario)) {



            redirect(base_url() . "Administrador/Usuarios/perfil/$id_casa");
        } else {

            redirect(base_url() . "Administrador/Usuarios/perfil/$id_casa");
        }
    } //fin  
        




    public function actualizar_p3()
    {


        $id_usuario = $this->input->post("id_usuario"); //id_casa

        $id_guardia = $this->input->post("id_guardia"); //id_casa

        $username = $this->input->post("username"); //id_concepto_in

        $pass = $this->input->post("pass"); //ingreso

        if (empty($_FILES['foto_perfil']['name'])){
      
            $datos_recuperados = $this->Usuarios_model->CapturarArchivo($id_usuario);
            $imagen = $datos_recuperados->foto_perfil;//recupero el nombre de la imagen
            
            
        }//Compruebo si el array $_files no tiene ningun valor en  su elemento name       

        else{
        
            $config = [
                
            "upload_path" => "./assets/images/perfil",
            "allowed_types" => "gif|jpg|png",
            "max_size" => "2048"
                
                
            ];
            
            $this->load->library("upload",$config);
            
            if ($this->upload->do_upload("foto_perfil")) {
                
                $registro = $this->Usuarios_model->CapturarArchivo($id_usuario);
                
                
                
                unlink("./assets/images/perfil/".$registro->foto_perfil);
                unlink("./assets/images/perfil/thumbs/".$registro->foto_perfil);
                
                $data3 = array("upload_data" => $this->upload->data());
                $this->crearMiniatura($data3['upload_data']['file_name']);
                
                $imagen = $data3['upload_data']['file_name'];
                
            }else{
                
                echo $this->upload->display_errors();
                
            } 
                
            }          
 
        $data = array(

            

            'username' => $username,

            'pass' => sha1($pass),

            'foto_perfil' => $imagen            

            


        );


        if ($this->Usuarios_model->update_p($data,$id_usuario)) {



            redirect(base_url() . "Administrador/Usuarios/perfil_guardia/$id_guardia");
        } else {

            redirect(base_url() . "Administrador/Usuarios/perfil_guardia/$id_guardia");
        }
    } //fin  



    public function actualizar_p4()
    {


        $id_usuario = $this->input->post("id_usuario"); //id_casa

        $id_guardia = $this->input->post("id_guardia"); //id_casa

        $username = $this->input->post("username"); //id_concepto_in

        $pass2 = $this->input->post("pass2"); //ingreso

        if (empty($_FILES['foto_perfil']['name'])){
      
            $datos_recuperados = $this->Usuarios_model->CapturarArchivo($id_usuario);
            $imagen = $datos_recuperados->foto_perfil;//recupero el nombre de la imagen
            
            
        }//Compruebo si el array $_files no tiene ningun valor en  su elemento name       

        else{
        
            $config = [
                
            "upload_path" => "./assets/images/perfil",
            "allowed_types" => "gif|jpg|png",
            "max_size" => "2048"
                
                
            ];
            
            $this->load->library("upload",$config);
            
            if ($this->upload->do_upload("foto_perfil")) {
                
                $registro = $this->Usuarios_model->CapturarArchivo($id_usuario);
                
                
                
                unlink("./assets/images/perfil/".$registro->foto_perfil);
                unlink("./assets/images/perfil/thumbs/".$registro->foto_perfil);
                
                $data3 = array("upload_data" => $this->upload->data());
                $this->crearMiniatura($data3['upload_data']['file_name']);
                
                $imagen = $data3['upload_data']['file_name'];
                
            }else{
                
                echo $this->upload->display_errors();
                
            } 
                
            }          
 
        $data = array(

            

            'username' => $username,

            'pass' => $pass2,

            'foto_perfil' => $imagen            

            


        );


        if ($this->Usuarios_model->update_p($data,$id_usuario)) {



            redirect(base_url() . "Administrador/Usuarios/perfil_guardia/$id_guardia");
        } else {

            redirect(base_url() . "Administrador/Usuarios/perfil_guardia/$id_guardia");
        }
    } //fin  
         
    
    function crearMiniatura($file_name){

                
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/images/perfil/'.$file_name;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='assets/images/perfil/thumbs/';
        $config['thumb_marker']='';//captura_thumb.png
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();
	}    
	
	public function update(){

               
		if(! $this->permisos->insercion){ 
				
			redirect(base_url()); return; 
		
		}
	
		$id_rol = $this->input->post("id_rol");
	
		$nom_rol = $this->input->post("nom_rol");
		
		$data = array(
	
	
			"name_rol" => $nom_rol
	
	
	
		);
	
		if($this->Usuarios_model->update($data,$id_rol)== true)
					  
					  
		redirect(base_url()."Administrador/Usuarios/edit");
	  
	  else
				
		  redirect(base_url()."Administrador/Usuarios/edit");
		  
		  
		 
	
	   }	
	
}
