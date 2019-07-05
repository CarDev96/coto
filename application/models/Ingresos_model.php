<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresos_model extends CI_Model {


    public function save($data,$id,$ingreso_int,$newDate2){

        $estatusm = "Pago Mensual";

        $estatusa = "Pago Anual"; 

         $this->db->insert("tb_ingreso",$data);

         $last_id=$this->db->insert_id(); 

         $date=date_create("$newDate2");

         $anio = date("Y", strtotime($newDate2));

         $mes = date("m", strtotime($newDate2));         

         $dia = date("d",strtotime($newDate2));         

         if($ingreso_int == 200){

         date_add($date,date_interval_create_from_date_string("1 MONTH"));
        }
        else{

        date_add($date,date_interval_create_from_date_string("1 YEAR"));            


        }
         $df = date_format($date,"Y-m-d");

         $resultado2 = $this->db->query("insert into tb_suscrip(dia_suscrip,mes_suscrip,ano_suscrip,vencimiento_suscrip,id_casa,id_ingreso)values($dia,$mes,$anio,'$df',$id,$last_id)");                  
         
        
        

         if($ingreso_int == 200){


           

            $this->db->set('estatus_pago',$estatusm);
					
            $this->db->where('id_casa',$id);

            $resultado = $this->db->update('tb_casas');
                

    

    
        return $resultado;



     
        }

        else{


     

            $this->db->set('estatus_pago',$estatusa);
					
            $this->db->where('id_casa',$id);

            $resultado = $this->db->update('tb_casas');
                

    

    
        return $resultado;
            
        }
	}
	 	
    public function getinfo(){
	 
        $resultados = $this->db->get("tb_casas");
        return $resultados->result();
	}

    public function getinfocuota(){
	 
        $resultados = $this->db->query("select a.ingreso,a.descripcion_ingreso,a.id_casa,a.fecha_inicio,b.vencimiento_suscrip,c.responsable,d.name from tb_ingreso as a inner join tb_suscrip as b on a.id_ingreso  = b.id_ingreso inner join tb_concepto_in as d on a.id_concepto_in = d.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where (a.id_concepto_in = 1 or a.id_concepto_in = 5);");
         return $resultados->result();
        }    

    public function getsum(){
	 
        $resultados = $this->db->query("select sum(a.ingreso) as a from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where a.id_concepto_in = 1 or a.id_concepto_in = 5;");
         return $resultados->row();
        }    
	 	
    public function getinfoConcep(){
	 
        $resultados = $this->db->get("tb_concepto_in");
        return $resultados->result();
       }	
}
