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
                   
                    <input type="hidden" name="id_user" value="<?php echo $data->id_user?>" readonly class="form-control" required>
                    <input type="hidden" name="tgl" value="<?php echo $data->created_at?>" readonly class="form-control" required>
                    <input type="hidden" name="username" value="<?php echo $data->password?>" class="form-control" required >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama_user" value="<?php echo $data->nama_user?>" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <input type="text" name="level" value="<?php echo $data->level?>" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" name="username" value="<?php echo $data->username?>" class="form-control" required >
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
