<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>img/IMOChiapas2019isoazul.png">  
	<title>VsDoctor</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="<?php echo base_url();?>css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/log.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            
                    <form class="sign-box" id="loginform" action="<?php echo base_url();?>Auth/login" method="post">               
            
          	            <img class="hidden-lg-down img-fluid" src="<?php echo base_url();?>img/logo-2.png" alt="">
                      
                      <br>
                      

            
            
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="correo" required autofocus>
                <label for="inputEmail">Correo</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="contraseña" required>
                <label for="inputPassword">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                 <a href="reset-password.html">¿Olvidaste tu Contraseña?</a>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciar Sesión</button>
              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  

<script src="<?php echo base_url();?>js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>js/lib/popper/popper.min.js"></script>
<script src="<?php echo base_url();?>js/lib/tether/tether.min.js"></script>
<script src="<?php echo base_url();?>js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/lib/notie/notie.js"></script>
        
<script src="<?php echo base_url();?>js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
      
      
 <script>
    

      
           <?php if($this->session->flashdata("error")): ?>   
      
           notie.alert(3, '<?php echo $this->session->flashdata("error"); ?>', 2); 

   <?php endif; ?>  

    
   
  </script>      
      
<script src="js/app.js"></script>
</body>
</html>