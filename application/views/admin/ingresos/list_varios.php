        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Ingresos Varios</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Lista Varios</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los ingresos varios de cada casa.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Número de casa</th>
                                                <th>Responsable</th>
                                                <th>Tipo de pago</th>
                                                <th>Fecha de pago</th>                                                   
                                                <th>Monto</th>                                                
                                               

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Total ingreso</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                                <th>$<?php echo $info_sum_varios->a;?></th>
                                            </tr>
                                        </tfoot>                                        
                                        <tbody>
                                        <?php if(!empty($info_varios)):?>
                                    <?php foreach($info_varios as $info_varios):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_varios->id_casa;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_varios->responsable;?></td>

                                            <td><?php echo $info_varios->name;?></td>                                           

                                            <td><?php echo $info_varios->fecha_ingreso;?></td>    
                                            

                                            <td>$<?php echo $info_varios->ingreso;?></td>                                                    

                                               
                                            
                                            
                                            
                                          
                                                                                 
                                          
                                         

                                          
                                          
                                
          
                                            
                      

                                       
       
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