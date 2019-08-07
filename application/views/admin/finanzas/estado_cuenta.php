        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        	<!-- ============================================================== -->
        	<!-- Bread crumb and right sidebar toggle -->
        	<!-- ============================================================== -->
        	<div class="row page-titles">
        		<div class="col-md-5 align-self-center">
        			<h3 class="text-themecolor">Estado de cuenta</h3>
        		</div>
        		<div class="col-md-7 align-self-center">
        			<ol class="breadcrumb">
        				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        				<li class="breadcrumb-item">Finanzas</li>
        				<li class="breadcrumb-item active">Estado de cuenta</li>
        			</ol>
        		</div>

        	</div>
        	<!-- ============================================================== -->
        	<!-- End Bread crumb and right sidebar toggle -->
        	<!-- ============================================================== -->
        	<!-- ============================================================== -->
        	<!-- Container fluid  -->
        	<!-- ============================================================== -->
        	<div class="container-fluid">
        		<!-- ============================================================== -->
        		<!-- Start Page Content -->
        		<!-- ============================================================== -->
        		<div class="row">
        			<div class="col-md-12">
        				<div class="text-right">
        					<a href="<?php echo base_url(); ?>Administrador/Finanzas" class="btn btn-danger btn-remove btn-sm btn-small swal-btn-warning"><i class="fa fa-hand-o-left"></i></a>


        					<button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i>Imprimir</span> </button>
        				</div>
        				<div class="card card-body printableArea">
						<h3><b>                            <img src="<?php echo base_url(); ?>assets/images/coto2.png" style="width:248px;height:59px;" alt="homepage" class="dark-logo" /></b> <span class="pull-right" style="margin-top:25px;">Estado de cuenta al mes de <?php echo $info_mes->nombre_mes ?></span></h3>
        					<hr>
        					<div class="row">
        						<div class="col-md-12">
        						
        	
        						</div>
        						<div class="col-md-12">
        							<div class="table-responsive m-t-40" style="clear: both;">
        								<table class="table table-hover">
        									<thead>
        										<tr>
        											<th class="text-center">Casa #</th>
        											<th class="text-center">Concepto</th>
        											<th class="text-center">Descripción</th>




        											<th class="text-center">Fecha Ingreso</th>


        											<th class="text-center">Monto</th>
        										</tr>
											</thead>
											<tfoot>
											<tr>
        											<th class="text-center">Total de ingresos </th>
        											<th class="text-center"></th>
        											<th class="text-center"></th>




        											<th class="text-center"></th>


        											<th class="text-center"><?php echo $sum_in->a ?></th>
        										</tr>

											</tfoot>											
        									<tbody>
        										<?php if (!empty($info_ingresos)) : ?>
													<?php foreach ($info_ingresos as $info_ingresos) : ?>
													
        												<tr>

        													<td class="text-center"><?php echo $info_ingresos->id_casa; ?></td>

        													<td class="text-center"><?php echo $info_ingresos->name; ?></td>

															<td class="text-center"><?php echo $info_ingresos->descripcion_ingreso; ?></td>
															
        													<td class="text-center"><?php echo $info_ingresos->fecha_ingreso; ?></td>


        													<td class="text-center"><span class="label label-success">$<?php echo $info_ingresos->ingreso; ?></td>


















        												</tr>
        											<?php endforeach; ?>
        										<?php endif; ?>
        									</tbody>


        								</table>
        							</div>
								</div>
								
        						<div class="col-md-12">
        							<div class="table-responsive m-t-40" style="clear: both;">
        								<table class="table table-hover">
        									<thead>
        										<tr>
        											<th class="text-center">Gasto #</th>
        											<th class="text-center">Tipo de gasto</th>
        											<th class="text-center">Descripción gasto</th>




        											<th class="text-center">Fecha de gasto</th>


        											<th class="text-center">Monto</th>
        										</tr>
											</thead>
											<tfoot>
											<tr>
        											<th class="text-center">Total de gastos </th>
        											<th class="text-center"></th>
        											<th class="text-center"></th>




        											<th class="text-center"></th>


        											<th class="text-center"><?php echo $sum_eg->a ?></th>
        										</tr>

											</tfoot>
        									<tbody>
        										<?php if (!empty($info_egresos)) : ?>
													<?php foreach ($info_egresos as $info_egresos) : ?>
													
        												<tr>

        													<td class="text-center"><?php echo $info_egresos->id_egreso; ?></td>

        													<td class="text-center"><?php echo $info_egresos->name_egreso; ?></td>

															<td class="text-center"><?php echo $info_egresos->descripcion_egreso; ?></td>
															
        													<td class="text-center"><?php echo $info_egresos->fecha_egreso; ?></td>


        													<td class="text-center"><span class="label label-danger">$<?php echo $info_egresos->monto_egreso; ?></td>


















        												</tr>
        											<?php endforeach; ?>
        										<?php endif; ?>
        									</tbody>


        								</table>
        							</div>
        						</div>								
        						<div class="col-md-12">
        							<div class="pull-right m-t-30 text-right">

										<h3><b>Capital mes anterior :</b> $<?php  
										if(!is_null($info_cap_ant)){

											$mes_ant = floatval($info_cap_ant->monto_capital);
	
											
											}else{

												$mes_ant = 0;

											}									
										
											echo $mes_ant;
										
										?>
										<h3><b>Capital en <?php echo $info_mes->nombre_mes ?> :</b> $<?php  
										
										$ingreso_int = floatval($info_capital->monto_capital);
										if(!is_null($info_cap_ant)){

										$mes_ant = floatval($info_cap_ant->monto_capital);

										
										}else{

											$mes_ant = 0;

										}

										$cap_total =  $ingreso_int + $mes_ant;										
										echo $cap_total;
										
										?></h3>
        							</div>
        							<div class="pull-left m-t-30 text-left">


        								<p>__________________________</p>
        								<b>
        									<p style="margin-left: 86px;margin-right:auto;">Firma</p>
        								</b>

        							</div>
        							<div class="clearfix"></div>
        							<hr>


        						</div>
        					</div>

        				</div>

        			</div>
        		</div>
        		<!-- ============================================================== -->
        		<!-- End PAge Content -->
        		<!-- ============================================================== -->
        		<!-- ============================================================== -->

        		<!-- ============================================================== -->
        	</div>
        	<!-- ============================================================== -->
        	<!-- End Container fluid  -->
        	<!-- ============================================================== -->
        	<!-- ============================================================== -->

        	<!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
