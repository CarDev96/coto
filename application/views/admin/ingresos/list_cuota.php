        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Ingresos por Cuota Mensual</h3>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los ingresos mensuales o anuales de cada casa.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Número de casa</th>
                                                <th>Responsable</th>
                                                <th>Tipo de pago</th>
                                                <th>Fecha de pago</th>  
                                                <th>Vencimiento de pago</th>                                                  
                                                <th>Monto</th>                                                
                                               

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Total ingreso por cuota</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>$<?php echo $info_sum->a;?></th>
                                            </tr>
                                        </tfoot>                                        
                                        <tbody>
                                        <?php if(!empty($info_cuota)):?>
                                    <?php foreach($info_cuota as $info_cuota):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_cuota->id_casa;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_cuota->responsable;?></td>

                                            <td><?php echo $info_cuota->name;?></td>                                           

                                            <td><?php echo $info_cuota->fecha_inicio;?></td>    
                                            
                                            <td><?php echo $info_cuota->vencimiento_suscrip;?></td>                                                

                                            <td>$<?php echo $info_cuota->ingreso;?></td>                                                    

                                               
                                            
                                            
                                            
                                          
                                                                                 
                                          
                                         

                                          
                                          
                                
          
                                            
                      

                                       
       
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>


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