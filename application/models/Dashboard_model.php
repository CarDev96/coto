<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	

    public function countcasa(){

  
        $resultado = $this->db->query("select count(id_casa) as a from tb_casas;");

		return $resultado->row();

	}

    public function countdeudor(){

  
        $resultado = $this->db->query("select count(id_casa) as b from tb_casas where estatus_pago = 'Deudor';");

		return $resultado->row();

    }
    

    public function avisos(){

  
        $resultado = $this->db->query("select * from tb_avisos where curdate() between fecha_aviso and fecha_retiro order by id_aviso desc;");

		return $resultado->result();

    }

    public function avisos2(){

  
        $resultado = $this->db->query("select mensaje_anuncio as a from tb_avisos where curdate() between fecha_aviso and fecha_retiro order by id_aviso desc;");

		return $resultado->row();

    }    

    public function user($id){

  
        $resultado = $this->db->query("select * from tb_usuarios where id_usuario = $id;");

		return $resultado->row();

    }    
    
//------------------------- GRAFICA    -----------------------------------------------------------------------


public function sumenero(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-01-01' AND '2019-01-31';");

    return $resultado->row();

}

public function sumenerogasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-01-01' AND '2019-01-31';");

    return $resultado->row();

}


// ---------------------------------------- Febrero ------------------------------------

public function sumfebrero(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-02-01' AND '2019-02-29';");

    return $resultado->row();

}

public function sumfebrerogasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-02-01' AND '2019-02-29';");

    return $resultado->row();

}


// ---------------------------------------- Marzo ------------------------------------

public function summarzo(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-03-01' AND '2019-03-31';");

    return $resultado->row();

}

public function summarzogasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-03-01' AND '2019-03-31';");

    return $resultado->row();

}


// ---------------------------------------- Abril ------------------------------------

public function sumabril(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-04-01' AND '2019-04-31';");

    return $resultado->row();

}

public function sumabrilgasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-04-01' AND '2019-04-31';");

    return $resultado->row();

}


// ---------------------------------------- Mayo ------------------------------------

public function summayo(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-05-01' AND '2019-05-31';");

    return $resultado->row();

}

public function summayogasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-05-01' AND '2019-05-31';");

    return $resultado->row();

}


// ---------------------------------------- Junio ------------------------------------

public function sumjunio(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-06-01' AND '2019-06-31';");

    return $resultado->row();

}

public function sumjuniogasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-06-01' AND '2019-06-31';");

    return $resultado->row();

}


// ---------------------------------------- Julio ------------------------------------

public function sumjulio(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-07-01' AND '2019-07-31';");

    return $resultado->row();

}

public function sumjuliogasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-07-01' AND '2019-07-31';");

    return $resultado->row();

}


// ---------------------------------------- Agosto ------------------------------------

public function sumagosto(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-08-01' AND '2019-08-31';");

    return $resultado->row();

}

public function sumagostogasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-08-01' AND '2019-08-31';");

    return $resultado->row();

}


// ---------------------------------------- Septiembre ------------------------------------

public function sumseptiembre(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-09-01' AND '2019-09-31';");

    return $resultado->row();

}

public function sumseptiembregasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-09-01' AND '2019-09-31';");

    return $resultado->row();

}


// ---------------------------------------- Octubre ------------------------------------

public function sumoctubre(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-10-01' AND '2019-10-31';");

    return $resultado->row();

}

public function sumoctubregasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-10-01' AND '2019-10-31';");

    return $resultado->row();

}


// ---------------------------------------- Noviembre ------------------------------------

public function sumnoviembre(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-11-01' AND '2019-11-31';");

    return $resultado->row();

}

public function sumnoviembregasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-11-01' AND '2019-11-31';");

    return $resultado->row();

}


// ---------------------------------------- Diciembre ------------------------------------

public function sumdiciembre(){

  
    $resultado = $this->db->query("select sum(ingreso) as e from tb_ingreso where fecha_ingreso BETWEEN '2019-12-01' AND '2019-12-31';");

    return $resultado->row();

}

public function sumdiciembregasto(){

  
    $resultado = $this->db->query("select sum(monto_egreso) as e from tb_egresos where fecha_egreso BETWEEN '2019-12-01' AND '2019-12-31';");

    return $resultado->row();

}


}
