        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-home text-info"></i></h2>
                                    <h3 class=""><?php echo $count_casas->a ?></h3>
                                    <h6 class="card-subtitle">Casas registradas</h6></div>
                             
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="fa fa-warning text-danger"></i></h2>
                                    <h3 class=""><?php echo $count_deudor->b ?></h3>
                                    <h6 class="card-subtitle">Deudores de mensualidad</h6></div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-wallet text-success"></i></h2>
                                    <h3 class="">$<?php echo $sum_ingresos->a ?></h3>
                                    <h6 class="card-subtitle">Total de ingresos</h6></div>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="fa fa-arrow-down text-warning"></i></h2>
                                    <h3 class="">$<?php echo $sum_egresos->b ?></h3>
                                    <h6 class="card-subtitle">Total de egresos</h6></div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h4 class="card-title">Finanzas</h4>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-danger"><i class="fa fa-circle font-10 m-r-10 "></i>Gastos</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Ingresos ($)</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="earning" style="height: 355px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">

                    <?php 
                    
                    $capital =  $sum_ingresos->a;
                    
                    

                        $gastos = $sum_egresos->b;

                        $total = $capital - $gastos;


                    

                    if($total<0): 
                    ?>
                        <div class="card card-inverse card-danger">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-light-bulb"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Saldo en capital</h3>
                                        <h6 class="card-subtitle">Actualizado al día : <?php 
                                        
                                        $dia_ac = date("d-m-Y");

                                        echo $dia_ac;
                                        
                                        
                                        
                                        ?></h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>
                                       $ <?php 
                                                            
                                                            $capital =  $sum_ingresos->a;

                                                            if(!empty($sum_egresos)){

                                                                $gastos = $sum_egresos->b;

                                                                $total = $capital - $gastos;

                                                                echo $total;
                                                            }

                                                            else{

                                                                echo $capital;

                                                            }

                                                            
                                                            
                                                            
                                                            ?>
                                        
                                        </h2>
                                    </div>
                                    <div class="col-6 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                    <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-light-bulb"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Saldo en capital</h3>
                                        <h6 class="card-subtitle">Actualizado al día : <?php 
                                        
                                        $dia_ac = date("d-m-Y");

                                        echo $dia_ac;
                                        
                                        
                                        
                                        ?></h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>
                                       $ <?php 
                                                            
                                                            $capital =  $sum_ingresos->a;

                                                            if(!empty($sum_egresos)){

                                                                $gastos = $sum_egresos->b;

                                                                $total = $capital - $gastos;

                                                                echo $total;
                                                            }

                                                            else{

                                                                echo $capital;

                                                            }

                                                            
                                                            
                                                            
                                                            ?>
                                        
                                        </h2>
                                    </div>
                                    <div class="col-6 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    <?php endif; ?>
                        

                        <?php if (!empty($info_aviso)) : ?>
                        <div class="card card-inverse card-warning">
                            <div class="card-body" style="overflow-y: auto;height: 200px;width: 100%;">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Avisos del dia</h3>
                                        <h6 class="card-subtitle"><?php
                                        
                                        
                                        $dia_ac = date("d-m-Y");

                                        echo $dia_ac;                                        
                                        
                                        
                                        ?></h6> </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-8 align-self-center">


                                    <?php foreach ($info_aviso as $info_aviso) : ?>

                                    <h3 class="font-light text-white"><?php echo $info_aviso->mensaje_anuncio ?></h3>
                                    <hr>

                                    <?php endforeach; ?>
                                  

                                    </div>
                                    <div class="col-6 p-t-10 p-b-20 text-right align-self-center">
                                        <div class="spark-count2" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <?php endif; ?>                                          
                      
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
  