        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Conceptos de ingresos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Concepto ingresos</li>
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

                                <h6 class="card-subtitle">Se muestra un listado de los conceptos de ingresos.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id concepto</th>
                                                <th>Tipo de ingreso</th>
                                                <th>Descripción</th>
                                                <th>Monto</th>
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th>Actualizar monto</th>
                                                <?php endif;?>                                                
                                                


                                            </tr>
                                        </thead>

                              
                                        <tbody>
                                            <?php if (!empty($info_con)) : ?>
                                                <?php foreach ($info_con as $info_total) : ?>
                                                    <tr>
                                                        <td>



                                                            <?php echo $info_total->id_concep_in; ?>






                                                        </td>
                                                        <td><?php echo $info_total->name; ?></td>

                                                        <td><?php echo $info_total->descripcion; ?></td>

                                                        <td>$<?php echo $info_total->monto_f; ?></td>

                                                        <?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                            <a class="btn btn-info btn-update btn-sm btn-small" data-toggle="modal" data-target="#concepto" onclick="concepto(<?php echo $info_total->id_concep_in; ?>)"><i class="fa fa-plus"></i></a>




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

            <!-- End Container fluid  -->
            
            <div id="concepto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">Actualizar monto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" style="overflow-y: auto;height: 358px;width: 100%;" id="content">

                        </div>

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->              

            <!-- ============================================================== -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->