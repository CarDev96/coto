<?php

class Backend_lib{

    private $CI;

    public function __construct(){

        $this->CI = & get_instance();
        
    }

    public function control(){


        if(!$this->CI->session->userdata("login")){

            redirect(base_url());

        }
        $url = $this->CI->uri->segment(1);

        if($this->CI->uri->segment(2)){

            $url = $this->CI->uri->segment(1)."/".$this->CI->uri->segment(2);

        }

        $info_menu = $this->CI->Backend_model->getid($url);

        $permisos = $this->CI->Backend_model->getpermisos($info_menu->id_menu,$this->CI->session->userdata("rol"));

        if( $permisos->lectura== 0){

            redirect(base_url()."Dashboard");


        }else{

            return $permisos;

        }

    }

}

?>