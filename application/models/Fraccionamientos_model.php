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

    $resultados = $this->db->query("select * from tb_casas where id_casa <> 1 && id_casa <> 10000;");
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

    $resultados = $this->db->query("select * from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in where id_casa = $id and( a.id_concepto_in <> 1 and a.id_concepto_in <> 5) and a.id_concepto_in <>7 and eliminado <>1;");

    return $resultados->result();
  }

  public function getInfop6($id)
  {

    $resultados = $this->db->query("select * from tb_ingreso as a inner join tb_abonos as b on a.id_ingreso = b.id_ingreso inner join tb_concepto_in as c on a.id_concepto_in = c.id_concep_in where a.id_casa = $id;");

    return $resultados->result();
  }  

  public function getsump($id)
  {

    $resultados = $this->db->query("select sum(a.ingreso) as a from tb_ingreso as a inner join tb_suscrip as b on a.id_ingreso  = b.id_ingreso inner join tb_concepto_in as d on a.id_concepto_in = d.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where a.id_casa = $id  and (d.id_concep_in != 1 and a.id_concepto_in != 5) and d.id_concep_in != 7 and eliminado <> 1;");

    return $resultados->row();
  }

  //----------------- view ----------

  public function getsump2($id)
  {

    $resultados = $this->db->query("select sum(b.monto_abono) as a from tb_ingreso as a inner join tb_abonos as b on a.id_ingreso = b.id_ingreso inner join tb_concepto_in as c on a.id_concepto_in = c.id_concep_in where a.id_casa=$id and eliminado <> 1;");

    return $resultados->row();
  }

  //----------------- view ----------  

  public function get_a($id)
  {

    $resultados = $this->db->query("select * from tb_abonos as a inner join tb_ingreso as b on a.id_ingreso=b.id_ingreso where id_abono = $id;");

    return $resultados->row();
  }

  //----------------- view ----------    


  public function get_monto()
  {

    $resultados = $this->db->query("select monto_f as a from tb_concepto_in where name='Cuota mensual';");

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



public function liq($data,$id_casa,$id_abono,$fecha_correspondiente,$liquidacion,$ingreso_int,$id_ingreso){
        
  $estatusm = "Pago Mensual";

   $date2=date_create("$fecha_correspondiente");

   $anio = date("Y", strtotime($fecha_correspondiente));

   $mes = date("m", strtotime($fecha_correspondiente));         

   $dia = date("d",strtotime($fecha_correspondiente));         

   $dia_ac = date("Y-m-d");
   
   

   

    date_add($date2,date_interval_create_from_date_string("1 MONTH"));
 

   $df2 = date_format($date2,"Y-m-d");

   $resultado = $this->db->query("insert into tb_ingreso(ingreso,id_concepto_in,id_casa,fecha_ingreso,fecha_inicio)values($liquidacion,1,$id_casa,'$dia_ac','$fecha_correspondiente')");                     
   
   $last_id=$this->db->insert_id(); 

   $resultado2 = $this->db->query("insert into tb_suscrip(dia_suscrip,mes_suscrip,ano_suscrip,vencimiento_suscrip,id_casa,id_ingreso)values($dia,$mes,$anio,'$df2',$id_casa,$last_id)");                  

   
		$this->db->where('id_abono', $id_abono);
		$this->db->update('tb_abonos', $data); 
	
    
   
    


           

      $this->db->set('vencimiento',$df2);
      $this->db->set('estatus_pago',$estatusm);
    
      $this->db->where('id_casa',$id_casa);

      $resultado5 = $this->db->update('tb_casas');
          



  return $resultado5;





  


}


}
