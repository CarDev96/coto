        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de casas</h3>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de todas las casas registradas en el coto</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="zero_config" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Número de casa</th>
                                                <th>Responsable</th>
                                                <th>Dirección</th>
                                                <th>Habitada</th >
                                                <th>Estatus Pago</th>
                                                <th>Ver perfil</th>                                                
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                <?php if(!empty($info_casas)):?>
                                    <?php foreach($info_casas as $info_casas):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_casas->id_casa;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_casas->responsable;?></td>
                                            
                                            
                                            
                                            <td><?php echo $info_casas->direccion;?></td>
                                            
                                            <td><?php echo $info_casas->habitada;?></td>
                                          
                                         <?php if($info_casas->estatus_pago == 'Deudor'):?>
                                          
                                          <td><span class="label label-danger"><?php echo $info_casas->estatus_pago;?></span></td>
                                          
                                          <?php endif;?>

                                          <?php if($info_casas->estatus_pago == 'Pago Mensual'):?>
                                          
                                          <td><span class="label label-warning"><?php echo $info_casas->estatus_pago;?></span></td>
                                          
                                          <?php endif;?>

                                          <?php if($info_casas->estatus_pago == 'Pago Anual'):?>
                                          
                                          <td><span class="label label-success"><?php echo $info_casas->estatus_pago;?></span></td>
                                          
                                          <?php endif;?>                                          

                                          <?php if($info_casas->estatus_pago == ''):?>
                                          
                                          <td></td>
                                          
                                          <?php endif;?>                                          
                    
                                          
                                          <td align="center">
                                            
                                              
                                            <div class="btn-group">
                                         
                                              
                                              <a href="<?php echo base_url();?>Principal/Fraccionamientos/perfil/<?php echo $info_casas->id_casa; ?>" class="btn btn-primary btn-circle btn-small"><i class="fa fa-eye"></i></a>
                                              
                                              
                                              
                                              
                                            </div>                                                 
                                                                     
                      
                                                                      
                                                                  </td>                                           

                                         
                                            <td>
                                            
                                              
                      <div class="btn-group">
                   
                        
                        <a href="<?php echo base_url();?>Principal/Paciente/edit/<?php echo $info_casas->id_casa; ?>" class="btn btn-warning btn-update btn-sm btn-small"><i class="fa fa-edit"></i></a>
                        
                        <a href="#" data-id="<?php echo $info_casas->id_casa;?>" id="eliminar_pac" class="btn btn-danger btn-remove btn-sm btn-small swal-btn-warning"><i class="fa fa-remove"></i></a>
                        
                        
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