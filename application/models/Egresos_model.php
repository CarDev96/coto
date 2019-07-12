<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Egresos_model extends CI_Model {


    public function save($data){

  
        $resultado = $this->db->insert("tb_egresos",$data);

         return $resultado;



     
        

     
	}
	 	
    public function getinfo(){
	 
        $resultados = $this->db->get("tb_egresos");
        return $resultados->result();
	}

   
        
    public function getegreso(){
 
        $resultados = $this->db->query("select sum(monto_egreso) as b from tb_egresos;");
         return $resultados->row();
        }  


    
}
