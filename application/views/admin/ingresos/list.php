        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Ingresos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Ingresos Total</li>
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

                                <h6 class="card-subtitle">Se muestra un listado de los ingresos.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id ingreso</th>
                                                <th># Casa</th>
                                                <th>Tipo de ingreso</th>
                                                <th>Descripción de ingreso</th>
                                                <th>Fecha de pago</th>
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th>Imprimir recibo</th>
                                                <?php endif;?>                                                
                                                <th>Monto</th>
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th>Eliminar</th>
                                                <?php endif;?>  

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Total ingreso</th>
                                                <th></th>
                                                <th></th>

                                                <th></th>
                                                <?php if($permisos->insercion==1):?>                                                                                                                                                
                                                <th></th>
                                                <?php endif;?>
                                                <th>$<?php echo $info_sum_total->a; ?></th>
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th></th>
                                                <?php endif;?>                                                  
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php if (!empty($info_total)) : ?>
                                                <?php foreach ($info_total as $info_total) : ?>
                                                    <tr>
                                                        <td>



                                                            <?php echo $info_total->id_ingreso; ?>






                                                        </td>
                                                        <td><?php echo $info_total->id_casa; ?></td>
                                                        <td><?php echo $info_total->name; ?></td>

                                                        <td><?php echo $info_total->descripcion_ingreso; ?></td>

                                                        <td><?php echo $info_total->fecha_ingreso; ?></td>

                                                        <?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                                <a href="<?php echo base_url(); ?>Principal/Ingresos/recibo/<?php echo $info_total->id_ingreso; ?>" class="btn btn-primary btn-circle btn-small"><i class="fa fa-eye"></i></a>




                                                            </div>



                                                        </td>
                                                        <?php endif;?>
                                                        <td>$<?php echo $info_total->ingreso; ?></td>

                                                        <?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                            <a  id="eliminar_ingreso" class="btn btn-danger btn-remove btn-sm btn-small swal-btn-warning" data-toggle="modal" data-target="#elim" onclick="eliminar(<?php echo $info_total->id_ingreso; ?>)"><i class="fa fa-remove"></i></a>




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
            <div id="elim" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">¿Está seguro?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" style="height: 190px;width: 100%;" id="content">

                        </div>

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->   
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
