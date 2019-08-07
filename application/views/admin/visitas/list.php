        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Lista de visitas</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        
                        <li class="breadcrumb-item active">Visitas</li>
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
                                
                                <h6 class="card-subtitle">Se muestra un listado de las visitas.</h6>
                                <div class="table-responsive m-t-40">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Código QR</th>
                                                <th>Nombre visitante</th>
                                                <th>Fecha de visita</th>
                                                <th>Acompañantes</th>                                                   
                                                <th>Tipo de visita</th>                                                  
                                                <th>Tipo de acceso</th>                                                  
                                                <th>Color vehículo</th>                                                  
                                                <th>Marca vehículo</th>                                                  
                                                <th>Placas vehículo</th>                                                  
                                                <th>Teléfono</th>                                                  
                                               

                                            </tr>
                                        </thead>

                                        
                                        <tbody>
                                        <?php if(!empty($info_visita)):?>
                                    <?php foreach($info_visita as $info_visita):?>
                                        <tr>
                                          <td>
                                            
                           
                                          <a href="<?=base_url()?>assets/images/QR/qr_<?php echo $info_visita->codigo_a;?>.png" class="example-image-link" data-lightbox="example-1"><img src="<?=base_url()?>assets/images/QR/qr_<?php echo $info_visita->codigo_a;?>.png" class="img-fluid" style=" width: 50px; height: 50px;" >   </a>  


                                            

                                          
                                          
                                          
                                          </td>
                                            <td><?php echo $info_visita->nombre_visitante;?></td>

                                            <td><?php echo $info_visita->fecha_visita;?></td>                                           

                                            <td><?php echo $info_visita->max_persona;?></td>    
                                            

                                            <td><?php echo $info_visita->name_v;?></td>                                                    

                                            <td><?php echo $info_visita->name_tipo_vi;?></td>

                                            <td><span style="background: <?php echo $info_visita->color_auto ?>;"><?php echo $info_visita->color_auto ?></span></td>

                                            <td><?php echo $info_visita->marca_auto;?></td>

                                            <td><?php echo $info_visita->placas_auto;?></td>
                                            

                                            <td><a href="<?=base_url()?>Principal/visitas/enviarwhats/<?php echo $info_visita->telefono_v;?>a<?php echo $info_visita->codigo_a ?>" target="_blank" ><?php echo $info_visita->telefono_v;?></a></td>                                                    

                                               

       
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
