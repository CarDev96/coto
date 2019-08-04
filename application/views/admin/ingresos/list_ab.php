        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Abonos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Abonos Total</li>
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

                                <h6 class="card-subtitle">Se muestra un listado de los abonos.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th align="center"># casa</th>
                                                <th align="center">Monto abono</th>
                                                <th align="center">Fecha correspondiente</th>
                                                
                                                <th align="center">Estatus</th>
                                                
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th align="center">Registrar otro abono</th>
                                                <th align="center">Liquidar</th>
                                                <?php endif;?>                                                
                                                


                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if (!empty($info_abonos)) : ?>
                                                <?php foreach ($info_abonos as $info_total) : ?>
                                                    <tr>
                                                        <td align="center">



                                                            <?php echo $info_total->id_casa; ?>






                                                        </td>
                                                        <td align="center"><?php echo $info_total->monto_abono; ?></td>

                                                        <td align="center"><?php echo $info_total->fecha_inicio; ?></td>
                                                        
                                                        <td align="center"><?php echo $info_total->estatus_p; ?></td>

                                                        

                                                        <?php if($permisos->insercion==1):?>

                                                        <td align="center">


                                                            <div class="btn-group">


                                                            <a class="btn btn-info btn-update btn-sm btn-small" data-toggle="modal" data-target="#abono" onclick="abonar(<?php echo $info_total->id_abono; ?>)"><i class="fa fa-plus"></i></a>




                                                            </div>



                                                        </td>

                                                        <td align="center">


                                                            <div class="btn-group">


                                                            <a class="btn btn-success btn-update btn-sm btn-small" data-toggle="modal" data-target="#verticalcenter" onclick="liquidar2(<?php echo $info_total->id_abono; ?>)"><i class="fa fa-edit"></i></a>




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
            
            <div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">Liquidar mensualidad</h4>
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
            <div id="abono" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">Abonar mensualidad</h4>
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
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->