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
              <div class="card-header">Tambah Data
                <h3 class="card-title"></h3>
              </div>
              
              <form action="<?php site_url('master/menu/menu/tambah') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Menu</label>
                    <input type="text" name="id_menu" value="<?php echo $kode?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <input type="text" name="kategori" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="number" name="harga" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Foto</label>
                    <input type="file" name="image" class="form-control" required >
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- jQuery -->
</body>
</html>
