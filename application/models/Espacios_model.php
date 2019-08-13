<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Espacios_model extends CI_Model
{






	public function save($data, $new_dias)
	{


		$resultado = $this->db->insert("tb_espacios", $data);

		$last_id = $this->db->insert_id();

		$id_dias = $new_dias;

		$array_dias = explode(",", $id_dias);

		for ($i = 0; $i < count($array_dias); $i++) {



			$resultado2 = $this->db->query(" insert into tb_detalle_dia(id_dia,id_es) values($array_dias[$i],$last_id)");
		}

		return array($resultado,$resultado2);

	}

	public function update($data,$id_es,$new_dias)
	{
					$this->db->where("id_es",$id_es);
		$resultado = $this->db->update("tb_espacios", $data);

		$id_dias = $new_dias;

		$array_dias = explode(",", $id_dias);

		$resultado2 = $this->db->query("Delete from tb_detalle_dia where id_es = $id_es");

		for ($i = 0; $i < count($array_dias); $i++) {



			$resultado3 = $this->db->query(" insert into tb_detalle_dia(id_dia,id_es) values($array_dias[$i],$id_es)");
		}

		return array($resultado2,$resultado3);
	}

	public function getdia()
	{

		$resultado = $this->db->get("tb_dias");

		return $resultado->result();
	}

	public function getesp()
	{

		$resultado = $this->db->get("tb_espacios");

		return $resultado->result();
	}	

	public function getesp2($id)
	{
					$this->db->where("id_es",$id);
		$resultado = $this->db->get("tb_espacios");

		return $resultado->row();
	}	

	public function getres($id)
	{
					
		$resultado = $this->db->query("select * from tb_reservas as a inner join tb_espacios as b on a.id_es = b.id_es where a.id_casa = $id;");

		return $resultado->result();
	}	
	
	public function getre2($id)
	{
					
		$resultado = $this->db->query("select * from tb_reservas where id_reserva = $id;");

		return $resultado->row();
	}		
	
	public function getreservas($id)
	{
					
		$resultado = $this->db->query("select * from tb_reservas as a inner join tb_espacios as b on a.id_es = b.id_es inner join tb_casas as c on a.id_casa = c.id_casa where a.id_es = $id;");

		return $resultado->result();
	}	
	
	public function aceptar($data,$id){

		$this->db->where("id_reserva",$id);
		return $this->db->update("tb_reservas",$data);


	}

	public function rechazar($data,$id){

		$this->db->where("id_reserva",$id);
		return $this->db->update("tb_reservas",$data);


	}	
		

	public function get_dias2($id)
	{
					
		$resultado = $this->db->query("select * from tb_detalle_dia as a inner join tb_dias as b on a.id_dia = b.id_dia inner join tb_espacios as c on a.id_es = c.id_es where c.id_es=$id;");

		return $resultado->result();
	}	
	
	public function getdisp($id,$dia)
	{
					
		$resultado = $this->db->query("select a.id_dia,name_dia from tb_detalle_dia as a inner join tb_dias as b on a.id_dia = b.id_dia inner join tb_espacios as c on a.id_es = c.id_es where c.id_es=$id and a.id_dia=$dia;");

		return $resultado->row();
	}		

	public function getfr($date){


		$resultado = $this->db->query("select fecha_reserva from tb_reservas where fecha_reserva = '$date';");

		return $resultado->row();


	}


	public function delete($id)
	{


		$this->db->where('id_aviso', $id);
		return $this->db->delete('tb_avisos');
	}

	public function res($data)
	{


		
		return $this->db->insert('tb_reservas',$data);
	}	

//-------------------------------------------- Foto ----------------------

public function CapturarArchivo($id){
            
            
    $this->db->select("foto_es");
    $this->db->where('id_es',$id);
    $resultado = $this->db->get("tb_espacios");
    return $resultado->row();
    

}	
}
