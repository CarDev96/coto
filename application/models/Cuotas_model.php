<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuotas_model extends CI_Model {



   
    public function getrol(){
	 
        $resultados = $this->db->get("tb_roles");
        return $resultados->result();
    }    
    

    public function getrol2(){
	 
        $resultados = $this->db->query("select * from tb_roles where id_rol <> 1 and id_rol <>3 and id_rol <> 2;");
        return $resultados->result();
    }

    public function getinfo(){
	 
        $resultados = $this->db->query("select * from tb_concepto_in where id_concep_in <> 3 and id_concep_in <>4 and id_concep_in <> 7 and id_concep_in <> 8;");
        return $resultados->result();
    }    


    public function get_concep($id){
	 
        $resultados = $this->db->query("select * from tb_concepto_in where id_concep_in = $id");
        return $resultados->row();
    }    

    

    public function save($data){

  
        $resultado = $this->db->insert("tb_avisos",$data);

         return $resultado;



     
        

     
    }    
    
    public function update($data,$id_concep_in){

  

        $this->db->where("id_concep_in",$id_concep_in);
        return $this->db->update("tb_concepto_in",$data);

     
    }    
    
    
	
    public function delete($id){

                
        $this->db->where('id_aviso',$id);
        return $this->db->delete('tb_avisos');
    
    
}      
    
}
