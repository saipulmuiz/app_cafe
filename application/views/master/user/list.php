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
            <div class="card-header">
              <h3 class="card-title"><a href="<?php echo site_url('master/user/user/tambah') ?>">Tambah Data</a> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Level</th>
                  <th>Username</th>
                  <th>created_at</th>
                  <th>update_At</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
               <?php
               $nomor = 0;
                    foreach ($user as $data):
                    $nomor++;
                    
               ?>
                <tr>

                  <td> <?php echo $nomor ?></td>
                  <td> <?php echo $data->nama_user ?></td>
                  <td> <?php echo $data->level ?></td>
                  <td> <?php echo $data->username ?></td>
                  <td> <?php echo $data->created_at ?></td>
                  <td> <?php echo $data->update_at ?></td>
                  <td>
                  <a href="<?php echo site_url('master/user/user/edit/'.$data->id_user) ?>" data-toggle="tooltip" data-placement="bottom" title="Edit agen"
                                                                        class="btn btn-small btn-outline-primary" > Edit</a>
                                                                        <a href="<?php echo site_url('master/user/user/delete/'.$data->id_user) ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-small btn-outline-danger"> Hapus</a>
                                                                
                      
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
               
                <th>No</th>
                  <th>Nama User</th>
                  <th>Level</th>
                  <th>Username</th>
                  <th>created_at</th>
                  <th>update_At</th>
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
<!-- jQuery -->
</body>
</html>
