<form id="form_abon" action="<?php echo base_url(); ?>Principal/Cuotas/update" method="post">


<input type="hidden" name="id_concep_in" value="<?php echo $info_a->id_concep_in ?>">
    

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Monto actual</label>
            <input type="text" id="firstName" class="form-control" placeholder="" name="monto_mes" value="<?php echo $info_a->monto_f?>" readonly>
            <small class="form-control-feedback">Monto abonado actualmente.</small> </div>
    </div>
    <!--/span-->




</div>
<!--/row-->


<div class="row">



    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Nuevo Monto:</label>
            <input type="text" id="lastName" name="n_monto" class="form-control" >
            <small class="form-control-feedback">Ajutar monto para concepto. </small> </div>
    </div>    
    <!--/span-->

</div>


<br>







<div class="form-actions pull-right">
    
    <button button type="button" class="btn btn-info waves-effect" id="btnactualizar" data-dismiss="modal"></i> Cerrar</button>
    <button button type="submit" class="btn btn-info waves-effect"></i> Actualizar</button>

</div>


</form>
