<form id="form_abon" action="<?php echo base_url(); ?>Administrador/Espacios/rechazar" method="post" autocomplete="off">



	<input type="hidden" name="id_reserva" value="<?php echo $info_reserva4->id_reserva ?>">


	<div class="row">

		
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">Motivo de rechazo</label>
				<textarea class="form-control form-material" name="motivorechazo" rows="2"></textarea>
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
