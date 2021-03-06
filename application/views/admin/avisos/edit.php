        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Editar Avisos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Editar aviso</li>
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
                                <h4 class="m-b-0 text-white">Editar Aviso</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>Principal/Avisos/update">
                                <input type="hidden" value="<?php echo $editar->id_aviso ?>" name="id_aviso" id="id_aviso">    
                                <div class="form-body">
                             

                                        <div class="row">
                    
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Fecha en que publica:</label>
                                                    <div class="col-md-9">

                                                        <input type="text" class="form-control" name="fecha_anuncio" value="<?php echo $editar->fecha_aviso; ?>" placeholder="" id="mdate" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->    
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Mensaje:</label>
                                                    <div class="col-md-9">

                                                        <textarea class="form-control form-material" name="mensaje_anuncio" rows="2"><?php echo $editar->mensaje_anuncio ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                         
                                        </div>
                                        <!--/row-->

                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Fecha en que se retira el aviso:</label>
                                                    <div class="col-md-9">

                                                        <input type="text" class="form-control" name="fecha_retiro" placeholder="" value="<?php echo $editar->fecha_retiro?>" id="mdate2" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span--> 
                         
                                        </div>
                                        <!--/row-->
                              




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