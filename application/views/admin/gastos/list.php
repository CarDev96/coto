        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de Gastos</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Gastos Total</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de los gastos.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Recibo oficial</th>
                                                <th>Tipo de gasto</th>
                                                <th>Descripción de gasto</th>
                                                <th>Fecha de gasto</th>                                                   
                                                <th>Monto</th>                                                  
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th>Eliminar</th>
                                                <?php endif;?>                                                 

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Total gastos</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
												<th>$<?php echo $sum_e->b;?></th>
                                                <?php if($permisos->insercion==1):?>                                                
                                                <th></th>
                                                <?php endif;?>  												
                                            </tr>
                                        </tfoot>                                        
                                        <tbody>
                                        <?php if(!empty($info_gastos)):?>
                                    <?php foreach($info_gastos as $info_gastos):?>
                                        <tr>
                                          <td>
                                            
                           
                                          <a href="<?=base_url()?>assets/images/gastos/<?php echo $info_gastos->archivos;?>" class="example-image-link" data-lightbox="example-1"><img src="<?=base_url()?>assets/images/gastos/thumbs/<?php echo $info_gastos->archivos;?>" class="img-responsive" style=" width: auto; height: auto;" >


                                            

                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_gastos->name_egreso;?></td>

                                            <td><?php echo $info_gastos->descripcion_egreso;?></td>                                           

                                            <td><?php echo $info_gastos->fecha_egreso;?></td>    
                                            

                                            <td>$<?php echo $info_gastos->monto_egreso;?></td>                                                    

                                               
                                            
											<?php if($permisos->insercion==1):?>
                                                        <td align="center">


                                                            <div class="btn-group">


                                                            <a  id="eliminar_ingreso" class="btn btn-danger btn-remove btn-sm btn-small swal-btn-warning" data-toggle="modal" data-target="#elim" onclick="eliminar2(<?php echo $info_gastos->id_egreso; ?>)"><i class="fa fa-remove"></i></a>




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
