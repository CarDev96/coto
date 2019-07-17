        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Permisos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Permisos</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los permisos del sistema.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Id permiso</th>
                                                <th>Menú</th>
                                                <th>Rol</th>
                                                <th>Leer</th>
                                                <th>Insertar</th>                                                   
                                                <th>Actualizar</th>                                                   
                                                <th>Eliminar</th>                                                   
                                                <th>Opciones</th>                                                   
                                                                                               
                                               

                                            </tr>
                                        </thead>

                                        <tfoot>
                                        <tr>
                                                <th>Id permiso</th>
                                                <th>Menú</th>
                                                <th>Rol</th>
                                                <th>Leer</th>
                                                <th>Insertar</th>                                                   
                                                <th>Actualizar</th>                                                   
                                                <th>Eliminar</th>                                                   
                                                <th>Opciones</th>    
                                                                                               
                                               

                                            </tr>

                                        </tfoot>                                        
                                        <tbody>
                                        <?php if(!empty($info_permisos)):?>
                                    <?php foreach($info_permisos as $info_permisos):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_permisos->id_permiso;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_permisos->nombre_menu;?></td>

                                            <td><?php echo $info_permisos->name_rol;?></td>                                           

                                            <td>


                                                <?php if($info_permisos->lectura == 0):?>

                                                <span class="fa fa-times"></span>

                                                <?php else:?>

                                                <span class="fa fa-check"></span>                                                

                                                <?php endif;?>
                                            
                                            
                                            </td>    
                                            

                                            <td>


                                                <?php if($info_permisos->insercion == 0):?>

                                                <span class="fa fa-times"></span>

                                                <?php else:?>

                                                <span class="fa fa-check"></span>                                                

                                                <?php endif;?>
                                            
                                            
                                            </td>                                                    
                                            <td>


                                                <?php if($info_permisos->actualizar == 0):?>

                                                <span class="fa fa-times"></span>

                                                <?php else:?>

                                                <span class="fa fa-check"></span>                                                

                                                <?php endif;?>
                                            
                                            
                                            </td>     
                                            <td>


                                                <?php if($info_permisos->borrar == 0):?>

                                                <span class="fa fa-times"></span>

                                                <?php else:?>

                                                <span class="fa fa-check"></span>                                                

                                                <?php endif;?>
                                            
                                            
                                            </td>        


                                                        <td align="center">


                                                            <div class="btn-group">


                                                                <a class="btn btn-warning btn-update btn-sm btn-small" data-toggle="modal" data-target="#verticalcenter" onclick="mostrarModal(<?php echo $info_permisos->id_permiso; ?>)"><i class="fa fa-edit"></i></a>

                                                                <a data-id="<?php echo $info_permisos->id_permiso; ?>" id="eliminar_casa" class="btn btn-danger btn-remove btn-sm btn-small swal-btn-warning"><i class="fa fa-remove"></i></a>

                                                                


                                                            </div>



                                                        </td>                                                    

                                               
                                            
                                            
                                            
                                          
                                                                                 
                                          
                                         

                                          
                                          
                                
          
                                            
                      

                                       
       
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