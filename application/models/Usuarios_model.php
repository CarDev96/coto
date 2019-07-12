<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


    public function login($username,$password){
        $this->db->where("username",$username);
        $this->db->where("pass",$password);
        $resultados = $this->db->get("tb_usuarios");
        return $resultados->row();
	}

   
    public function getrol(){
	 
        $resultados = $this->db->get("tb_roles");
        return $resultados->result();
    }    
    
    public function getinfo(){
	 
        $resultados = $this->db->query("select a.*,b.responsable,c.name_rol,c.descripcion_rol from tb_usuarios as a inner join tb_casas as b on a.id_casa = b.id_casa inner join tb_roles as c on a.id_rol = c.id_rol;");
        return $resultados->result();
    }    
    


    public function save($data){

  
        $resultado = $this->db->insert("tb_usuarios",$data);

         return $resultado;



     
        

     
	}    

    
}
