<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fraccionamientos_model extends CI_Model {


    public function save($data){
		return $this->db->insert("tb_casas",$data);
	}
	 	
    public function getInfo(){
	 
     $resultados = $this->db->get("tb_casas");
     return $resultados->result();
	}
     
  public function getInfop($id){
	 
    $resultados = $this->db->query("select * from tb_casas where id_casa = $id;");
    
    return $resultados->row();
    
 }
  
 public function getInfop2($id){
	 
  $resultados = $this->db->query("select b.name from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where a.id_casa = $id;");
  
  return $resultados->result();
  
} 

public function getInfop3($id){
	 
  $resultados = $this->db->query("select d.*,c.id_casa,c.responsable, a.ingreso, a.fecha_ingreso,a.fecha_inicio,b.name, a.descripcion_ingreso from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa inner join tb_suscrip as d on d.id_casa = c.id_casa where a.id_casa = $id and (a.id_concepto_in = 1 or a.id_concepto_in = 5) group by id_suscrip order by mes_suscrip; ");
  
  return $resultados->result();


}
	
}
