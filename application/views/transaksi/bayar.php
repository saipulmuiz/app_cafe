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
     
            <div class="card-body">
            <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">Edit Data
                <h3 class="card-title"></h3>
              </div>
              
              <form action="<?php site_url('transaksi/bayar') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Transaksi</label>
                    <input type="text" name="id_transaksi" value="<?php echo $data->id_transaksi?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Transaksi</label>
                    <input type="text" name="nama_pemesan" value="<?php echo $data->nama_pemesan?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" value="<?php echo $data->email?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. HP</label>
                    <input type="text" name="no_hp" value="<?php echo $data->no_hp?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Bayar</label>
                    <input type="text" name="total" id="total" value="<?php echo $data->total?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Bayar</label>
                    <input type="text" name="bayar" id="bayar" oninput="jumlahKembalian()" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kembalian</label>
                    <input type="text" name="kembali" readonly class="form-control" required>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Proses</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

         
          <!-- /.card -->
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
<script type="text/javascript">
  function jumlahKembalian(){
        let num1 = document.getElementsByName("total")[0].value;
        let num2 = document.getElementsByName("bayar")[0].value;
        let sum = Number(num2) - Number(num1);
        document.getElementsByName("kembali")[0].value = sum;
    }
</script>
<!-- jQuery -->
</body>
</html>
