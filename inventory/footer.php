        
        <!-- Main Footer -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2019 <a href="http://prachatech.com/" target="_blank">Prachatech</a>.</strong> All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <!-- DataTables -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
	<!-- Datepicker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- Admin JS -->
    <script src="js/adminlte.min.js"></script>
    <!-- Validations -->
    <!--<script src="js/validations.js"></script>-->
	
    <!-- Data Table -->
    <script>
        $(document).ready(function(){
            $('#example1').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
            $('#example4').DataTable();
            $('#example5').DataTable();
            $('#example6').DataTable();
            $('#example7').DataTable();
        });
    </script>
	
	<script>
        //Date picker
        $(function () {
            $('#datepicker').datepicker({
              autoclose: true
            });
        });
    </script>

    <!-- Tool Tip -->
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>

</body>

</html>