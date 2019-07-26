<footer class="footer">
    © 2019 Coto del Valle by Network Level Systems
</footer>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url(); ?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url(); ?>js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url(); ?>js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url(); ?>js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/min/moment-with-locales.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>
<!--sparkline JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--morris JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.min.js"></script>

<!-- ============================================================== -->

<!-- Magnific popup JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
<!-- ============================================================== -->

<script src="<?php echo base_url(); ?>assets/plugins/lightbox2/dist/js/lightbox.js"></script>

<!-- Sweet-Alert  -->
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Style switcher -->
<script src="<?php echo base_url();?>assets/plugins/toast-master/js/jquery.toast.js"></script>
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/dropify/dist/js/dropify.min.js"></script>
<!-- This is data table -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>js/datatables-net/datatables.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script src="<?php echo base_url(); ?>js/mask.init.js"></script>
    
    <script src="<?php echo base_url(); ?>js/jquery.PrintArea.js" type="text/JavaScript"></script>

<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous"></script>

<script src="<?php echo base_url(); ?>js/dataTables.buttons.js" ></script>
<script src="<?php echo base_url(); ?>js/buttons.flash.js" ></script>
<script src="<?php echo base_url(); ?>js/jszip.js" ></script>
<script src="<?php echo base_url(); ?>js/pdfmake.js" ></script>
<script src="<?php echo base_url(); ?>js/vfs_fonts.js" ></script>
<script src="<?php echo base_url(); ?>js/buttons.html5.js" ></script>
<script src="<?php echo base_url(); ?>js/buttons.print.js" ></script>

<!-- -->

<script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>


<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";

    function mostrarModal(id) {
        if (id != null) {
            $.ajax({

                url: base_url + "Principal/Fraccionamientos/view/" + id,
                type: "POST",
                data: {
                    'id_casa': id
                },
                success: function(respuesta) {
                    $("#verticalcenter .modal-body").html(respuesta);
                    $('#datos_dueno2').hide();

                    if ($("#habitada:checked").val() == 'si') {
                        $("#renta").prop('disabled', false);


                        if ($("#renta:checked").val() == 'si') {

                            $('#datos_dueno2').show();

                        } else {

                            $('#datos_dueno2').hide();

                        }


                        $('#renta').click(function() {

                            if ($("#renta:checked").val() == 'no' || $("#renta:checked").val() == 'si') {

                                $('#datos_dueno2').show();

                            } else {

                                $('#datos_dueno2').hide();

                                $('#propi').val() = " ";                                
                                $('#tel').val() = " ";                                

                            }

                        });



                    } else {
                        $("#renta").prop('disabled', true);
                        $("#renta").prop('checked', false);
                        $('#datos_dueno2').hide();
                    }

                    $('#habitada').click(function() {

                        if ($("#habitada:checked").val() == 'si') {
                            $("#renta").prop('disabled', false);


                            $('#renta').click(function() {

                                if ($("#renta:checked").val() == 'si') {

                                    $('#datos_dueno2').show();

                                } else {

                                    $('#datos_dueno2').hide();

                                }

                            });



                        } else {
                            $("#renta").prop('disabled', true);
                            $("#renta").prop('checked', false);
                            $('#datos_dueno2').hide();
                        }





                    });




                }
            });
        }
    }
</script>
<!------------------------------------>


<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";

    function liquidar(id) {
        if (id != null) {
            $.ajax({

                url: base_url + "Principal/Fraccionamientos/view_a/" + id,
                type: "POST",
                data: {
                    'id_abono': id
                },
                success: function(respuesta) {
                    $("#verticalcenter .modal-body").html(respuesta);
                    

                 



                }
            });
        }
    }
</script>
<!------------------------------------>


<!-- --->
<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";



    function actualizar() {

        var dataString = $("#form_up_casa").serialize();



        $.ajax({

            url: base_url + "Principal/Fraccionamientos/update",
            type: "POST",
            data: dataString,
            success: function(respuesta) {

                swal({
                        title: "¡Actualizado!",
                        text: "Tu dato ha sido actualizado correctamente.",
                        type: "success"
                    },
                    function() {
                        location.reload();
                    }
                );

            }
        });

    }
</script>
<!------------------------------------>


<!-- --->
<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";



    function liquid() {

        var dataString = $("#form_liq").serialize();



        $.ajax({

            url: base_url + "Principal/Fraccionamientos/liq",
            type: "POST",
            data: dataString,
            success: function(respuesta) {

                swal({
                        title: "Liquidad!",
                        text: "Mensualidad liquidada correctamente.",
                        type: "success"
                    },
                    function() {
                        location.reload();
                    }
                );

            }
        });

    }
</script>
<!------------------------------------>


<script>
    $(document).ready(function() {
        var table = $('#zero_config').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
            'csv', 'excel', 'pdf', 'print'
        ],            
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
        });

        


    });

    $(document).ready(function() {
        var table = $('#zero_config2').DataTable({
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
        });

        


    });    
</script>

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
        lang: 'es',
        cancelText: 'Cancelar',
        format: 'DD-MM-YYYY'
    });

    $('#mdate2').bootstrapMaterialDatePicker({

        weekStart: 0,
        time: false,
        lang: 'es',
        cancelText: 'Cancelar',
        format: 'DD-MM-YYYY'
    });
</script>


