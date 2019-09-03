        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
        	<!-- Sidebar scroll-->
        	<div class="scroll-sidebar">
        		<!-- User profile -->
        		<div class="user-profile">
        			<!-- User profile image -->
        			<div class="profile-img">
        				<?php if (is_null($this->session->userdata("foto_perfil"))) : ?>
        					<img src="<?php echo base_url(); ?>assets/images/users/avatar-2-128.png" alt="user" />
        				<?php else : ?>

        					<img src="<?php echo base_url(); ?>assets/images/perfil/<?php echo $this->session->userdata("foto_perfil") ?>" alt="user" />

        				<?php endif; ?>
        				<!-- this is blinking heartbit-->
        				<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
        			</div>
        			<!-- User profile text-->
        			<div class="profile-text">
        				<h5><?php echo $this->session->userdata("username") ?></h5>
        				<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>

        				<a href="<?php echo base_url(); ?>Auth/logout" class="" data-toggle="tooltip" title="Cerrar sesión"><i class="mdi mdi-power"></i></a>
        				<div class="dropdown-menu animated flipInY">
        					<!-- text-->
        					<?php if ($this->session->userdata("rol") == 5) : ?>

        						<a href="<?php echo base_url(); ?>Principal/Perfil/perfil_guardia/<?php echo $this->session->userdata("id_guardia") ?>" class="dropdown-item"><i class="ti-user"></i>Perfil</a>
        					<?php else : ?>
        						<a href="<?php echo base_url(); ?>Principal/Perfil/perfil/<?php echo $this->session->userdata("id_casa") ?>" class="dropdown-item"><i class="ti-user"></i>Perfil</a>

        					<?php endif; ?>
        					<!-- text-->

        					<!-- text-->

        					<!-- text-->

        					<!-- text-->

        					<!-- text-->
        					<div class="dropdown-divider"></div>
        					<!-- text-->
        					<a href="<?php echo base_url(); ?>Auth/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
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
        				<?php if ($this->session->userdata("rol") <> 5) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Casas</span></a>
        						<ul aria-expanded="false" class="collapse">
        							<?php if ($this->session->userdata("rol") <> 4) : ?>
        								<li><a href="<?php echo base_url(); ?>Principal/Fraccionamientos/add">Nuevo Registro </a></li>
        							<?php endif; ?>
        							<li><a href="<?php echo base_url(); ?>Principal/Fraccionamientos">Lista</a></li>


        						</ul>
        					</li>

        				<?php endif; ?>

        				<?php if ($this->session->userdata("rol") <> 5) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-currency-usd"></i><span class="hide-menu">Ingresos</span></a>
        						<ul aria-expanded="false" class="collapse">
        							<?php if ($this->session->userdata("rol") <> 4) : ?>
        								<li><a href="<?php echo base_url(); ?>Principal/Ingresos/add">Nuevo ingreso</a></li>
        							<?php endif; ?>
        							<li> <a class="has-arrow" href="#" aria-expanded="false">Lista Ingresos</a>
        								<ul aria-expanded="false" class="collapse">
        									<li><a href="<?php echo base_url(); ?>Principal/Ingresos/cuotas">Cuotas</a></li>
        									<li><a href="<?php echo base_url(); ?>Principal/Ingresos/tags">Tags</a></li>

        									<li><a href="<?php echo base_url(); ?>Principal/Ingresos/varios">Varios</a></li>
        									<li><a href="<?php echo base_url(); ?>Principal/Ingresos">Total</a></li>
        								</ul>
        							</li>
        							<li><a href="<?php echo base_url(); ?>Principal/Ingresos/abonos">Abonos</a></li>




        						</ul>
        					</li>

        				<?php endif; ?>

        				<?php if ($this->session->userdata("rol") <> 5) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrow-down"></i><span class="hide-menu">Egresos</span></a>
        						<ul aria-expanded="false" class="collapse">
        							<?php if ($this->session->userdata("rol") <> 4) : ?>
        								<li><a href="<?php echo base_url(); ?>Principal/Egresos/add">Nuevo </a></li>
        							<?php endif; ?>
        							<li><a href="<?php echo base_url(); ?>Principal/Egresos">Lista Egresos </a></li>




        						</ul>
        					</li>

        				<?php endif; ?>
        				<?php if ($this->session->userdata("rol") <> 5) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-message"></i><span class="hide-menu">Avisos</span></a>
        						<ul aria-expanded="false" class="collapse">
        							<?php if ($this->session->userdata("rol") <> 4) : ?>
        								<li><a href="<?php echo base_url(); ?>Principal/Avisos/add">Nuevo </a></li>
        							<?php endif; ?>
        							<li><a href="<?php echo base_url(); ?>Principal/Avisos">Lista avisos </a></li>




        						</ul>
        					</li>
        				<?php endif; ?>
        				<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-ticket-account"></i><span class="hide-menu">Visitas</span></a>
        					<ul aria-expanded="false" class="collapse">
        						<?php if ($this->session->userdata("rol") <> 5) : ?>
        							<li><a href="<?php echo base_url(); ?>Principal/Visitas/add">Nueva </a></li>
        						<?php endif; ?>

        						<?php if ($this->session->userdata("rol") == 5) : ?>
        							<li><a href="<?php echo base_url(); ?>Principal/Visitas/guardia">Menú </a></li>
        						<?php else : ?>
        							<li><a href="<?php echo base_url(); ?>Principal/Visitas/historial/<?php echo $this->session->userdata("id_casa") ?>">Lista Visitas </a></li>

        						<?php endif; ?>



        					</ul>
        				</li>

        				<?php if ($this->session->userdata("rol") == 1 || $this->session->userdata("rol") == 2) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table-edit"></i><span class="hide-menu">Reuniones</span></a>
        						<ul aria-expanded="false" class="collapse">

        							<li><a href="<?php echo base_url(); ?>Principal/Reuniones/asistencia">Nueva asistencia </a></li>

        							<li><a href="<?php echo base_url(); ?>Principal/Reuniones">Lista Asistencia </a></li>




        						</ul>
        					</li>
						<?php endif; ?>
						
        				<?php if ($this->session->userdata("rol") <> 5) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu">Reservaciones</span></a>
        						<ul aria-expanded="false" class="collapse">
        							
        								<li><a href="<?php echo base_url(); ?>Principal/Reservas/listr">Nuevo </a></li>
        							
        							<li><a href="<?php echo base_url(); ?>Principal/Reservas/reservasp/<?php echo $this->session->userdata("id_casa") ?>">Mis reservaciones </a></li>




        						</ul>
        					</li>
        				<?php endif; ?>						

        				<?php if ($this->session->userdata("rol") == 1 || $this->session->userdata("rol") == 2) : ?>
        					<li class="nav-devider"></li>
        					<li class="nav-small-cap"><i class="mdi mdi-account-key">Administrador</i></li>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Usuarios</span></a>
        						<ul aria-expanded="false" class="collapse">
        							<li><a class="has-arrow" href="#" aria-expanded="false">Nuevo</a>

        								<ul aria-expanded="false" class="collapse">
        									<li><a href="<?php echo base_url(); ?>Administrador/Usuarios/add">Usuario residente</a></li>
        									<li><a href="<?php echo base_url(); ?>Administrador/Usuarios/add_s">Usuario externo</a></li>


        								</ul>

        							</li>
        							<li><a class="has-arrow" href="#" aria-expanded="false">Lista</a>


        								<ul aria-expanded="false" class="collapse">
        									<li><a href="<?php echo base_url(); ?>Administrador/Usuarios">Usuario residente</a></li>
        									<li><a href="<?php echo base_url(); ?>Administrador/Usuarios/seguridad">Usuario externo</a></li>


        								</ul>


        							</li>





        						</ul>
        					</li>
        				<?php endif; ?>
        				<?php if ($this->session->userdata("rol") == 1) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-key-variant"></i><span class="hide-menu">Permisos</span></a>
        						<ul aria-expanded="false" class="collapse">
        							<li><a href="<?php echo base_url(); ?>Administrador/Permisos/add">Nuevo Permiso </a></li>
        							<li><a href="<?php echo base_url(); ?>Administrador/Permisos">Permisos </a></li>





        						</ul>
        					</li>
        				<?php endif; ?>


        				<?php if ($this->session->userdata("rol") == 1 || $this->session->userdata("rol") == 2) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-human-handsdown"></i><span class="hide-menu">Personal de Seguridad</span></a>
        						<ul aria-expanded="false" class="collapse">
        							<li><a href="<?php echo base_url(); ?>Principal/Personal/add">Nuevo Guardia </a></li>
        							<li><a href="<?php echo base_url(); ?>Principal/Personal">Lista </a></li>





        						</ul>
        					</li>
        				<?php endif; ?>

        				<?php if ($this->session->userdata("rol") == 1 || $this->session->userdata("rol") == 2) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Ajustes</span></a>
        						<ul aria-expanded="false" class="collapse">

        							<li><a href="<?php echo base_url(); ?>Principal/Cuotas">Conceptos de pagos </a></li>
        							<li><a href="<?php echo base_url(); ?>Administrador/Usuarios/edit">Tipos de usuarios </a></li>

        							<li><a class="has-arrow" href="#" aria-expanded="false">Espacios comunes</a>

        								<ul aria-expanded="false" class="collapse">
        									<li><a href="<?php echo base_url(); ?>Administrador/Espacios/add">Nuevo</a></li>
        									<li><a href="<?php echo base_url(); ?>Administrador/Espacios">Lista</a></li>





        								</ul>


        							</li>





        						</ul>
        					</li>
        				<?php endif; ?>

        				<?php if ($this->session->userdata("rol") == 1) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-delete-forever"></i><span class="hide-menu">Datos Eliminados</span></a>
        						<ul aria-expanded="false" class="collapse">

        							<li><a href="<?php echo base_url(); ?>Principal/Deleted">Ingresos </a></li>
        							<li><a href="<?php echo base_url(); ?>Principal/Deleted/gastos">Gastos </a></li>





        						</ul>
        					</li>
        				<?php endif; ?>

        				<?php if ($this->session->userdata("rol") == 1 || $this->session->userdata("rol") == 2) : ?>
        					<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Estado de cuenta</span></a>
        						<ul aria-expanded="false" class="collapse">

        							<li><a href="<?php echo base_url(); ?>Administrador/Finanzas">Lista </a></li>






        						</ul>
        					</li>
        				<?php endif; ?>





        			</ul>
        		</nav>
        		<!-- End Sidebar navigation -->
        	</div>
        	<!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
