        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de avisos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Avisos Total</li>
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

                                <h6 class="card-subtitle">Se muestra un listado de los avisos creados.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Mensaje</th>
                                                <th>Fecha de anuncio</th>

                                                <th>Opciones</th>


                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php if (!empty($info_avisos)) : ?>
                                                <?php foreach ($info_avisos as $info_avisos) : ?>
                                                    <tr>
                                                    
                                                    <td><?php echo $info_avisos->id_aviso; ?></td>

                                                        <td><?php echo $info_avisos->mensaje_anuncio; ?></td>

                                                        <td><?php echo $info_avisos->fecha_aviso; ?></td>



                                                        <td>


                                                            <div class="btn-group">




                                                            <a href="<?php echo base_url();?>Principal/Avisos/actualizar/<?php echo $info_avisos->id_aviso; ?>" class="btn btn-warning btn-update btn-sm btn-small"><i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url();?>Principal/Avisos/eliminar/<?php echo $info_avisos->id_aviso; ?>" class="btn btn-danger btn-update btn-sm btn-small"><i class="fa fa-remove"></i></a>




                                                            </div>



                                                        </td>















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

            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->