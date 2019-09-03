 <div id="particles-js"></div>
 <div class="container">
 	<div class="row">
 		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
 			<div class="card card-signin my-5" style="background-color: white;">
 				<div class="card-body">




 					<form class="sign-box" id="loginform" action="<?php echo base_url(); ?>Auth/login" method="post">



 						<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/login.png" style="width:370px" alt="">
 						<div class="md-form input-group mb-3">
 							<div class="input-group-prepend">
 								<span class="input-group-text2 material-icons" id="material-addon1">person_outline</span>
 							</div>
 							<input type="text" class="form-control" name="correo" placeholder="Escribe tu correo" aria-label="Username" aria-describedby="material-addon1" required>
 						</div>

 						<div class="md-form input-group mb-3">


 							<div class="input-group-prepend">
 								<span class="input-group-text2 material-icons" id="material-addon1">lock_outline</span>
 							</div>

 							<input type="password" name="contraseña" id="inputValidationEx2" class="form-control validate" placeholder="Escribe tu contraseña" required>


 						</div>

 						<div class="form-group text-right">
 							<a href="#" class="undecorated">
 								<small style="color: #009CC5;">¿Olvidaste tu contraseña?</small>
 							</a>
 						</div>
 						<button class="btn btn-lg btn-cyan btn-block btn-signin" type="submit">Iniciar Sesión</button>

 					</form>

 				</div>
 			</div>
 		</div>
 	</div>
 </div>
