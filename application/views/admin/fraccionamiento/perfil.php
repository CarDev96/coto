        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Perfil casas</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Lista de casas</li>
                        <li class="breadcrumb-item active">Perfil casa</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card"> <img class="card-img" src="<?php echo base_url(); ?>assets/images/background/socialbg.jpg" alt="Card image">
                            <div class="card-img-overlay card-inverse social-profile d-flex ">
                                <div class="align-self-center" style="margin-left: auto;margin-right: auto;"> <img src="<?php echo base_url(); ?>assets/images/users/avatar-2-128" class="img-circle" width="100">
                                    <h4 class="card-title"><?php echo $info_perfil->responsable; ?></h4>
                                    <h6 class="card-subtitle">Casa n° : <?php echo $info_perfil->id_casa; ?></h6>
                                    <p class="text-white"></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body"> <small class="text-muted">Tipo de ingresos registrados </small>

                                <?php if (!empty($info_perfil2)) : ?>
                                    <?php foreach ($info_perfil2 as $info_perfil2) : ?>

                                        <h6><?php echo $info_perfil2->name; ?></h6>


                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+52 1 <?php echo $info_perfil->telefono; ?></h6>

                                <small class="text-muted p-t-30 db">Dirección</small>

                                <h6><?php echo $info_perfil->direccion; ?></h6>

                                <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Cuotas obligatorias</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Ingresos Varios</a> </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <!-- Column -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Registro de pagos de cuotas obligatorias 2019</h4>
                                            <h6 class="card-subtitle">Registro de pagos por mes y año.</h6>
                                            <table class="tablesaw table-striped table-hover table-bordered table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Meses</th>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="0">2019</th>
                                                   

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                
                                                <?php
                                                
                                                $data = array(
            
                                                    'Enero',
                                                    'Febrero',
                                                    'Marzo',
                                                    'Abril',
                                                    'Mayo',
                                                    'Junio',
                                                    'Julio',
                                                    'Agosto',
                                                    'Septiempre',
                                                    'Octubre',
                                                    'Noviembre',
                                                    'Diciembre',


                                        
                                        
                                                    ); 
                                        
                                                
                                                
                                                ?>

                                                <?php for($i=1; $i<=12;$i++):?>
                                                
                                                <?php $mes= 0;?>
                                                <tr>
                                                <?php foreach($info_perfil3 as $n):?> 

                                                

                                                <?php if($n->mes_suscrip == $i && $n->id_concepto_in == 1):?>
                        
                                                <?php $mes = 1;?>

                                            <?php endif; ?>

                                                <?php if($n->mes_suscrip == 1 && $n->id_concepto_in == 5):?>
                        
                                                <?php $mes = 1;?>

                                                <?php endif; ?>                                            
                                                    
                                                    
                                                <?php endforeach; ?>

                                                <?php if($mes==1):?>
                                                    <td><?php echo $data[$i-1]; ?></td>
                                                    <td><span class="mdi mdi-check"></span></td>
                                                                                                

                                                    <?php else: ?>
                                                    <td><?php echo $data[$i-1]; ?></td>                                                    
                                                    <td>x</td>
                                                                                                      


                                            <?php endif;?>
                                                
                                                </tr>
                                                <?php endfor;?>
                                                
                                                </tbody>

                                            </table>

                                            <h4 class="card-title">Registro de pagos de cuotas obligatorias 2020</h4>
                                            <h6 class="card-subtitle">Registro de pagos por mes y año.</h6>
                                            <table class="tablesaw table-striped table-hover table-bordered table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Meses</th>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="0">2020</th>
                                                   

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                
                                                <?php
                                                
                                                $data = array(
            
                                                    'Enero',
                                                    'Febrero',
                                                    'Marzo',
                                                    'Abril',
                                                    'Mayo',
                                                    'Junio',
                                                    'Julio',
                                                    'Agosto',
                                                    'Septiempre',
                                                    'Octubre',
                                                    'Noviembre',
                                                    'Diciembre',


                                        
                                        
                                                    ); 
                                        
                                                
                                                
                                                ?>

                                                <?php for($i=1; $i<=12;$i++):?>
                                                
                                                <?php $mes= 0;?>
                                                <tr>
                                                <?php foreach($info_perfil4 as $n):?> 

                                                

                                                <?php if($n->mes_suscrip == $i && $n->id_concepto_in == 1):?>
                        
                                                <?php $mes = 1;?>

                                            <?php endif; ?>

                                                <?php if($n->mes_suscrip == 1 && $n->id_concepto_in == 5):?>
                        
                                                <?php $mes = 1;?>

                                                <?php endif; ?>                                            
                                                    
                                                    
                                                <?php endforeach; ?>

                                                <?php if($mes==1):?>
                                                    <td><?php echo $data[$i-1]; ?></td>
                                                    <td><span class="mdi mdi-check"></span></td>
                                                                                                

                                                    <?php else: ?>
                                                    <td><?php echo $data[$i-1]; ?></td>                                                    
                                                    <td>x</td>
                                                                                                      


                                            <?php endif;?>
                                                
                                                </tr>
                                                <?php endfor;?>
                                                
                                                </tbody>

                                            </table>                                            

                                        <hr>

                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                 
                                    <h6 class="card-subtitle">Se muestra un listado de los ingresos registrados.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Fecha de ingreso</th>
                                                <th>Tipo de ingreso</th>
                                                <th>Descripcion</th>                                               
                                                <th>Monto</th>                                                
                                               

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th>Total ingreso por concepto</th>
                                                <th></th>
                                                
                                                
                                                <th></th>
                                                <th>$<?php echo $info_sump->a; ?></th>
                                            </tr>
                                        </tfoot>                                        
                                        <tbody>
                                        <?php if(!empty($info_perfil5)):?>
                                    <?php foreach($info_perfil5 as $info_perfil5):?>
                                        <tr>
                                          <td>
                                            
                           
                                              
                                          <?php echo $info_perfil5->fecha_ingreso;?>
            
                                            
                                            
                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_perfil5->name;?></td>

                                            <td><?php echo $info_perfil5->descripcion_ingreso;?></td>                                           

                                            
                                            
                                            <td><?php echo $info_perfil5->ingreso;?></td>                                                

                                         
                                            
                                            
                                            
                                          
                                                                                 
                                          
                                         

                                          
                                          
                                
          
                                            
                      

                                       
       
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
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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