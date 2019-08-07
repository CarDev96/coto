<form id="form_abon" action="<?php echo base_url(); ?>Principal/Ingresos/abona" method="post">


<input type="hidden" name="id_abono" value="<?php echo $info_a->id_abono ?>">
    <input type="hidden" name="fecha_correspondiente" value="<?php echo $info_a->fecha_correspondiente ?>">
    <input type="hidden" name="id_casa" value="<?php echo $info_a->id_casa ?>">
    <input type="hidden" name="id_ingreso" value="<?php echo $info_a->id_ingreso ?>">

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Monto abonado</label>
            <input type="text" id="firstName" class="form-control" placeholder="" name="monto_mes" value="<?php echo $info_a->monto_abono?>" readonly>
            <small class="form-control-feedback">Monto abonado actualmente.</small> </div>
    </div>
    <!--/span-->




</div>
<!--/row-->


<div class="row">



    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Abono:</label>
            <input type="text" id="lastName" name="aboni" class="form-control" >
            <small class="form-control-feedback">Cantidad para abonar al mes. </small> </div>
    </div>    
    <!--/span-->

</div>


<br>







<div class="form-actions pull-right">
    
    <button button type="button" class="btn btn-info waves-effect" id="btnactualizar" data-dismiss="modal"></i> Cerrar</button>
    <button button type="submit" class="btn btn-info waves-effect"></i>Abonar</button>

</div>


</form>
