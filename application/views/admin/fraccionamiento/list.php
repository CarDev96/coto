        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de casas</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Lista casas</li>
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
                                                <th>Número de casa</th>
                                                <th>Responsable</th>
                                                <th>Dirección</th>
                                                <th>Habitada</th>
                                                <th>Estatus Pago</th>
                                                <th>Ver perfil</th>
                                                <?php if($permisos->insercion==1):?>
                                                <th>Opciones</th>
                                                <?php endif;?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($info_casas)) : ?>
                                                <?php foreach ($info_casas as $info_casas) : ?>
                                                    <tr>
                                                        <td>



                                                            <?php echo $info_casas->id_casa; ?>






                                                        </td>
                                                        <td><?php echo $info_casas->responsable; ?></td>



                                                        <td><?php echo $info_casas->direccion; ?></td>

                                                        <td><?php echo $info_casas->habitada; ?></td>

                                                        <?php if ($info_casas->estatus_pago == 'Deudor') : ?>

                                                            <td><span class="label label-danger"><?php echo $info_casas->estatus_pago; ?></span></td>

                                                        <?php endif; ?>

                                                        <?php if ($info_casas->estatus_pago == 'Pago Mensual') : ?>

                                                            <td><span class="label label-warning"><?php echo $info_casas->estatus_pago; ?></span></td>

                                                        <?php endif; ?>

                                                        <?php if ($info_casas->estatus_pago == 'Pago Anual') : ?>

                                                            <td><span class="label label-success"><?php echo $info_casas->estatus_pago; ?></span></td>

                                                        <?php endif; ?>

                                                        <?php if ($info_casas->estatus_pago == '') : ?>

                                                            <td></td>

                                                        <?php endif; ?>


                                                        <td align="center">


                                                            <div class="btn-group">


                                                                <a href="<?php echo base_url(); ?>Principal/Fraccionamientos/perfil/<?php echo $info_casas->id_casa; ?>" class="btn btn-primary btn-circle btn-small"><i class="fa fa-eye"></i></a>




                                                            </div>



                                                        </td>

                                                        <?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                                <a class="btn btn-warning btn-update btn-sm btn-small" data-toggle="modal" data-target="#verticalcenter" onclick="mostrarModal(<?php echo $info_casas->id_casa; ?>)"><i class="fa fa-edit"></i></a>

                                                                <a data-id="<?php echo $info_casas->id_casa; ?>" id="eliminar_casa" class="btn btn-danger btn-remove btn-sm btn-small swal-btn-warning"><i class="fa fa-remove"></i></a>




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
            <div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">Editar información</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" style="overflow-y: auto;height: 500px;width: 100%;" id="content">



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