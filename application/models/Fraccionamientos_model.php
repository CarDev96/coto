<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fraccionamientos_model extends CI_Model
{


  public function save($data)
  {
    return $this->db->insert("tb_casas", $data);
  }

  public function getInfo()
  {

    $resultados = $this->db->get("tb_casas");
    return $resultados->result();
  }

  public function getInfop($id)
  {

    $resultados = $this->db->query("select * from tb_casas where id_casa = $id;");

    return $resultados->row();
  }

  public function getInfop2($id)
  {

    $resultados = $this->db->query("select b.name from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where a.id_casa = $id;");

    return $resultados->result();
  }

  public function getInfop3($id)
  {

    $resultados = $this->db->query("select a.id_concepto_in,b.name,c.mes_suscrip,c.ano_suscrip from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_suscrip as c on a.id_ingreso = c.id_ingreso where a.id_casa=$id and (a.id_concepto_in = 1 or a.id_concepto_in = 5) and ano_suscrip=2019;");

    return $resultados->result();
  }

  public function getInfop4($id)
  {

    $resultados = $this->db->query("select a.id_concepto_in,b.name,c.mes_suscrip,c.ano_suscrip from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_suscrip as c on a.id_ingreso = c.id_ingreso where a.id_casa=$id and (a.id_concepto_in = 1 or a.id_concepto_in = 5) and ano_suscrip=2020;");

    return $resultados->result();
  }

  public function getInfop5($id)
  {

    $resultados = $this->db->query("select * from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in where id_casa = $id and( a.id_concepto_in <> 1 and a.id_concepto_in <> 5);");

    return $resultados->result();
  }

  public function getsump($id)
  {

    $resultados = $this->db->query("select sum(a.ingreso) as a from tb_ingreso as a inner join tb_suscrip as b on a.id_ingreso  = b.id_ingreso inner join tb_concepto_in as d on a.id_concepto_in = d.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where a.id_casa = $id  and (d.id_concep_in != 1 and a.id_concepto_in != 5 );");

    return $resultados->row();
  }

  //----------------- view ----------


  public function getinfo_up($id){

    $this->db->where("id_casa", $id);
    $resultado = $this->db->get("tb_casas");
    return $resultado->row();
  }

  public function update($id,$data){

		$this->db->where('id_casa', $id);
		$this->db->update('tb_casas', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
    }
    
  }

  public function delete($id){

                
    $this->db->where('id_casa',$id);
    return $this->db->delete('tb_casas');

}    


}
