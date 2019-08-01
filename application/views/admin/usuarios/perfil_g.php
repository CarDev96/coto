        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Perfil</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                        <li class="breadcrumb-item active">Perfil</li>
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
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> 

                                <?php if (is_null($info_usuario->foto_perfil)) : ?>
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-2-128.png" class="img-circle" width="140" />

                                <?php else:?>

                                <img src="<?php echo base_url(); ?>assets/images/perfil/<?php echo $info_usuario->foto_perfil ?>" class="img-circle" width="140" />                                

                                <?php endif; ?>
                                    <h4 class="card-title m-t-10"><?php echo $info_perfil->nombre_g ?></h4>
                                    <h6 class="card-subtitle"><?php echo $info_perfil->email_g ?></h6>
                               
                                </center>
                            </div>

                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">


                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Configuración</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                    <?php if($info_usuario->pass == "1841363b0b95a95f04d73c722d7003df048049bf"): ?>                                        
                                        <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Administrador/Usuarios/actualizar_p3" autocomplete="off">
                                        <?php else:?>
                                        <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Administrador/Usuarios/actualizar_p4" autocomplete="off">
                                        <?php endif; ?>                                        
                                    <input type="hidden" name="id_usuario" value="<?php echo $info_usuario->id_usuario?>">                                       
                                    <input type="hidden" name="id_guardia" value="<?php echo $info_usuario->id_guardia?>">                                       

                                            <div class="form-group">
                                                <label class="col-md-12">Nombre completo</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" value="<?php echo $info_perfil->nombre_g ?>" class="form-control form-control-line" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="" value="<?php echo $info_usuario->username ?>" class="form-control form-control-line" name="username" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>

                                                <?php if($info_usuario->pass == "1841363b0b95a95f04d73c722d7003df048049bf"): ?>
                                                <div class="col-md-12">
                                                    <input type="password" value="cotopriv12" name="pass" class="form-control form-control-line">
                                                </div>

                                                <?php else:?>

                                                <div class="col-md-12">
                                                    <input type="password" value="<?php echo $info_usuario->pass?>" name="pass2" class="form-control form-control-line" readonly>
                                                </div>

                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Foto de perfil</label>
                                                <div class="col-md-5">


                                                    <input type="file" id="input-file-max-fs" class="dropify2" name="foto_perfil" data-max-file-size="2M" />

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Actualizar</button>
                                                </div>
                                            </div>
                                        </form>
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