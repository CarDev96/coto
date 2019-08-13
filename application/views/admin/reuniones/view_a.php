        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de asistencia</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Reuniones</li>
                        <li class="breadcrumb-item active">Lista asistencia</li>
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
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
  
                        <div class="card">
							<div class="card-body"> <h4 class="text-muted">Título del evento : </h4><h6><?php echo $info_e->tit_aviso; ?></h6>
							<small class="text-muted p-t-30 db">Total de asistentes</small>
                                <h6><?php echo $count_asis->a; ?></h6>							

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Lista de asistencia</a> </li>



                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">

							<div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">

                                        
                                        <div class="table-responsive m-t-40">
                                            <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre de residente</th>
                                                        <th>Teléfono de residente</th>
                                                        <th>Hora de llegada</th>
                                                        


                                                    </tr>
                                                </thead>

                                                <tfoot>
                                                    <tr>
													<th>Nombre de residente</th>
                                                        <th>Teléfono de residente</th>
                                                        <th>Hora de llegada</th>
                                                        
                                                    </tr>
												</tfoot>
												<tbody>
                                            <?php if (!empty($info_asistentes)) : ?>
                                                <?php foreach ($info_asistentes as $info_asistentes) : ?>
                                                    <tr>
                                                        <td style="text-align:center;">



                                                            <?php echo $info_asistentes->responsable; ?>






                                                        </td>
                                                        <td style="text-align:center;"><?php echo $info_asistentes->telefono; ?></td>



                                                        <td style="text-align:center;"><?php echo $info_asistentes->hora_asistencia; ?></td>

                                                       










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
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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
        </div>
        <!-- /.modal -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
