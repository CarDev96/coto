<form id="form_abon" action="<?php echo base_url(); ?>Principal/Egresos/delete" method="post">


<input type="hidden" name="id_egreso" value="<?php echo $info_a->id_egreso ?>">
    <input type="hidden" name="usuario_elimina" value="<?php echo $this->session->userdata("username"); ?>">
    

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Especifique el motivo de eliminación</label>
            <select class="select2 form-control custom-select" name="motivo_elim" id="motivo_elim" style="width: 100%; height:36px;">
                                    <option value="">-- Seleccionar --</option>
                                    <?php foreach($info_motivo as $info_motivo):?>
                                    
                                        <option value="<?php echo $info_motivo->name_motivo_e;?>" >
                                            <?php echo $info_motivo->name_motivo_e ?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
    </div>
    <!--/span-->




</div>
</div>
<!--/row-->







<div class="form-actions pull-right">
    
    
    <button button type="submit" class="btn btn-danger waves-effect"></i>Eliminar</button>
    <button button type="button" class="btn btn-info waves-effect" id="btnactualizar" data-dismiss="modal"></i> Cerrar</button>    

</div>


</form>
<script>
 
    // For select 2
    $(".select2").select2();
</script>
