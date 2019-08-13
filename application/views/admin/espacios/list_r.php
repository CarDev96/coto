        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Espacios Comunes</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Espacios</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los espacios comunes.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Foto</th>
                                                <th>Nombre Espacio</th>
                                                <th>Descripción espacio</th>
                                                                                              
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th>Reservar</th>

                                                <?php endif;?>                                                 

                                            </tr>
                                        </thead>

                                        
                                        <tbody>
                                        <?php if(!empty($info_espacios)):?>
                                    <?php foreach($info_espacios as $info_espacios):?>
                                        <tr>
                                          <td>
                                            
                           
                                          <a href="<?=base_url()?>assets/images/espacios/<?php echo $info_espacios->foto_es;?>" class="example-image-link" data-lightbox="example-1"><img src="<?=base_url()?>assets/images/espacios/thumbs/<?php echo $info_espacios->foto_es;?>" class="img-responsive" style=" width: auto; height: auto;" >


                                            

                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_espacios->name_es;?></td>

                                            <td><?php echo $info_espacios->descri_es;?></td>                                           

   
                                               
                                            
											<?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


															<a href="<?php echo base_url(); ?>Principal/Reservas/reservar/<?php echo $info_espacios->id_es; ?>" class="btn btn-primary btn-circle btn-small"><i class="fa fa-calendar"></i></a>




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
			<div id="elim" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="vcenter">¿Está seguro?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" style="height: 190px;width: 100%;" id="content">

                        </div>

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->   
			
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
