<form id="form_up_casa" action="#" method="post">

    <input type="hidden" name="id_casa" value="<?php echo $info_up->id_casa ?>">
    <input type="hidden" name="estatus" value="<?php echo $info_up->estatus_pago ?>">


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Responsable</label>
                <input type="text" id="firstName" class="form-control" placeholder="" name="propietario" value="<?php echo $info_up->responsable; ?>" required>
                <small class="form-control-feedback">Especifica el propietario de la casa.</small> </div>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Número de casa</label>
                <input type="text" id="lastName" class="form-control" placeholder="" value="<?php echo $info_up->id_casa; ?>" disabled>
                <small class="form-control-feedback"> # Lote. </small> </div>
        </div>
        <!--/span-->



    </div>
    <!--/row-->


    <div class="row">

    <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Correo Electrónico</label>
                <input type="email" id="lastName" name="correo_casa"class="form-control" placeholder="" value="<?php echo $info_up->id_casa; ?>">
                <small class="form-control-feedback"> ejem@gmail.com </small> </div>
        </div>
        <!--/span-->

        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Teléfono</label>
                <input type="text" id="firstName" class="form-control" placeholder="" value="<?php echo $info_up->telefono; ?>" name="telefono" required>
                <small class="form-control-feedback">Ejem. 3384219166.</small>
            </div>

        </div>        

    </div>

    <div class="row p-t-20">

        <div class="col-sm-6">
            <div class="demo-switch-title">¿Habitada?</div>
            <div class="switch">

                <?php if ($info_up->habitada == 'si') : ?>

                    <label>No
                        <input type="checkbox" name="habitada" id="habitada" value="si" checked><span class="lever switch-col-red"></span>Si</label>

                <?php else : ?>
                    <label>No
                        <input type="checkbox" name="habitada" id="habitada" value="no"><span class="lever switch-col-red"></span>Si</label>

                <?php endif; ?>
            </div>


        </div>

        <div class="col-sm-6">
            <div class="demo-switch-title">¿En renta?</div>
            <div class="switch">
                <?php if ($info_up->renta == 'si') : ?>

                    <label>No
                        <input type="checkbox" name="renta" id="renta" value="si" checked><span class="lever switch-col-red"></span>Si</label>

                <?php else : ?>
                    <label>No
                        <input type="checkbox" name="renta" id="renta" value="no" disabled><span class="lever switch-col-red"></span>Si</label>

                <?php endif; ?>
            </div>
        </div>        


    </div>
    <!--/row-->


    <br>
    <div clas="row m-t-20" id="datos_dueno2">

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">Propietario</label>
                <input type="text" id="propi" class="form-control" placeholder="" value="<?php echo $info_up->dueno_casa ?>" name="dueno">
                <small class="form-control-feedback">Especifica el propietario de la casa.</small>

            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">Teléfono</label>
                <input type="text" id="tel" class="form-control" placeholder="" value="<?php echo $info_up->numero_dueno ?>" name="telefono_dueno">
                <small class="form-control-feedback">Ejem. 3384219166.</small>

            </div>
        </div>

    </div>




    <h3 class="box-title m-t-40">Dirección</h3>
    <hr>
    <div class="row">
        <div class="col-md-12 ">
            <div class="form-group">
                <label>Calle</label>
                <input type="text" class="form-control" name="calle" value="<?php echo $info_up->direccion; ?>" required>
            </div>
        </div>
    </div>

    <div class="form-actions pull-right">
        <a class="btn btn-success" onclick="actualizar(<?php echo $info_up->id_casa;?>)"> <i class="fa fa-save"></i> Guardar cambios</a>
        <button button type="button" class="btn btn-info waves-effect" id="btnactualizar" data-dismiss="modal"></i> Cerrar</button>

    </div>


</form>