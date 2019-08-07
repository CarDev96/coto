<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finanzas_model extends CI_Model {


  
   
    public function getinfo(){
	 
        $resultados = $this->db->query("select * from tb_meses");
        return $resultados->result();
	}   

    public function getmes($id){
	 
        $resultados = $this->db->query("select * from tb_meses where id_mes = $id");
        return $resultados->row();
	}   	
	
    public function getcapi($id){
	 
        $resultados = $this->db->query("select * from tb_meses where id_mes = $id");
        return $resultados->row();
	}   

    public function getcapiant($id){
	 
        $resultados = $this->db->query("select * from tb_meses where id_mes = $id");
        return $resultados->row();
	}   	
		
	
    public function getsumin($id){
	 
        $resultados = $this->db->query("select sum(ingreso) as a from tb_ingreso where eliminado = 0 and (fecha_ingreso between '2019-0$id-01' and '2019-0$id-31');");
        return $resultados->row();
	}  
	
    public function getinfoing($id){
	 
        $resultados = $this->db->query("select * from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in where eliminado = 0 and (fecha_ingreso between '2019-0$id-01' and '2019-0$id-31');");
        return $resultados->result();
	}  
	
    public function getinfoeg($id){
	 
        $resultados = $this->db->query("select * from tb_egresos where eliminado = 0 and (fecha_egreso between '2019-0$id-01' and '2019-0$id-31');");
        return $resultados->result();
	}  	
	
    public function getsumeg($id){
	 
        $resultados = $this->db->query("select sum(monto_egreso) as a from tb_egresos where eliminado = 0 and (fecha_egreso between '2019-0$id-01' and '2019-0$id-31');");
        return $resultados->row();
	} 
	
	
    public function savecapm($capital_mes,$id){
	 
    return $this->db->query("update tb_meses set monto_capital = $capital_mes where id_mes = $id;");
        
	} 	
  
    public function updatecap($cap_total,$id){
	 
		return $this->db->query("update tb_meses set monto_capital = $cap_total where id_mes = $id;");
			
		} 	
	  

}
