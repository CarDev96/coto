        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Personal</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Total Personal</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado del personal de seguridad.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Turno</th>
                                                <th>Domicilio</th>                                                   
                                                <th>Correo</th>                                                   
                                                                                               
                                               

                                            </tr>
                                        </thead>

                                        <tfoot>
                                        <tr>
                                        <th>#</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Turno</th>
                                                <th>Domicilio</th>                                                   
                                                <th>Correo</th>                                                      
                                                                                               
                                               

                                            </tr>

                                        </tfoot>                                        
                                        <tbody>
                                        <?php if(!empty($info_personal)):?>
                                    <?php foreach($info_personal as $info_personal):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_personal->id_guardia;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_personal->nombre_g;?></td>

                                            <td><?php echo $info_personal->telefono_g;?></td>                                           

                                            <td><?php echo $info_personal->turno_g;?></td>    
                                            

                                            <td><?php echo $info_personal->domicilio_g;?></td>                                                    

                                            <td><?php echo $info_personal->email_g;?></td>                                                    

                                               
                                            
                                            
                                            
                                          
                                                                                 
                                          
                                         

                                          
                                          
                                
          
                                            
                      

                                       
       
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