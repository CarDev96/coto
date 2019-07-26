<form id="form_liq" action="#" method="post">


<input type="hidden" name="id_abono" value="<?php echo $info_a->id_abono ?>">
    <input type="hidden" name="fecha_correspondiente" value="<?php echo $info_a->fecha_correspondiente ?>">
    <input type="hidden" name="id_casa" value="<?php echo $info_a->id_casa ?>">
    <input type="hidden" name="id_ingreso" value="<?php echo $info_a->id_ingreso ?>">

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Monto mensualidad</label>
            <input type="text" id="firstName" class="form-control" placeholder="" name="monto_mes" value="<?php echo $info_monto->a?>" readonly>
            <small class="form-control-feedback">Monto total de la mensualidad.</small> </div>
    </div>
    <!--/span-->
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Restante</label>
            <input type="text" id="lastName" class="form-control" placeholder="" value="<?php $monto_a = $info_a->monto_abono;$monto_mes = $info_monto->a;$restante = $monto_mes - $monto_a;echo $restante;?>" readonly>
            <small class="form-control-feedback">Monto restante de la mensualidad. </small> </div>
    </div>
    <!--/span-->



</div>
<!--/row-->


<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Liquidar:</label>
            <input type="email" id="lastName" name="liquidacion" class="form-control" placeholder="">
            <small class="form-control-feedback">Cantidad a liquidar </small> </div>
    </div>
    <!--/span-->

</div>


<br>







<div class="form-actions pull-right">
    <a class="btn btn-success" onclick="liquid(<?php echo $info_a->id_abono;?>)"> <i class="fa fa-save"></i>Liquidar</a>
    <button button type="button" class="btn btn-info waves-effect" id="btnactualizar" data-dismiss="modal"></i> Cerrar</button>

</div>


</form>
