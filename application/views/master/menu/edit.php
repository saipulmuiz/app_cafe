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
              
              <form action="<?php site_url('master/menu/menu/edi') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Menu</label>
                    <input type="text" name="id_menu" value="<?php echo $data->id_menu?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" value="<?php echo $data->nama_menu?>" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <input type="text" name="kategori" value="<?php echo $data->kategori?>" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="number" name="harga" value="<?php echo $data->harga?>" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <input type="text" name="deskripsi" value="<?php echo $data->deskripsi?>" class="form-control" required >
                    <input type="hidden" name="oldimage" value="<?php echo $data->foto?>">
                    <input type="hidden" name="tgl" value="<?php echo $data->created_at?>" readonly class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Foto</label>
                    <input type="file" name="image" class="form-control" >
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
