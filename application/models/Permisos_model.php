<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_model extends CI_Model {


    public function login($username,$password){
        $this->db->where("username",$username);
        $this->db->where("pass",$password);
        $resultados = $this->db->get("tb_usuarios");
        return $resultados->row();
	}

    public function getPermisos(){
	 
        $resultados = $this->db->query("select a.*,b.nombre_menu,c.name_rol,c.descripcion_rol from tb_permisos as a inner join tb_menu as b on a.id_menu = b.id_menu inner join tb_roles as c on a.id_rol = c.id_rol;");
        return $resultados->result();
    }    
    

    public function getmenu(){
	 
        $resultados = $this->db->get("tb_menu");
        return $resultados->result();
    }    
    

    public function save($data){

  
        $resultado = $this->db->insert("tb_permisos",$data);

         return $resultado;



     
        

     
	}    

    
}
