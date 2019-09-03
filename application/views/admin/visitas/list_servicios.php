        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de visitas por casa</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Visitas</li>
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

                                <h6 class="card-subtitle">Se muestra un listado de las visitas.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Código QR</th>
                                                <th>Nombre visitante</th>
                                                <th>Fecha de visita</th>
                                                <th>Marca vehículo</th>
                                                <th>Placas vehículo</th>
                                                <th>Tipo de acceso</th>
                                                <th>Color vehículo</th>
                                                <th>Acompañantes:</th>
                                                <th>Tipo de visita:</th>
                                                <th>Código de acceso:</th>
                                                <th>Foto automóvil:</th>
                                                <th>Foto INE:</th>
                                                <th>Confirmar asistencia</th>


                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php if (!empty($info_visita3)) : ?>
                                                <?php foreach ($info_visita3 as $info_visita) : ?>
                                                    <tr>
                                                        <td>


                                                            <a href="<?= base_url() ?>assets/images/QR/qr_<?php echo $info_visita->codigo_a; ?>.png" class="example-image-link" data-lightbox="example-1"><img src="<?= base_url() ?>assets/images/QR/qr_<?php echo $info_visita->codigo_a; ?>.png" class="img-fluid" style=" width: 50px; height: 50px;"> </a>







                                                        </td>
                                                        <td><?php echo $info_visita->nombre_visitante; ?></td>

                                                        <td><?php echo $info_visita->fecha_visita; ?></td>

                                                        <td><?php echo $info_visita->marca_auto; ?></td>


                                                        <td><?php echo $info_visita->placas_auto; ?></td>

                                                        <td><?php echo $info_visita->name_tipo_vi; ?></td>

                                                        <td><span style="background: <?php echo $info_visita->color_auto ?>;"><?php echo $info_visita->color_auto ?></span></td>

                                                        <td><?php echo $info_visita->max_persona; ?></td>

                                                        <td><?php echo $info_visita->name_v; ?></td>


														<td><?php echo $info_visita->codigo_a; ?></a></td>

                                                        <td>


                                                            <a href="<?= base_url() ?>assets/images/auto/<?php echo $info_visita->foto_auto; ?>" class="example-image-link" data-lightbox="example-1"><img src="<?= base_url() ?>assets/images/auto/<?php echo $info_visita->foto_auto; ?>" class="img-fluid" style=" width: 80px; height: 50px;"> </a>







														</td>	
														
                                                        <td>


                                                            <a href="<?= base_url() ?>assets/images/ine/<?php echo $info_visita->foto_ine; ?>" class="example-image-link" data-lightbox="example-1"><img src="<?= base_url() ?>assets/images/ine/<?php echo $info_visita->foto_ine; ?>" class="img-fluid" style=" width: 80px; height: 50px;"> </a>







                                                        </td>															

                                                        <td align="center">


                                                            <div class="btn-group">


                                                                <a href="<?php echo base_url(); ?>Principal/Visitas/confirmar/<?php echo $info_visita->id_visita; ?>" class="btn btn-primary btn-circle btn-small"><i class="fa fa-check"></i></a>




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
