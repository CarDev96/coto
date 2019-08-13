        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        	<!-- ============================================================== -->
        	<!-- Bread crumb and right sidebar toggle -->
        	<!-- ============================================================== -->
        	<div class="row page-titles">
        		<div class="col-md-5 align-self-center">
        			<h3 class="text-themecolor">Lista de reservaciones</h3>
        		</div>
        		<div class="col-md-7 align-self-center">
        			<ol class="breadcrumb">
        				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        				<li class="breadcrumb-item">Reservaciones</li>
        				<li class="breadcrumb-item active">Reservaciones Pendientes</li>
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
        		<!-- Row -->
        		<div class="row">
        			<div class="col-lg-4 col-xlg-3 col-md-5">

        				<div class="card">
        					<div class="card-body">

        						<center class="m-t-30">



        							<img src="<?php echo base_url(); ?>assets/images/espacios/<?php echo $info_reserva->foto_es ?>" class="img-circle" width="140" />


        							<h4 class="card-title m-t-10"><?php echo $info_reserva->name_es ?></h4>
        							<h6 class="card-subtitle"><?php echo $info_reserva->descri_es ?></h6>

        						</center>



        						<small class="text-muted p-t-30 db">Descripción</small>
        						<h6><?php echo $info_reserva->descri_es; ?></h6>

        					</div>
        				</div>
        			</div>
        			<!-- Column -->
        			<!-- Column -->
        			<div class="col-lg-8 col-xlg-9 col-md-7">
        				<div class="card">
        					<!-- Nav tabs -->
        					<ul class="nav nav-tabs profile-tab" role="tablist">
        						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Lista de asistencia</a> </li>



        					</ul>
        					<!-- Tab panes -->
        					<div class="tab-content">

        						<div class="tab-pane active" id="home" role="tabpanel">
        							<div class="card-body">


        								<div class="table-responsive m-t-40">
        									<table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
        										<thead>
        											<tr>
        												<th>Nombre de residente</th>
        												<th>Teléfono de residente</th>
        												<th>Fecha de reserva</th>
        												<th>Hora de reserva</th>
        												<th>Estatus reserva</th>

        												<th>Aprobar</th>
        												<th>Rechazar</th>





        											</tr>
        										</thead>

        										<tfoot>
        											<tr>
        												<th>Nombre de residente</th>
        												<th>Teléfono de residente</th>
        												<th>Fecha de reserva</th>
        												<th>Hora de reserva</th>
        												<th>Estatus reserva</th>

        												<th>Aprobar</th>
        												<th>Rechazar</th>





        											</tr>
        										</tfoot>
        										<tbody>
        											<?php if (!empty($info_reserva2)) : ?>
        											<?php foreach ($info_reserva2 as $info_reserva2) : ?>
        											<tr>
        												<td style="text-align:center;">



        													<?php echo $info_reserva2->responsable; ?>






        												</td>
        												<td style="text-align:center;"><?php echo $info_reserva2->telefono; ?></td>



        												<td style="text-align:center;"><?php echo $info_reserva2->fecha_reserva; ?></td>
        												<td style="text-align:center;"><?php echo $info_reserva2->hora_reserva; ?></td>
        												<td style="text-align:center;"><?php echo $info_reserva2->estatus_reserva; ?></td>




        												<td align="center">


        													<div class="btn-group">


        														<a href="<?php echo base_url(); ?>Administrador/Espacios/aceptar/<?php echo $info_reserva2->id_reserva; ?>" class="btn btn-success btn-circle btn-small"><i class="fa fa-check"></i></a>




        													</div>



        												</td>

        												<td align="center">


        													<div class="btn-group">


                                                            <a  id="eliminar_ingreso" class="btn btn-danger btn-remove btn-sm btn-circle swal-btn-warning" data-toggle="modal" data-target="#rechazar" onclick="rechazar(<?php echo $info_reserva2->id_reserva; ?>)"><i class="fa fa-remove"></i></a>




        													</div>



        												</td>







        											</tr>
        											<?php endforeach; ?>
        											<?php endif; ?>

        										</tbody>

        									</table>
        								</div>


        							</div>
        						</div>



        					</div>
        				</div>
        			</div>
        			<!-- Column -->
        		</div>
        		<!-- Row -->
        		<!-- ============================================================== -->
        		<!-- End PAge Content -->
        		<!-- ============================================================== -->

        		<!-- ============================================================== -->
        	</div>
        	<!-- ============================================================== -->
			<!-- End Container fluid  -->
			
            <div id="rechazar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">¿Está seguro?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" style="height: 210px;width: 100%;" id="content">

                        </div>

                    </div>

                </div>
                <!-- /.modal-content -->			
        	<!-- ============================================================== -->
        	<!-- ============================================================== -->
        	<!-- sample modal content -->

        	<!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
