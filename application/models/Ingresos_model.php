<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresos_model extends CI_Model {


    public function save($data,$id,$ingreso_int,$newDate2,$nombre_in){
        
        setlocale(LC_TIME,"es_ES");
        $estatusm = "Pago Mensual";

        $estatusa = "Pago Anual"; 

        $estatus_abono = "Abono"; 

         $this->db->insert("tb_ingreso",$data);

         $last_id=$this->db->insert_id(); 

         $date=date_create("$newDate2");

         $date2=date_create("$newDate2");

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
         
         $df2 = date_format($date2,"Y-m-d");

         $mes_nom = date("F",strtotime($df));

         $resultado2 = $this->db->query("insert into tb_suscrip(dia_suscrip,mes_suscrip,ano_suscrip,vencimiento_suscrip,id_casa,id_ingreso)values($dia,$mes,$anio,'$df',$id,$last_id)");                  
         
        if($nombre_in == "Abono mensual"){

            $resultado3 = $this->db->query("insert into tb_abonos(monto_abono,mes_correspondiente,id_ingreso,estatus_p,fecha_correspondiente) values($ingreso_int,'$mes_nom',$last_id,'$estatus_abono','$df2');");                  
     

        }
        

         if($ingreso_int == 200 && $nombre_in == "Cuota mensual"){


           

            $this->db->set('vencimiento',$df);
            $this->db->set('estatus_pago',$estatusm);
					
            $this->db->where('id_casa',$id);

            $resultado = $this->db->update('tb_casas');
                

      
    
        return $resultado;



     
        }

        if($ingreso_int == 2200){


     

            $this->db->set('vencimiento',$df);
            $this->db->set('estatus_pago',$estatusa);
					
            $this->db->where('id_casa',$id);

            $resultado = $this->db->update('tb_casas');

        
        return $resultado;
            
        }
	}
	 	
    public function getinfo(){
	 
        $resultados = $this->db->query("select * from tb_casas where id_casa <> 0 && id_casa <> 10000;");
        return $resultados->result();
	}

    public function getinfocuota(){
	 
        $resultados = $this->db->query("select a.ingreso,a.descripcion_ingreso,a.id_casa,a.fecha_inicio,b.vencimiento_suscrip,c.responsable,d.name from tb_ingreso as a inner join tb_suscrip as b on a.id_ingreso  = b.id_ingreso inner join tb_concepto_in as d on a.id_concepto_in = d.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where (a.id_concepto_in = 1 or a.id_concepto_in = 5);");
         return $resultados->result();
        }    


        public function getinfotag(){
	 
            $resultados = $this->db->query("select a.ingreso,a.descripcion_ingreso,a.id_casa,a.fecha_ingreso,c.responsable,d.name from tb_ingreso as a inner join tb_suscrip as b on a.id_ingreso  = b.id_ingreso inner join tb_concepto_in as d on a.id_concepto_in = d.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where (a.id_concepto_in = 2 or a.id_concepto_in = 6);");
             return $resultados->result();
            }  

    public function getsum(){
	 
        $resultados = $this->db->query("select sum(a.ingreso) as a from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where a.id_concepto_in = 1 or a.id_concepto_in = 5;");
         return $resultados->row();
        }    
         
        public function getsum_tag(){
	 
            $resultados = $this->db->query("select sum(a.ingreso) as a from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where a.id_concepto_in = 2 or a.id_concepto_in = 6;");
             return $resultados->row();
            }  

            public function getrecibo($id){
	 
                $resultados = $this->db->query("select * from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in inner join tb_suscrip as c on a.id_ingreso = c.id_ingreso inner join tb_casas as d on a.id_casa = d.id_casa where a.id_ingreso=$id;");
                 return $resultados->row();
                }              
            
            

//---------------------------------------------------------


public function getinfovarios(){
	 
    $resultados = $this->db->query("select a.ingreso,a.descripcion_ingreso,a.id_casa,a.fecha_ingreso,c.responsable,d.name from tb_ingreso as a inner join tb_suscrip as b on a.id_ingreso  = b.id_ingreso inner join tb_concepto_in as d on a.id_concepto_in = d.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where (a.id_concepto_in = 4);");
     return $resultados->result();
    }  

    public function getsum_varios(){
 
        $resultados = $this->db->query("select sum(a.ingreso) as a from tb_ingreso as a inner join tb_suscrip as b on a.id_ingreso  = b.id_ingreso inner join tb_concepto_in as d on a.id_concepto_in = d.id_concep_in inner join tb_casas as c on a.id_casa = c.id_casa where (a.id_concepto_in = 4);");
         return $resultados->row();
        }  


//---------------------------------------------------------


public function getinfototal(){
	 
    $resultados = $this->db->query("select * from tb_ingreso as a inner join tb_concepto_in as b on a.id_concepto_in = b.id_concep_in;");
     return $resultados->result();
    }  

    public function getsumtotal(){
 
        $resultados = $this->db->query("select sum(ingreso) as a from tb_ingreso;");
         return $resultados->row();
        }  



    public function getinfoConcep(){
	 
        $resultados = $this->db->get("tb_concepto_in");
        return $resultados->result();
       }
       
       public function getfr($anio,$mes,$id_casa)
       {
     
         $resultados = $this->db->query("select id_casa from tb_suscrip where id_casa = $id_casa and (mes_suscrip = '$mes' and ano_suscrip = '$anio');");
     
         return $resultados->row();
       }       
}
