        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Registro de Gastos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Nuevo Gasto</li>
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
                                <h4 class="m-b-0 text-white">Registrar nuevo gasto</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>Principal/Egresos/nuevo" enctype="multipart/form-data">
                                    <div class="form-body">




                                        <h3 class="box-title">Información de dinero en capital</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Total de ingresos:</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    <i class="fa fa-usd"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="n_casa" id="n_casa" value="<?php 
                                                            
                                                            $capital = $info_sum_total->a; 

                                                            if(!empty($info_egreso)){

                                                                $gastos = $info_egreso->b;

                                                                $total = $capital - $gastos;

                                                                echo $total;
                                                            }

                                                            else{

                                                                echo $capital;

                                                            }

                                                            
                                                            
                                                            
                                                            ?>" disabled>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>







                                        <!--/row-->
                                        <h3 class="box-title">Ingresos</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Tipo de pago:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="txt_gasto" id="txt_gasto">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Fecha de gasto:</label>
                                                    <div class="col-md-9">

                                                        <input type="text" class="form-control" name="fecha_gasto" placeholder="" id="mdate">
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


                                                        <input id="tch2" type="text" value="0" name="cantidad_gasto" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->


                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Descripción:</label>
                                                    <div class="col-md-9">

                                                        <textarea class="form-control form-material" name="descripcion_gasto" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->


                                        </div>
                                        <!--/row-->
                                        <div class="row">

                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Recibo de pago:</label>
                                                    <div class="col-md-9">


                                                    <input type="file" id="input-file-max-fs" class="dropify" name="recibo" data-max-file-size="2M" />

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