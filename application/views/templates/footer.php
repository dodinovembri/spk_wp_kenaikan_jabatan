        <!-- jQuery 3 -->
        <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bower_components/morris.js/morris.min.js') ?>"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/dist/js/pages/dashboard.js') ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/../../plugins/iCheck/icheck.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bower_components/chart.js/Chart.js') ?>"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/dist/js/pages/dashboard2.js') ?>"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
        <!-- DataTables -->
        <script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

	
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>


        <script>
            $(function() {
                $('#example1').DataTable()
                $('#example3').DataTable()
                $('#example4').DataTable()
                $('#example5').DataTable()
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': false,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': false
                })
                $('#example6').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                } );
            });
            $(document).ready(function() {
                // $('#ranking').DataTable({
                // 	"order": [1, 'desc']
                // })
                
                var t = $('#ranking').DataTable( {
                    "order": [ 6, 'desc' ]
                } );
            
                t.on( 'order.dt search.dt', function () {
                    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    } );
                } ).draw();
                table.clear();
            } );
        </script>        
        </body>

        </html>