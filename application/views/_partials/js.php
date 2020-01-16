<script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('/plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
<!-- AdminLTE -->

<script src="<?php echo base_url('dist/js/adminlte.js')?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('plugins/chart.js/Chart.min.js')?>"></script>
<script src="<?php echo base_url('dist/js/demo.js')?>"></script>
<script src="<?php echo base_url('dist/js/pages/dashboard3.js')?>"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>