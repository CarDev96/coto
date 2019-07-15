        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url();?>assets/images/users/avatar-2-128.png" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>Usuario</h5>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        
                        <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-user"></i>Perfil</a>
                            <!-- text-->

                            <!-- text-->

                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Configuracion</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
                            <!-- text-->
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Catálogos</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Casas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>Principal/Fraccionamientos/add">Nuevo Registro </a></li>
                                <li><a href="<?php echo base_url();?>Principal/Fraccionamientos">Lista</a></li>
                                
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-currency-usd"></i><span class="hide-menu">Ingresos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>Principal/Ingresos/add">Nuevo ingreso</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Lista Ingresos</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url();?>Principal/Ingresos/cuotas">Cuotas Obligatorias</a></li>
                                        <li><a href="<?php echo base_url();?>Principal/Ingresos/tags">Tags</a></li>
                                        
                                        <li><a href="<?php echo base_url();?>Principal/Ingresos/varios">Varios</a></li>
                                        <li><a href="<?php echo base_url();?>Principal/Ingresos">Total</a></li>
                                    </ul>
                                </li>
                                
                                
                                
                                
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrow-down"></i><span class="hide-menu">Gastos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>Principal/Egresos/add">Nuevo </a></li>
                                <li><a href="<?php echo base_url();?>Principal/Egresos">Lista Gastos </a></li>
                             
                                
                                
                                
                            </ul>
                        </li>
                        
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap"><i class="mdi mdi-account-key">Administrador</i></li>                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>Administrador/Usuarios/add">Nuevo usuario </a></li>
                                <li><a href="<?php echo base_url();?>Administrador/Usuarios">Lista usuarios </a></li>

                             
                                
                                
                                
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-key-variant"></i><span class="hide-menu">Permisos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>Administrador/Permisos/add">Nuevo Permiso </a></li>
                                <li><a href="<?php echo base_url();?>Administrador/Permisos">Permisos </a></li>
                                
                             
                                
                                
                                
                            </ul>
                        </li>                        









                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->