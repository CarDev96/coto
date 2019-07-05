
                  <footer class="footer">
                © 2019 Coto del Valle by Network Level Systems
            </footer>
       
        <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/plugins/moment/min/moment-with-locales.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>    
    <script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>
    <!--sparkline JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--morris JavaScript -->
    <script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/morrisjs/morris.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url();?>js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>

    <!-- This is data table -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>    

    <script>
        
        $(document).ready(function() {
    var table = $('#zero_config').DataTable( {
        responsive: true,
language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
    } );
 
    
} ); 
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script>
    $(document).ready(function() {
        $(".dataTables_filter").removeAttr("top");
    });

        // For select 2
        $(".select2").select2();
    </script>

<script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({
        
         weekStart: 0, 
         time: false,
         lang : 'es',
         cancelText:'Cancelar',
         format : 'DD-MM-YYYY'         
         });
  
         $('#mdate2').bootstrapMaterialDatePicker({
        
        weekStart: 0, 
        time: false,
        lang : 'es',
        cancelText:'Cancelar',
        format : 'DD-MM-YYYY'         
        });

    </script>


<script>
	
$('#txtCasa').change(function(){

    var opcion = $(':selected', this).data('casa');
    var opcion2 = $(':selected', this).data('responsable');
    var opcion3 = $(':selected', this).data('direccion');
    var opcion4 = $(':selected', this).data('habitada');
    var opcion5 = $(':selected', this).data('estatus');        

	
	
	
	 $("#n_casa").val(opcion);
	 $("#propietario").val(opcion2);
	 $("#direccion").val(opcion3);
	 $("#habitada").val(opcion4);
	 $("#pago").val(opcion5);               
	

	 

 
});
    
$('#txtconcepto').change(function(){

var opcion = $(':selected', this).data('monto1');



        if($(':selected', this).data('concep') == "Tags" || $(':selected', this).data('concep') == "Tag-Moto" || $(':selected', this).data('concep') == "Fondo Actual" || $(':selected', this).data('concep') == "Varios"){

            $("#mdate2").prop('disabled', true);

        }

      

            else{

                $("#mdate2").prop('disabled', false);

            }



 $("#tch2").val(opcion);
 
 


 


});
	
    </script>
    
    <script type="text/javascript">
    jQuery(document).ready(function() {
        // touchspin
        $("input[name='tch2']").TouchSpin({
            min: 0,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
    });
    </script>    

</body>

</html>