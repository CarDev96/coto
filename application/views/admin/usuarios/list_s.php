        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de usuarios externos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Total usuarios externos</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los usuarios externos del sistema.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Id usuario</th>
                                                <th>Usuario</th>
                                                <th>Contraseña</th>
                                                <th>Tipo de usuario</th>
                                                <th>Descripcion permisos</th>                                                   
                                                                                               
                                               

                                            </tr>
                                        </thead>

                                        <tfoot>
                                        <tr>
                                            <th>Id usuario</th>
                                                <th>Usuario</th>
                                                <th>Contraseña</th>
                                                <th>Tipo de usuario</th>
                                                <th>Descripcion permisos</th>                                                   
                                                                                               
                                               

                                            </tr>

                                        </tfoot>                                        
                                        <tbody>
                                        <?php if(!empty($info_user2)):?>
                                    <?php foreach($info_user2 as $info_user):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_user->id_usuario;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_user->username;?></td>

                                            <td><?php echo $info_user->pass;?></td>                                           

                                            <td><?php echo $info_user->name_rol;?></td>    
                                            

                                            <td><?php echo $info_user->descripcion_rol;?></td>                                                    

                                               
                                            
                                            
                                            
                                          
                                                                                 
                                          
                                         

                                          
                                          
                                
          
                                            
                      

                                       
       
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