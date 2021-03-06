        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        	<!-- ============================================================== -->
        	<!-- Bread crumb and right sidebar toggle -->
        	<!-- ============================================================== -->
        	<div class="row page-titles">
        		<div class="col-md-5 align-self-center">
        			<h3 class="text-themecolor">Registro de Avisos</h3>
        		</div>
        		<div class="col-md-7 align-self-center">
        			<ol class="breadcrumb">
        				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

        				<li class="breadcrumb-item active">Nuevo aviso</li>
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
        			<div class="col-lg-12">
        				<div class="card card-outline-info">
        					<div class="card-header">
        						<h4 class="m-b-0 text-white">Registrar nuevo aviso</h4>
        					</div>
        					<div class="card-body">
        						<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>Principal/Avisos/nuevo">
        							<div class="form-body">


        								<div class="row">

        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Título del aviso:</label>
        											<div class="col-md-9">

        												<input type="text" class="form-control" name="tit_aviso" placeholder="">
        											</div>
        										</div>
        									</div>
        									<!--/span-->

        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Fecha en que publica:</label>
        											<div class="col-md-9">

        												<input type="text" class="form-control" name="fecha_anuncio" placeholder="" id="mdate">
        											</div>
        										</div>
        									</div>
        									<!--/span-->
        								</div>
										<!--/row-->
										
        								<div class="row p-t-20">
        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Mensaje a dar:</label>
        											<div class="col-md-9">

        												<textarea class="form-control form-material" name="mensaje_anuncio" rows="2"></textarea>
        											</div>
        										</div>
        									</div>
        									<!--/span-->

        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Fecha en que retira:</label>
        											<div class="col-md-9">

        												<input type="text" class="form-control" name="fecha_retiro" placeholder="" id="mdate2">
        											</div>
        										</div>
        									</div>
        									<!--/span-->

        								</div>
        								<!--/row-->										

        								<div class="row">

        									<div class="col-md-6">
        										<div class="demo-switch-title">¿Reunión?</div>
        										<div class="switch">
        											<label>No
        												<input type="checkbox" name="aviso_reunion" id="aviso_reunion" value="Si"><span class="lever switch-col-red"></span>Si</label>
        										</div>
											</div>


											</div>
										<!--/row-->
										<div class="row p-t-20">
											
        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Fecha reunión:</label>
        											<div class="col-md-9">

        												<input type="text" class="form-control" name="fecha_reunion" placeholder="" id="mdate3">
        											</div>
        										</div>
        									</div>
        									<!--/span-->											
											</div>											








        								<br>
        								<!--/row-->



        							</div>
        							<div class="form-actions">
        								<div class="row">
        									<div class="col-md-6">
        										<div class="row">
        											<div class="col-md-offset-3 col-md-9">
        												<button type="submit" class="btn btn-info"> <i class="fa fa-save"></i> Guardar</button>

        											</div>
        										</div>
        									</div>
        									<div class="col-md-6"> </div>
        								</div>
        							</div>
        						</form>
        					</div>
        				</div>
        			</div>
        		</div>
        		<!-- Row -->
        		<!-- Row -->

        		<!-- Row -->
        		<!-- Row -->

        		<!-- Row -->
        		<!-- Row -->

        		<!-- Row -->
        		<!-- Row -->

        		<!-- Row -->
        		<!-- ============================================================== -->
        		<!-- End PAge Content -->
        	</div>
        	<!-- ============================================================== -->
        	<!-- End Container fluid  -->
        	<!-- ============================================================== -->
        	<!-- ============================================================== -->
        	<!-- footer -->
        	<!-- ============================================================== -->

        	<!-- ============================================================== -->
        	<!-- End footer -->
        	<!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
