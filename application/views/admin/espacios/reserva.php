        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        	<!-- ============================================================== -->
        	<!-- Bread crumb and right sidebar toggle -->
        	<!-- ============================================================== -->
        	<div class="row page-titles">
        		<div class="col-md-5 align-self-center">
        			<h3 class="text-themecolor">Reservar espacio</h3>
        		</div>
        		<div class="col-md-7 align-self-center">
        			<ol class="breadcrumb">
        				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        				<li class="breadcrumb-item">Reservas</li>
        				<li class="breadcrumb-item active">Nueva</li>
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
        			<!-- Column -->
        			<div class="col-lg-4 col-xlg-3 col-md-5">

        				<div class="card">
        					<div class="card-body">

        						<center class="m-t-30">



        							<img src="<?php echo base_url(); ?>assets/images/espacios/<?php echo $info_reserva->foto_es ?>" class="img-circle" width="140" />


        							<h4 class="card-title m-t-10"><?php echo $info_reserva->name_es ?></h4>
        							<h6 class="card-subtitle"><?php echo $info_reserva->descri_es ?></h6>

        						</center>


        						<h4 class="text-muted">Días disponible : </h4>

        						<?php if (!empty($info_dias)) : ?>
        							<?php foreach ($info_dias as $info_dias) : ?>

        								<h6><?php echo $info_dias->name_dia; ?></h6>


        							<?php endforeach; ?>
        						<?php endif; ?>

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
        						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Nueva reserva</a> </li>



        					</ul>
        					<!-- Tab panes -->
        					<div class="tab-content">

        						<div class="tab-pane active" id="home" role="tabpanel">
        							<div class="card-body">

        								<div class="card-body">

        									<form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Principal/Reservas/res" autocomplete="off">


        										<input type="hidden" name="id_espacio" value="<?php echo $info_dias->id_es ?>">
        										<input type="hidden" name="id_casa" value="<?php echo $this->session->userdata("id_casa") ?>">


        										<div class="form-group">
												<label class="control-label">Fecha de reserva</label>
        											<div class="col-md-9">

        												<input type="text" class="form-control" name="fecha_reserva" placeholder="" id="mdate">
        											</div>
        										</div>


        										<div class="form-group">
        											<label class="control-label">Hora de reserva</label>
        											<div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
        												<input type="text" name="hora_reserva" class="form-control">
        												<div class="input-group-append">
        													<span class="input-group-text"><i class="fa fa-clock-o"></i></span>
        												</div>
        											</div>
        										</div>

        										<div class="form-group">
        											<div class="col-sm-12">
        												<button class="btn btn-info">Reservar</button>
        											</div>
        										</div>
        									</form>
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
        	<!-- ============================================================== -->
        	<!-- ============================================================== -->
        	<!-- sample modal content -->
        	<div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
        		<div class="modal-dialog modal-dialog-centered">
        			<div class="modal-content">
        				<div class="modal-header bg-green">
        					<h4 class="modal-title" id="vcenter">Liquidar mensualidad</h4>
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        				</div>
        				<div class="modal-body" style="overflow-y: auto;height: 358px;width: 100%;" id="content">

        				</div>

        			</div>

        		</div>
        		<!-- /.modal-content -->
        	</div>
        	<!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
