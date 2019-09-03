<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitas_model extends CI_Model {



   
    public function getinfo(){
	 
        $resultados = $this->db->get("tb_cat_vi");
        return $resultados->result();
    } 
    
    public function asistencia($id){
     
        $id_guardia = $this->session->userdata("id_guardia");            
         $this->db->query("update tb_visitas set asistencia = 'Si' where id_visita=$id");
        return $this->db->query("update tb_visitas set id_guardia = $id_guardia where id_visita=$id");
        
    }     

    public function getinfo5(){
	 
        $resultados = $this->db->get("tb_tipo_visita");
        return $resultados->result();
    }    
    
    public function getinfo6(){
	 
        $resultados = $this->db->query("select * from tb_visitas as a inner join tb_cat_vi as b on a.id_tipo_v = b.id_tipo_v inner join tb_tipo_visita as c on a.id_tipo_vi = c.id_tipo_vi inner join tb_casas as d on a.id_casa = d.id_casa;");
        return $resultados->result();
	}    
	
    public function getinfo7(){
	 
        $resultados = $this->db->query("select * from tb_visitas as a inner join tb_cat_vi as b on a.id_tipo_v = b.id_tipo_v inner join tb_tipo_visita as c on a.id_tipo_vi = c.id_tipo_vi where a.id_casa = 0;");
        return $resultados->result();
    }    	

    public function getmarca(){
	 
        $resultados = $this->db->query("select * from tb_vehiculo");
        return $resultados->result();
    }        

    public function getinfo2($id){
	 
        $resultados = $this->db->query("select * from tb_visitas as a inner join tb_cat_vi as b on a.id_tipo_v = b.id_tipo_v inner join tb_tipo_visita as c on a.id_tipo_vi = c.id_tipo_vi where a.id_casa= $id;");
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
