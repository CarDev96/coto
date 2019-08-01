        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Registro de personal de seguridad</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Nuevo personal</li>
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
                                <h4 class="m-b-0 text-white">Registrar nuevo personal</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url(); ?>Principal/Personal/nuevo" method="post">
                                    <div class="form-body">

                                        <div class="row p-t-20">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Nombre</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="" name="nombre_g" required>
                                                    <small class="form-control-feedback">Especifica el nombre completo del guardia de seguridad.</small> </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Teléfono</label>
                                                    <input type="text" class="form-control international-inputmask" name="telefono_g" id="international-mask" required>
                                                    <small class="form-control-feedback">Ejem. +5213384219166.</small> </div>
                                            </div>

                                            <!--/span-->
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Turno</label>
                                                    <input type="text" id="lastName" class="form-control" placeholder="" name="turno_g" required>
                                                    <small class="form-control-feedback">Especificar turno asignado</small> </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Correo Electrónico</label>
                                                    <input type="email" id="firstName" class="form-control" placeholder="" name="email_g" required>
                                                    <small class="form-control-feedback">Ejem. a@gmail.com</small> </div>
                                            </div>
                                        </div>
                                        <!--/row-->




                                        <br>
                         


                                        <h3 class="box-title m-t-40">Datos de domicilio</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12 ">
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control" name="domicilio_g" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!--/row-->
                                        <div class="row">

                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Registrar</button>

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