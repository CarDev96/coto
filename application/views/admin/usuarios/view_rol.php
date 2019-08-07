<form id="form_abon" action="<?php echo base_url(); ?>Administrador/Usuarios/update" method="post">


<input type="hidden" name="id_rol" value="<?php echo $info_a->id_rol ?>">
    

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Nombre actual</label>
            <input type="text" id="firstName" class="form-control" placeholder="" name="monto_mes" value="<?php echo $info_a->name_rol?>" readonly>
            <small class="form-control-feedback">Monto abonado actualmente.</small> </div>
    </div>
    <!--/span-->




</div>
<!--/row-->


<div class="row">



    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Renombrar:</label>
            <input type="text" id="lastName" name="nom_rol" class="form-control" >
            <small class="form-control-feedback">Renombrar tipo de rol. </small> </div>
    </div>    
    <!--/span-->

</div>


<br>







<div class="form-actions pull-right">
    
    <button button type="button" class="btn btn-info waves-effect" id="btnactualizar" data-dismiss="modal"></i> Cerrar</button>
    <button button type="submit" class="btn btn-info waves-effect"></i> Actualizar</button>

</div>


</form>
