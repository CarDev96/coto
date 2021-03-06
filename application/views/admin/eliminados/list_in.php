        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de ingresos eliminados</h3>
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

                                <h6 class="card-subtitle">Se muestra un listado de los ingresos eliminados.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id ingreso</th>
                                                <th>Tipo de ingreso</th>
                                                <th>Motivo eliminación</th>
                                                <th>Fecha de eliminación</th>
                                                                                              
                                                <th>Eliminado por</th>
                                                                                           
                                             

                                            </tr>
                                        </thead>

                               
                                        <tbody>
                                            <?php if (!empty($info_total)) : ?>
                                                <?php foreach ($info_total as $info_total) : ?>
                                                    <tr>
                                                        <td>



                                                            <?php echo $info_total->id_ingreso; ?>






                                                        </td>
                                                        <td><?php echo $info_total->name; ?></td>

                                                        <td><?php echo $info_total->motivo; ?></td>

														<td><?php echo $info_total->fecha_eliminado; ?></td>
														
                                                        <td><?php echo $info_total->usuario_elimina; ?></td>

                                      
















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
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
