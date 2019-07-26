<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitas_model extends CI_Model {



   
    public function getinfo(){
	 
        $resultados = $this->db->get("tb_cat_vi");
        return $resultados->result();
    }   

    public function getinfo2(){
	 
        $resultados = $this->db->query("select * from tb_visitas as a inner join tb_cat_vi as b on a.id_tipo_v = b.id_tipo_v;");
        return $resultados->result();
    }      
    
    public function getqr($codigo){
        $this->db->where("codigo_a",$codigo);
        $resultados = $this->db->get("tb_visitas");
        return $resultados->row();
    }       
    
 

    public function save($data){

  
        $resultado = $this->db->insert("tb_visitas",$data);

         return $resultado;



     
        

     
    }    
    
}
