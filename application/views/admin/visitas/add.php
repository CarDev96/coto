        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Registro de Visitas</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Nueva visita</li>
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
                                <h4 class="m-b-0 text-white">Registrar nueva visita</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>Principal/Visitas/nuevo">
                                

                                <div class="form-body">
                                     
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Tipo de visita:</label>
                                                    <div class="col-md-5">
                                                    <select class="select2 form-control custom-select" name="id_tipo_v" id="txt_visita" style="width: 100%; height:36px;">
                                    <option value="1">-- Selecciona --</option>
                                    <?php foreach($info_visita as $info_visita):?>
                                    
                                        <option value="<?php echo $info_visita->id_tipo_v;?>">
                                            <?php echo $info_visita->name_v;?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Tipo de acceso:</label>
                                                    <div class="col-md-5">
                                                    <select class="select2 form-control custom-select" name="id_tipo_vi" id="id_tipo_vi" style="width: 100%; height:36px;">
                                    <option value="1">-- Selecciona --</option>
                                    <?php foreach($info_tipo_vi as $info_tipo_vi):?>
                                    
                                        <option value="<?php echo $info_tipo_vi->id_tipo_vi;?>">
                                            <?php echo $info_tipo_vi->name_tipo_vi;?>
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
                                                    <label class="control-label text-right col-md-4">Numero de casa:</label>
                                                    <div class="col-md-6">
                                                    <input type="text" class="form-control" name="id_casa" id="id_casa" value="<?php echo $this->session->userdata("id_casa") ?>" readonly required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Nombre del visitante:</label>
                                                    <div class="col-md-6">
                                                    <input type="text" class="form-control" name="nombre_visitante" id="nombre_visitante">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Fecha de visita:</label>
                                                    <div class="col-md-6">

                                                        <input type="text" class="form-control" name="fecha_visita" placeholder="" id="mdate">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->   
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Acompañantes:</label>
                                                    <div class="col-md-6">
                                                    <input id="tch2" type="text" value="0" name="max_persona" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->

                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Días disponible:</label>
                                                    <div class="col-md-6">

                                                    <input id="tch2" type="text" value="0" name="dias_d" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->   

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Télefono:</label>
                                                    <div class="col-md-6">
                                                    <input type="text" class="form-control international-inputmask" name="telefono_v" id="international-mask" >
                                                    </div>
                                                </div>
                                            </div>                                            
                                    
                                        </div>
                                        <!--/row-->   
                                        <hr>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Marca vehículo:</label>
                                                    <div class="col-md-6">

                                                    <select class="select2 form-control custom-select" name="marca_v" id="id_tipo_vi" style="width: 100%; height:36px;">
                                    <option value="1">-- Selecciona --</option>
                                    <?php foreach($info_marca as $info_marca):?>
                                    
                                        <option value="<?php echo $info_marca->marca_vehiculo;?>">
                                            <?php echo $info_marca->marca_vehiculo;?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->   

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Color vehículo:</label>
                                                    <div class="col-md-6">
                                                    <input type="text" class="colorpicker form-control" name="color_v" value="#7ab2fa" />
                                                    </div>
                                                </div>
                                            </div>                                            
                                    
                                        </div>
                                        <!--/row-->       
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Número de placas:</label>
                                                    <div class="col-md-6">

                                                        <input type="text" class="form-control" name="placas_v" placeholder="" id="placas_v">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->   

                                                                             
                                    
                                        </div>
                                        <!--/row-->                                               

                                                   
                                                                             




                                        <!--/row-->
                                        <h3 class="box-title">Acceso</h3>
                                        <hr class="m-t-0 m-b-40">

                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Código de accesso:</label>
                                                    <div class="col-md-5">

                                                    <input type="text" class="form-control" name="codigo_a" id="codigo_a" value="" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                 
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