<script>
    $('#txtCasa').change(function() {

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

    $('#txtconcepto').change(function() {

        var opcion = $(':selected', this).data('monto1');
        var opcion2 = $(':selected', this).data('concep');



        if ($(':selected', this).data('concep') == "Tags" || $(':selected', this).data('concep') == "Tag-Moto" || $(':selected', this).data('concep') == "Fondo Actual" || $(':selected', this).data('concep') == "Varios") {

            $("#mdate2").prop('disabled', true);

        } else {

            $("#mdate2").prop('disabled', false);

        }



        $("#tch2").val(opcion);
        $("#name_pago").val(opcion2);







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

<script type="text/javascript">
    jQuery(document).ready(function() {
        // touchspin
        $("input[name='cantidad_gasto']").TouchSpin({
            min: 0,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
    });
</script>




<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify({

            messages: {
                default: 'Arrastre una imagen que servira como comprobante de pago.',
                replace: 'Arrastre una imagen para remplazar.',
                remove: 'Eliminar',
                error: 'Ups, algo ha sucedido.'
            },
            error: {
                'fileSize': 'El archivo adjunto es demasiado grande ({{ value }} max).',
                'minWidth': 'The image width is too small ({{ value }}}px min).',
                'maxWidth': 'The image width is too big ({{ value }}}px max).',
                'minHeight': 'The image height is too small ({{ value }}}px min).',
                'maxHeight': 'The image height is too big ({{ value }}px max).',
                'imageFormat': 'The image format is not allowed ({{ value }} only).'
            }

        });

        $('.dropify2').dropify({

messages: {
    default: 'Arrastre una imagen que servira como foto de perfil.',
    replace: 'Arrastre una imagen para remplazar.',
    remove: 'Eliminar',
    error: 'Ups, algo ha sucedido.'
},
error: {
    'fileSize': 'El archivo adjunto es demasiado grande ({{ value }} max).',
    'minWidth': 'The image width is too small ({{ value }}}px min).',
    'maxWidth': 'The image width is too big ({{ value }}}px max).',
    'minHeight': 'The image height is too small ({{ value }}}px min).',
    'maxHeight': 'The image height is too big ({{ value }}px max).',
    'imageFormat': 'The image format is not allowed ({{ value }} only).'
}

});        
     

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>


<script>
    $(function() {
        Morris.Area({
            element: 'earning',
            data: [{
                month: 'En',
                a: '<?php $ingreso_int = intVal($sum_enero->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_enero_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Feb',
                a: '<?php $ingreso_int = intVal($sum_febrero->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_febrero_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Mar',
                a: '<?php $ingreso_int = intVal($sum_marzo->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_marzo_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Abr',
                a: '<?php $ingreso_int = intVal($sum_abril->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_abril_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'May',
                a: '<?php $ingreso_int = intVal($sum_mayo->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_mayo_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Jun',
                a: '<?php $ingreso_int = intVal($sum_junio->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_junio_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Jul',
                a: '<?php $ingreso_int = intVal($sum_julio->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_julio_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Agos',
                a: '<?php $ingreso_int = intVal($sum_agosto->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_agosto_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Sep',
                a: '<?php $ingreso_int = intVal($sum_septiembre->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_septiembre_gasto->e);
                    echo $egreso_int; ?>'
            }, {

                month: 'Oct',
                a: '<?php $ingreso_int = intVal($sum_octubre->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_octubre_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Nov',
                a: '<?php $ingreso_int = intVal($sum_noviembre->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_noviembre_gasto->e);
                    echo $egreso_int; ?>'
            }, {
                month: 'Dic',
                a: '<?php $ingreso_int = intVal($sum_diciembre->e);
                    echo $ingreso_int; ?>',
                b: '<?php $egreso_int = intVal($sum_diciembre_gasto->e);
                    echo $egreso_int; ?>'
            }],
            xkey: 'month',
            ykeys: ['a', 'b'],
            parseTime: false,
            pointSize: 3,
            fillOpacity: 0,
            labels: ['Ingresos', 'Gastos'],
            pointStrokeColors: ['#26c6da', '#ef5350'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineWidth: 3,
            hideHover: 'auto',
            lineColors: ['#26c6da', '#ef5350'],
            resize: true
        });
    });
</script>


<script>
    (function() {


        var base_url = "<?php echo base_url(); ?>";

        $('tr td #eliminar_casa').click(function(ev) {

            ev.preventDefault();

            var $tr = $(this).closest('tr');

            var numero_casa = $tr.find('td:nth-child(1)').text();
            var responsable = $tr.find('td:nth-child(2)').text();
            var id = $(this).attr('data-id');
            var self = this;

            swal({
                    title: '¿Realmente quieres eliminar el registro de la casa número: ' + id + '?',
                    text: "No Podrás Revertir Esto",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: 'Si, Eliminarlo',
                    closeOnConfirm: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: "POST",
                            url: base_url + "/Principal/Fraccionamientos/eliminar",
                            data: {
                                'id': id
                            },
                            success: function() {
                                $(self).parents('tr').remove();
                                swal("¡Hecho!", "Registro Eliminado.", "success");
                            }
                        });
                    } else {
                        swal("Cancelado", ":)", "error");
                    }
                })


        })
    })();
</script>


<script>
    $(document).ready(function() {

        $('#datos_dueno').hide();


        $('#habitada').click(function() {

            if ($("#habitada:checked").val() == 'si') {
                $("#renta").prop('disabled', false);


                $('#renta').click(function() {

                    if ($("#renta:checked").val() == 'si') {

                        $('#datos_dueno').show();

                    } else {

                        $('#datos_dueno').hide();

                    }

                });



            } else {
                $("#renta").prop('disabled', true);
                $("#renta").prop('checked', false);
                $('#datos_dueno').hide();
            }





        });
    });
</script>




</body>


<script>
function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
    return result;
}

$('#txt_visita').change(function() {


var random = randomString(8,'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

$("#codigo_a").val(random);





});



</script>

</html>