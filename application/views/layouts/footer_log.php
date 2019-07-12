

    <!-- ============================================================== -->
   <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/plugins/toast-master/js/jquery.toast.js"></script>
    

<script>

$(function() {
    "use strict";
     

    
             <?php if($this->session->flashdata("error")): ?>  
           $.toast({
            heading: 'Eror',
            text: 'Correo y/o Contraseña invalidos.',
            position: 'top-left',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500
            
          });
        <?php endif; ?>  
});
     
    
</script>

</html>