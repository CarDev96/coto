        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Roles</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Total Roles</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los roles del sistema.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Id rol</th>
                                                <th>Nombre rol</th>
                                                
                                             
                                                <th>Descripcion permisos</th>                                                   
                                                                                               
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th>Actualizar rol</th>
                                                <?php endif;?>                                                

                                            </tr>
                                        </thead>

                                                                 
                                        <tbody>
                                        <?php if(!empty($info_rol)):?>
                                    <?php foreach($info_rol as $info_user):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_user->id_rol;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_user->name_rol;?></td>

                                            <td><?php echo $info_user->descripcion_rol;?></td>                                           

                                
                                            
                                            
                                            
											<?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                            <a class="btn btn-info btn-update btn-sm btn-small" data-toggle="modal" data-target="#rol" onclick="rol(<?php echo $info_user->id_rol; ?>)"><i class="fa fa-plus"></i></a>




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
            
            <div id="rol" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">Actualizar monto</h4>
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
 
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
