        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        	<!-- ============================================================== -->
        	<!-- Bread crumb and right sidebar toggle -->
        	<!-- ============================================================== -->
        	<div class="row page-titles">
        		<div class="col-md-5 align-self-center">
        			<h3 class="text-themecolor">Editar espacios comunes</h3>
        		</div>
        		<div class="col-md-7 align-self-center">
        			<ol class="breadcrumb">
        				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

        				<li class="breadcrumb-item active">Editar espacio</li>
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
        						<h4 class="m-b-0 text-white">Editar espacio</h4>
        					</div>
        					<div class="card-body">
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>Administrador/Espacios/update" enctype="multipart/form-data">

								<input type="hidden" name="id_es" value="<?php echo $info_edit->id_es?>">
        							<div class="form-body">











        								<!--/row-->

        								<hr class="m-t-0 m-b-40">
        								<div class="row">
        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Nombre de espacio:</label>
        											<div class="col-md-9">
        												<input type="text" class="form-control" name="name_es" id="txt_gasto" value="<?php echo $info_edit->name_es ?>">
        											</div>
        										</div>
        									</div>

        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Descripción:</label>
        											<div class="col-md-9">

        												<textarea class="form-control form-material" name="descri_es" rows="2"><?php echo $info_edit->descri_es ?></textarea>
        											</div>
        										</div>
        									</div>
        									<!--/span-->

        								</div>
        								<div class="row">
        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Días disponible:</label>
        											<div class="col-md-6">
        												<select class="select2 m-b-10 select2-multiple" name="dias_disp[]" style="width: 100%" multiple="multiple" data-placeholder="Elige los días disponibles">
        													<?php if (!empty($info_dias2)) : ?>

        														<?php foreach ($info_dias2 as $info_dias2) : ?>
        															<option value="<?php echo $info_dias2->id_dia; ?>" selected><?php echo $info_dias2->name_dia; ?></option>



        														<?php endforeach; ?>
        													<?php endif; ?>


        													<?php if (empty($info_dias2)) : ?>
        														<option></option>

        													<?php endif; ?>

        													<?php if (empty($info_dias2)) : ?>
        														<option></option>
        													<?php endif; ?>

        													<?php foreach ($info_dias as $info_dias) : ?>

        														<option value="<?php echo $info_dias->id_dia; ?>">
        															<?php echo $info_dias->name_dia; ?>
        														</option>



        													<?php endforeach; ?>
        												</select>
        											</div>
        										</div>
        									</div>
        									<!--/span-->





        								</div>
        								<!--/row-->
        								<div class="row">

        									<div class="col-md-6">
        										<div class="form-group row">
        											<label class="control-label text-right col-md-3">Foto lugar:</label>
        											<div class="col-md-9">


        												<input type="file" id="input-file-max-fs" class="lugar" name="foto_es" data-max-file-size="2M" />

        											</div>
        										</div>
        									</div>


        								</div>
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
