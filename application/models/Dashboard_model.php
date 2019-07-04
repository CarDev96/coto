<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	



	
	public function get_paciente(){
	
		$resultados = $this->db->query("SELECT COUNT(*) as i FROM tb_paciente;");
		return $resultados->row();
	}
	
	public function get_cons(){
	
		$resultados = $this->db->query("SELECT COUNT(*) as i FROM tb_consulta;");
		return $resultados->row();
	}	
	
	
	public function get_rec(){
	
		$resultados = $this->db->query("SELECT COUNT(*) as i FROM tb_receta;");
		return $resultados->row();
	}	
	
	
	public function get_fech_rec(){
	
		$resultados = $this->db->query("SELECT * FROM tb_consulta as a inner join tb_paciente as b on a.id_paciente = b.id_paciente WHERE fecha_consulta BETWEEN '2019-03-18' AND '2019-03-28';");
		return $resultados->result();
	}	
	
	
	public function sum_consultas_en(){
	
		$resultados = $this->db->query("select ROUND(SUM(monto),2) as n from tb_consulta where fecha_consulta between '2019-01-01' AND '2019-01-31';");
		return $resultados->row();
	}	
	
	public function sum_consultas_feb(){
	
		$resultados = $this->db->query("select sum(monto) as n from tb_consulta where fecha_consulta between '2019-02-01' AND '2019-02-28';");
		return $resultados->row();
	}	
	
	public function sum_consultas_mar(){
	
		$resultados = $this->db->query("select ROUND(SUM(monto),2) as n from tb_consulta where fecha_consulta between '2019-03-01' AND '2019-03-31';");
		return $resultados->row();
	}	
	
	public function sum_consultas_abr(){
	
		$resultados = $this->db->query("select ROUND(SUM(monto),2) as n from tb_consulta where fecha_consulta between '2019-04-01' AND '2019-04-31';");
		return $resultados->row();
	}	
	
	public function sum_consultas_may(){
	
		$resultados = $this->db->query("select ROUND(SUM(monto),2) as n from tb_consulta where fecha_consulta between '2019-05-01' AND '2019-05-31';");
		return $resultados->row();
	}	
	
	
	public function sum_consultas_jun(){
	
		$resultados = $this->db->query("select ROUND(SUM(monto),2) as n from tb_consulta where fecha_consulta between '2019-06-01' AND '2019-06-31';");
		return $resultados->row();
	}	
	
	public function sum_consultas_jul(){
	
		$resultados = $this->db->query("select ROUND(SUM(monto),2) as n from tb_consulta where fecha_consulta between '2019-07-01' AND '2019-07-31';");
		return $resultados->row();
	}
	
	public function sum_consultas_tot(){
	
		$resultados = $this->db->query("select ROUND(SUM(monto),2) as n from tb_consulta;");
		return $resultados->row();
	}	
	

		
	
	public function get_count_estudio(){
	
		$resultados = $this->db->query("select count(*) as i from tb_estudio;");
		return $resultados->row();
	}	
	
	
	
	
}
