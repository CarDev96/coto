        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Meses 2019</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Edo. cuenta</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los meses 2019.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th style="text-align:center;"># Mes</th>
                                                <th style="text-align:center;">Nombre mes</th>
                                                
                                             
                                                                                                   
                                                                                               
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th style="text-align:center;">Ver estado de cuenta</th>
                                                <?php endif;?>                                                

                                            </tr>
                                        </thead>

                                                                 
                                        <tbody>
                                        <?php if(!empty($info_mes)):?>
                                    <?php foreach($info_mes as $info_mes):?>
                                        <tr>
                                          <td align="center">
                                            
                           
                                              
                                          <?php echo $info_mes->id_mes;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td align="center"><?php echo $info_mes->nombre_mes;?></td>


                                            
                                            
											<?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                                <a href="<?php echo base_url(); ?>Administrador/Finanzas/estadoc/<?php echo $info_mes->id_mes; ?>" class="btn btn-primary btn-circle btn-small"><i class="fa fa-eye"></i></a>




                                                            </div>



                                                        </td>
                                                        <?php endif;?>
                                                          
                                                                                 
                                          
                                         

                                          
                                          
                                
          
                                            
                      

                                       
       
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
