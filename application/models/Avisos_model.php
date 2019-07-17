<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avisos_model extends CI_Model {



   
    public function getrol(){
	 
        $resultados = $this->db->get("tb_roles");
        return $resultados->result();
    }    
    

    public function getrol2(){
	 
        $resultados = $this->db->query("select * from tb_roles where id_rol <> 1 and id_rol <>3 and id_rol <> 2;");
        return $resultados->result();
    }

    public function getinfo(){
	 
        $resultados = $this->db->query("select * from tb_avisos;");
        return $resultados->result();
    }    
    
    public function getaviso(){
	 
        $resultados = $this->db->query("select * from tb_avisos;");
        return $resultados->row();
    }    
    

    public function save($data){

  
        $resultado = $this->db->insert("tb_avisos",$data);

         return $resultado;



     
        

     
    }    
    
    public function update($data,$id_aviso){

  

        
        return $this->db->query("update tb_avisos set mensaje_anuncio = '$data' where id_aviso = $id_aviso;");

     
    }    
    
    
	
    public function delete($id){

                
        $this->db->where('id_aviso',$id);
        return $this->db->delete('tb_avisos');
    
    
}      
    
}
