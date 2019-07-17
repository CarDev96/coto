        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Asignación de Permisos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Nuevo Permiso</li>
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
                                <h4 class="m-b-0 text-white">Asignar nuevo permiso</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>Administrador/Permisos/nuevo">
                                    <div class="form-body">
                                     
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Selecciona el Rol:</label>
                                                    <div class="col-md-5">
                                                    <select class="select2 form-control custom-select" name="id_rol" id="txtCasa" style="width: 100%; height:36px;">
                                    <option value="1">-- Selecciona --</option>
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
                                      

                                        
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Selecciona el Menú:</label>
                                                    <div class="col-md-5">
                                                    <select class="select2 form-control custom-select" name="id_menu" id="txtCasa" style="width: 100%; height:36px;">
                                    <option value="1">-- Selecciona --</option>
                                    <?php foreach($info_menu as $info_menu):?>
                                    
                                        <option value="<?php echo $info_menu->id_menu;?>" >
                                            <?php echo $info_menu->nombre_menu ?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
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
                                        <div class="col-sm-3">
                                                <div class="demo-switch-title">Leer:</div>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" id="leer" name="leer" value="1" ><span class="lever switch-col-black"></span>Si</label>
                                                </div>
                                            </div> 

                                            <div class="col-sm-3">
                                                <div class="demo-switch-title">Agregar:</div>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" id="agrega" name="agrega" value="1" ><span class="lever switch-col-blue"></span>Si</label>
                                                </div>
                                            </div>  
                                            
                                            <div class="col-sm-3">
                                                <div class="demo-switch-title">Editar:</div>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" id="edita" name="edita" value="1" ><span class="lever switch-col-amber"></span>Si</label>
                                                </div>
                                            </div>   
                                            
                                            <div class="col-sm-3">
                                                <div class="demo-switch-title">Eliminar:</div>
                                                <div class="switch">
                                                    <label>No
                                                        <input type="checkbox" id="elimina" name="elimina" value="1" ><span class="lever switch-col-red"></span>Si</label>
                                                </div>
                                            </div>                                              
                                          

                                        </div>
              
 
                                    </div>
                                    <br>
                                    <br>
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