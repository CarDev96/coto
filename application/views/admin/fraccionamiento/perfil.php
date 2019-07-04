        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Contact details</h3>
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
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Tags</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Fondo Actual</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#varios" role="tab">Varios</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <!-- Column -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Registro de pagos de cuotas obligatorias</h4>
                                            <h6 class="card-subtitle">Registro de pagos por mes y año.</h6>
                                            <table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Meses</th>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">2019</th>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">2020</th>
                                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="0">
                                                            <abbr title="Rotten Tomato Rating">2021</abbr>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <?php if (!empty($info_perfil3)) : ?>

                                                    <tbody>


                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Enero</a></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Febrero</a></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Marzo</a></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Abril</a></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Mayo</a></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Junio</a></td>


                                                            <?php if (!empty($info_perfil3)) : ?>
                                                                <?php for ($i = 0; $i <= 11; $i++) : ?>


                                                                    <?php if ($info_perfil3[$i]->mes_suscrip == 6) : ?>

                                                                        <td><span class="mdi mdi-check"></span></td>

                                                                        <?php break; ?>

                                                                    <?php endif; ?>

                                                                    <td>x</td>
                                                                    <?php break; ?>
                                                                <?php endfor ?>

                                                            <?php endif; ?>


                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Julio</a></td>



                                                            <?php if (!empty($info_perfil3)) : ?>
                                                                <?php for ($i = 0; $i <= 11; $i++) : ?>


                                                                    <?php if ($info_perfil3[$i]->mes_suscrip == 7) : ?>

                                                                        <td><span class="mdi mdi-check"></span></td>

                                                                        <?php break; ?>

                                                                    <?php endif; ?>

                                                                    <td>x</td>
                                                                    <?php break; ?>
                                                                <?php endfor ?>

                                                            <?php endif; ?>


                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Agosto</a></td>

                                                            <?php if (!empty($info_perfil3)) : ?>
                                                                <?php for ($i = 0; $i <= 11; $i++) : ?>


                                                                    <?php if ($info_perfil3[$i]->mes_suscrip == 8) : ?>

                                                                        <td><span class="mdi mdi-check"></span></td>

                                                                        <?php break; ?>

                                                                    <?php endif; ?>

                                                                    <td>x</td>
                                                                    <?php break; ?>
                                                                <?php endfor ?>

                                                            <?php endif; ?>



                                                            <td>x</td>
                                                            <td>x</td>



                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Septiembre</a></td>
                                                            <?php if (!empty($info_perfil3)) : ?>
                                                                <?php for ($i = 0; $i <= 11; $i++) : ?>


                                                                    <?php if ($info_perfil3[$i]->mes_suscrip == 9) : ?>

                                                                        <td><span class="mdi mdi-check"></span></td>

                                                                        <?php break; ?>

                                                                    <?php endif; ?>

                                                                    <td>x</td>
                                                                    <?php break; ?>
                                                                <?php endfor ?>

                                                            <?php endif; ?>
                                                            <td>x</td>
                                                            <td>x</td>



                                                        </tr>
                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Octubre</a></td>




                                                            <?php if (!empty($info_perfil3)) : ?>
                                                                <?php for ($i = 0; $i <= 11; $i++) : ?>

                                                      

                                                                    <?php if ($info_perfil3[$i]->mes_suscrip == 10) : ?>

                                                                        <td><span class="mdi mdi-check"></span></td>

                                                                        <?php break; ?>

                                                                    <?php endif; ?>

                                                                    <td>x</td>
                                                                    <?php break; ?>
                                                                 
                                                                <?php endfor ?>

                                                                                                                        

                                                            <?php endif; ?>
                                                            <td>x</td>
                                                            <td>x</td>



                                                        </tr>

                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Noviembre</a></td>



                                                            <?php if (!empty($info_perfil3)) : ?>
                                                                <?php while($i<=12) : ?>

                                                                    <?php if ($info_perfil3[$i]->mes_suscrip ==11) : ?>


                                                                        <td><span class="mdi mdi-check"></span></td>                                                                        

                                                                        <?php break; ?>

                                                                    



                                                                    <?php endif; ?>

                                                                    <?php $i++; ?>
                                                                <?php endwhile ?>

                                                                

                                                                                                                        

                                                            <?php endif; ?>



                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>

                                                        <tr>
                                                            <td class="title"><a class="link" href="javascript:void(0)">Diciembre</a></td>
                                                            <td>x</td>
                                                            <td>x</td>
                                                            <td>x</td>

                                                        </tr>

                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- -->
                                <div class="tab-pane" id="varios" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">hola</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
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
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->