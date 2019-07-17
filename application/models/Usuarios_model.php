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
    
    public function getperf($id){
        $this->db->where("id_casa",$id);
        $resultados = $this->db->get("tb_casas");
        return $resultados->row();
    }        

    public function getinfou($id){
        $this->db->where("id_casa",$id);
        $resultados = $this->db->get("tb_usuarios");
        return $resultados->row();
    } 

    public function getrol2(){
	 
        $resultados = $this->db->query("select * from tb_roles where id_rol <> 1 and id_rol <>3 and id_rol <> 2;");
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

    public function update_p($data,$id){

  
		$this->db->where('id_usuario', $id);
		$this->db->update('tb_usuarios', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
    }

     
    }     
    
//-------------------------------------------- Foto ----------------------

public function CapturarArchivo($id){
            
            
    $this->db->select("foto_perfil");
    $this->db->where('id_usuario',$id);
    $resultado = $this->db->get("tb_usuarios");
    return $resultado->row();
    

}


    
}
