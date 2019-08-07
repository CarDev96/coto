
<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="<?php echo base_url();?>Auth/login" method="post">

          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text" name="correo"  Placeholder="Correo" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password" name="contraseña"  Placeholder="Contraseña" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
             <div>
                                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Forgot
                                password?</a></span>
                                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" class="tst3" value="Iniciar Sesión"></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">
      <p style = "margin-top: 34px;font-size:smaller;" >HouseLife</p>
          
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>
