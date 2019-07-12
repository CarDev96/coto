        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Registro de Habitaciones</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Nueva Casa</li>
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
                                <h4 class="m-b-0 text-white">Registrar Nueva Casa</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url(); ?>Principal/Fraccionamientos/nuevo" method="post">
                                    <div class="form-body">

                                        <div class="row p-t-20">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Responsable</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="" name="propietario" required>
                                                    <small class="form-control-feedback">Especifica el respondable de la casa.</small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Número de casa</label>
                                                    <input type="text" id="lastName" class="form-control" placeholder="" name="numero_casa" required>
                                                    <small class="form-control-feedback"> # Lote. </small> </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Teléfono</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="" name="telefono" required>
                                                    <small class="form-control-feedback">Ejem. 3384219166.</small> </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Correo Electrónico</label>
                                                    <input type="email" id="firstName" class="form-control" placeholder="" name="correo_casa" required>
                                                    <small class="form-control-feedback">Ejem. a@gmail.com</small> </div>
                                            </div>                                            
                                        </div>
                                        <!--/row-->



                                        <div class="row p-t-20">

                                            <div class="col-sm-3">
                                                <div class="demo-switch-title">¿Habitada?</div>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" name="habitada" id="habitada" value="si"><span class="lever switch-col-red"></span>Si</label>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="demo-switch-title">¿En renta?</div>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" id="renta" name="renta" value="si" disabled><span class="lever switch-col-red"></span>Si</label>
                                                </div>
                                            </div>                                                                                        

                                        </div>
                                        <!--/row-->
<br>
                                        <div clas="row m-t-20" id="datos_dueno">

                                        <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Propietario</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="" name="dueno">
                                                    <small class="form-control-feedback">Especifica el propietario de la casa.</small> 
                                                
                                                </div>
                                            </div>  
                                            
                                            <div class="col-sm-3" >
                                                <div class="form-group">
                                                    <label class="control-label">Teléfono</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="" name="telefono_dueno">
                                                    <small class="form-control-feedback">Ejem. 3384219166.</small> 
                                                
                                                </div>
                                            </div>                                          
                    
                                        </div>




                                        <h3 class="box-title m-t-40">Dirección</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12 ">
                                                <div class="form-group">
                                                    <label>Calle</label>
                                                    <input type="text" class="form-control" name="calle" required>
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