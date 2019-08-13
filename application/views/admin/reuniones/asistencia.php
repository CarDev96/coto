  <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Asistencias</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Asistencia</li>
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
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-subtitle">Se muestra un listado de todas las casas registradas en el coto</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Número de casa</th>
                                                <th style="text-align:center;">Responsable</th>
                                                <th style="text-align:center;">Dirección</th>
                                        		<?php if($permisos->insercion==1):?>
                                                <th style="text-align:center;">¿Asistió?</th>
                                                <?php endif;?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($info_casas)) : ?>
                                                <?php foreach ($info_casas as $info_casas) : ?>
                                                    <tr>
                                                        <td style="text-align:center;">



                                                            <?php echo $info_casas->id_casa; ?>






                                                        </td>
                                                        <td style="text-align:center;"><?php echo $info_casas->responsable; ?></td>



                                                        <td style="text-align:center;"><?php echo $info_casas->direccion; ?></td>

                                                       


                                                        <?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                                <a class="btn btn-dark btn-update btn-sm btn-small" data-toggle="modal" data-target="#asistencia" onclick="ModalAsis(<?php echo $info_casas->id_casa; ?>)"><i class="fa fa-check"></i></a>

                                                                




                                                            </div>



                                                        </td>
                                                        <?php endif;?>









                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- sample modal content -->
            <div id="asistencia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">Registrar asistencia</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" style="height: 200px;width: 100%;" id="content">



                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
