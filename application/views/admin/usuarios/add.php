        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Registro de Usuarios</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Nuevo Usuario</li>
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
                                <h4 class="m-b-0 text-white">Registrar nuevo usuario</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>Administrador/Usuarios/nuevo">
                                    <div class="form-body">
                                     
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Selecciona la casa:</label>
                                                    <div class="col-md-3">
                                                    <select class="select2 form-control custom-select" name="id_casa" id="txtCasa" style="width: 100%; height:36px;">
                                    <option value="1">Casa Nº</option>
                                    <?php foreach($info_casas as $info_casas):?>
                                    
                                        <option value="<?php echo $info_casas->id_casa;?>" data-casa="<?php echo $info_casas->email;?>" data-responsable="<?php echo $info_casas->responsable;?>" data-direccion="<?php echo $info_casas->direccion;?>" data-habitada="<?php echo $info_casas->habitada;?>" data-estatus="<?php echo $info_casas->estatus_pago;?>" >
                                            <?php echo $info_casas->id_casa ?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        </div>
                                      

                                        <h3 class="box-title">Información de usuario</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Usuario:</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="username" id="n_casa" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Propietario:</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="propietario" id="propietario" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Contraseña:</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="pass" id="pass" value="cotopriv12" readonly>
                                                    <small class="form-control-feedback">Contraseña por defecto, el usuario deberá cambiarla en su perfil.</small>                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                         
                                        </div>
                                        <!--/row-->

                              




                                        <!--/row-->
                                        <h3 class="box-title">Asignar permisos</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Tipo de usuario:</label>
                                                    <div class="col-md-9">
                                                    <select class="select2 form-control custom-select" id="txtconcepto" name="rol" style="width: 100%; height:36px;">
                                    <option>-Tipo usuario-</option>
                                    <?php foreach($info_rol as $info_rol):?>
                                    
                                        <option value="<?php echo $info_rol->id_rol;?>" >
                                            <?php echo $info_rol->name_rol ?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
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