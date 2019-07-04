        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Registro de Ingresos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Nuevo Ingreso</li>
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
                                <h4 class="m-b-0 text-white">Registrar nuevo ingreso</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>Principal/Ingresos/nuevo">
                                    <div class="form-body">
                                     
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Selecciona la casa:</label>
                                                    <div class="col-md-3">
                                                    <select class="select2 form-control custom-select" name="id_casa" id="txtCasa" style="width: 100%; height:36px;">
                                    <option>Casa Nº</option>
                                    <?php foreach($info_casas as $info_casas):?>
                                    
                                        <option value="<?php echo $info_casas->id_casa;?>" data-casa="<?php echo $info_casas->id_casa;?>" data-responsable="<?php echo $info_casas->responsable;?>" data-direccion="<?php echo $info_casas->direccion;?>" data-habitada="<?php echo $info_casas->habitada;?>" data-estatus="<?php echo $info_casas->estatus_pago;?>" >
                                            <?php echo $info_casas->id_casa ?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        </div>
                                      

                                        <h3 class="box-title">Información del Hogar</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">#:</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="n_casa" id="n_casa" value="" disabled>
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
                                                    <label class="control-label text-right col-md-3">Direccion:</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="direccion" id="direccion" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Habitada:</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="habitada" id="habitada" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->

                                        <div class="row">
                                      
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Estatus de pago:</label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="pago" id="pago" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->                                        
                                                                             




                                        <!--/row-->
                                        <h3 class="box-title">Ingresos</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Concepto:</label>
                                                    <div class="col-md-9">
                                                    <select class="select2 form-control custom-select" id="txtconcepto" name="txtconcepto" style="width: 100%; height:36px;">
                                    <option>-Tipo Ingreso-</option>
                                    <?php foreach($info_concepto as $info_concepto):?>
                                    
                                        <option value="<?php echo $info_concepto->id_concep_in;?>" data-monto1="<?php echo $info_concepto->monto_f;?>">
                                            <?php echo $info_concepto->name ?>
                                        </option>

                                        <?php endforeach;?>
                                </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Fecha en que se paga:</label>
                                                    <div class="col-md-9">

                                                        <input type="text" class="form-control" name="fecha_ingreso" placeholder="" id="mdate">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->                                            

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Monto:</label>
                                                    <div class="col-md-9">

                                                
                                                <input id="tch2" type="text" value="0" name="tch2" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> 

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Fecha inicio de pago:</label>
                                                    <div class="col-md-9">

                                                        <input type="text" class="form-control" name="fecha_inicio_pago" placeholder="" id="mdate2">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->



                                            
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Descripción:</label>
                                                    <div class="col-md-9">

                                                 <textarea class="form-control form-material" name="descripcion_in" rows="5"></textarea>
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