<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Model {



    public function getid($link){

        $this->db->like("link",$link);

        $resultado = $this->db->get("tb_menu");

        return $resultado->row();


    }    


    public function getpermisos($menu,$rol){

        $this->db->where("id_menu",$menu);
        $this->db->where("id_rol",$rol);
        $resultado = $this->db->get("tb_permisos");

        return $resultado->row();



    }        
    
    
}
