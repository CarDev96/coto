<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Egresos_model extends CI_Model {


    public function save($data){

  
        $resultado = $this->db->insert("tb_egresos",$data);

         return $resultado;



     
        

     
	}
	 	
    public function getinfo(){
	 
        $resultados = $this->db->query("select * from tb_egresos where eliminado =0;");
        return $resultados->result();
	}

   
        
    public function getegreso(){
 
        $resultados = $this->db->query("select sum(monto_egreso) as b from tb_egresos where eliminado <>1;");
         return $resultados->row();
        }  

		public function geti($id){
	 
			$resultados = $this->db->query("select * from tb_egresos where id_egreso = $id");
			 return $resultados->row();
			}       
			
			public function getmoti($id){

				$resultados = $this->db->query("select * from tb_motivo_elim;");
				 return $resultados->result();
				}                           
	

				public function delete($data,$id_egreso){
        

					$this->db->where("id_egreso",$id_egreso);
					return $this->db->update("tb_egresos",$data);
					  
				
				  
					
				  
				  
				  }             
			 
	
		
}
