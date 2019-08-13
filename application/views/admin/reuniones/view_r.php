<form id="form_abon" action="<?php echo base_url(); ?>Principal/Reuniones/nuevo" method="post" autocomplete="off">



	<input type="hidden" name="id_casa" value="<?php echo $info_a->id_casa ?>" >


	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">Hora de llegada</label>
				<div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
					<input type="text" name="hora_asistencia" class="form-control">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fa fa-clock-o"></i></span>
					</div>
				</div>
			</div>
		</div>
		<!--/span-->

		<div class="col-md-6">
			<div class="form-">
				<label class="control-label text-right col-md-3">Evento:</label>
				<div class="input-group">
					<select class="select2 form-control custom-select" id="id_aviso" name="id_aviso" style="width: 100%; height:36px;">
						<option>-Tipo evento-</option>
						<?php foreach ($info_reunion as $info_reunion) : ?>

							<option value="<?php echo $info_reunion->id_aviso; ?>">
								<?php echo $info_reunion->tit_aviso ?>
							</option>

						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<!--/span-->




	</div>
	<!--/row-->



	<br>







	<div class="form-actions pull-right">

		<button button type="button" class="btn btn-info waves-effect" id="btnactualizar" data-dismiss="modal"></i> Cerrar</button>
		<button button type="submit" class="btn btn-info waves-effect"></i>Guardar</button>

	</div>


</form>
<script>
	$('.clockpicker').clockpicker({
		donetext: 'Done',
	}).find('input').change(function() {
		console.log(this.value);
	});

    // For select 2
    $(".select2").select2();	
</script>
