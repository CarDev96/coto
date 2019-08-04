        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Recibo de pago</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Ingresos</li>
                        <li class="breadcrumb-item active">Recibo</li>
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
                    <div class="col-md-12">
                    <div class="text-right">
                    <a href="<?php echo base_url();?>Principal/Ingresos"class="btn btn-danger btn-remove btn-sm btn-small swal-btn-warning"><i class="fa fa-hand-o-left"></i></a>                                  
                    <a href="<?php echo base_url();?>Principal/Ingresos/add"class="btn btn-danger btn-remove btn-sm btn-small swal-btn-info">Realizar otro pago</i></a>                                                      
                    
                                        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i>Imprimir</span> </button>
                                    </div>                        
                        <div class="card card-body printableArea">
                            <h3><b>                            <img src="<?php echo base_url(); ?>assets/images/coto2.png" style="width:248px;height:59px;" alt="homepage" class="dark-logo" /></b> <span class="pull-right" style="margin-top:25px;">Folio :<?php echo $info_recibo->id_ingreso ?></span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">Recibí de:</b></h3>
                                            <p class="text-muted m-l-5"><?php echo $info_recibo->responsable; ?>,
                                                <br /> <?php echo $info_recibo->direccion ?>,
                                                <br /> <?php echo $info_recibo->email; ?>,
                                                <br /> <?php echo $info_recibo->telefono ?></p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>Concepto:</h3>

                                            <p class="text-muted m-l-30"><?php echo $info_recibo->name ?>,
                                                <br />Casa # <?php echo $info_recibo->id_casa ?>,

                                            </p>
                                            <p class="m-t-30"><b>Fecha de pago :</b> <i class="fa fa-calendar"></i> <?php $fechaf = $info_recibo->fecha_ingreso;
                                                                                                                    $newDate = date("d-m-Y", strtotime($fechaf));
                                                                                                                    echo $newDate; ?></p>

                                            <?php if($info_recibo->fecha_inicio <>'1970-01-01'):?>                                                                                                                    
                                            <p><b>Fecha de inicio de pago :</b> <i class="fa fa-calendar"></i> <?php $fechaf = $info_recibo->fecha_inicio;
                                                                                                                $newDate = date("d-m-Y", strtotime($fechaf));
                                                                                                                echo $newDate; ?></p>
                                                    <?php endif;?>                                                                                                                   
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Casa #</th>
                                                    <th class="text-center">Concepto</th>
                                                    <th class="text-center">Descripción</th>
                                                    <?php if($info_recibo->fecha_inicio <>'1970-01-01'):?>
                                                    
                                                    
                                                    
                                                    <th class="text-center">Fecha correspondiente</th>
                                                    <?php endif;?>                                                    
                                                    
                                                    <th class="text-center">Monto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center"><?php echo $info_recibo->id_casa; ?></td>
                                                <td class="text-center"><?php echo $info_recibo->name; ?></td>
                                                <td class="text-center"><?php echo $info_recibo->descripcion_ingreso; ?></td>
                                                <?php if($info_recibo->fecha_inicio <> '1970-01-01'):?>                                                
                                                <td class="text-center"><?php $fechaf = $info_recibo->fecha_inicio;
                                                                                                                $newDate = date("d-m-Y", strtotime($fechaf));
                                                                                                                echo $newDate; ?></td>
                                                    <?php endif;?>                                                                                                                
                                                                                                               
                                                <td class="text-center"><?php echo $info_recibo->ingreso; ?></td>



                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        
                                        
                                        <h3><b>Total :</b> $<?php echo $info_recibo->ingreso ?></h3>
                                    </div>
                                    <div class="pull-left m-t-30 text-left">
                                        
                                        
                                       <p>__________________________</p>
                                        <b><p style="margin-left: 86px;margin-right:auto;">Firma</p></b> 

                                    </div>                                    
                                    <div class="clearfix"></div>
                                    <hr>

                                    
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
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