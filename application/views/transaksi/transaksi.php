<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("_partials/head.php")?>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view("_partials/navbar.php")?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php")?>
    <!-- /.sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<?php $this->load->view("_partials/breadcrum.php")?>
    <!-- /.content-header -->
  
    <!-- Main content -->
    
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>Nama Pemesan</th>
                  <th>Email</th>
                  <th>No. HP</th>
                  <th>Status Pemesanan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
               <?php
                    foreach ($transaksi as $data):
                    
                    
               ?>
                <tr>

                  <td> <?php echo $data->id_transaksi ?></td>
                  <td> <?php echo $data->nama_pemesan ?></td>
                  <td> <?php echo $data->email ?></td>
                  <td> <?php echo $data->no_hp ?></td>
                  <td> <?php echo $data->status_pemesanan ?></td>
                  <td>
                    <a <?php if($data->status_pemesanan=="Sudah Dibayar"){echo 'style="display:none"';}?> href="<?php echo site_url('transaksi/bayar/'.$data->id_transaksi) ?>" data-toggle="tooltip" data-placement="bottom" title="Edit agen" class="btn btn-small btn-outline-primary" > Bayar</a>
                    <a href="<?php echo site_url('transaksi/delete/'.$data->id_transaksi) ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-small btn-outline-danger"> Hapus</a>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Status Pemesanan</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>




    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $this->load->view("_partials/footer.php")?>
   <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php $this->load->view("_partials/js.php")?>
<script>
  if($("#example1").length > 0){                
        $("#example1").dataTable({order: [[0, 'desc']]});
        $("#example1").on('page.dt',function () {
            onresize(100);
        });
    }
</script>
<!-- jQuery -->
</body>
</html>
