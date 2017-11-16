
  <!-- Bootstrap -->
  <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
  <!-- App -->
  <script src="<?php echo base_url('assets/js/app.js')?>"></script>  
  <script src="<?php echo base_url('assets/js/slimscroll/jquery.slimscroll.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/app.plugin.js')?>"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js "></script>
  <script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.min')?>"></script>
  
  
  <script>
   $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
        	</script>
</body>
</html>