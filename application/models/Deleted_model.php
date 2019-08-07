<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deleted_model extends CI_Model {


	 	
    public function getinfo(){
	 
        $resultados = $this->db->query("select * from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in where eliminado = 1;");
        return $resultados->result();
	}
	
	 	
    public function getinfog(){
	 
        $resultados = $this->db->query("select * from tb_egresos where eliminado =1;");
        return $resultados->result();
    }	

}
