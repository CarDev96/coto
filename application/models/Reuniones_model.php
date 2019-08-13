<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reuniones_model extends CI_Model {



   
    public function getrol(){
	 
        $resultados = $this->db->get("tb_roles");
        return $resultados->result();
    }    
    

    public function getreu(){
	 
        $resultados = $this->db->query("select * from tb_avisos where aviso_reunion = 'Si';");
        return $resultados->result();
    }

    public function getinfo(){
	 
        $resultados = $this->db->query("select * from tb_avisos;");
        return $resultados->result();
	}    
	
    public function countasis($id){
	 
        $resultados = $this->db->query("select count(*) as a from tb_casas as a inner join tb_asistencia as b on a.id_casa = b.id_casa inner join tb_avisos as c on b.id_aviso = c.id_aviso where b.id_aviso = $id;");
        return $resultados->row();
    }    	
	

    public function getcasa(){
	 
        $resultados = $this->db->query("select * from tb_casas as a inner join tb_asistencia as b on a.id_casa = b.id_casa where b.fecha_asistencia <> CURDATE();");
        return $resultados->result();
	}    
	
    public function getasistentes($id){
	 
        $resultados = $this->db->query("select * from tb_casas as a inner join tb_asistencia as b on a.id_casa = b.id_casa inner join tb_avisos as c on b.id_aviso = c.id_aviso where b.id_aviso = $id;");
        return $resultados->result();
	}    
	
    public function getevento($id){
	 
        $resultados = $this->db->query("select tit_aviso from tb_avisos where id_aviso = $id;");
        return $resultados->row();
    }    	
    	

    public function getaviso(){
	 
        $resultados = $this->db->query("select * from tb_avisos;");
        return $resultados->row();
	}  
		
    

    public function save($data){

  
        $resultado = $this->db->insert("tb_asistencia",$data);

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
