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
              <h3 class="card-title"><a href="<?php echo site_url('master/menu/menu/tambah') ?>">Tambah Data</a> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Menu</th>
                  <th>Nama Menu</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Foto</th>
                  <th>Deskripsi</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Update</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
               <?php
                    foreach ($menu as $data):
                    
                    
               ?>
                <tr>

                  <td> <?php echo $data->id_menu ?></td>
                  <td> <?php echo $data->nama_menu ?></td>
                  <td> <?php echo $data->kategori ?></td>
                  <td> <?php echo $data->harga ?></td>
                  <td> <img width="70px" height="70px" src="<?php echo base_url('upload/menu/');?><?php echo $data->foto;?>" alt=""></td>
                  <td> <?php echo $data->deskripsi ?></td>
                  <td> <?php echo $data->created_at ?></td>
                  <td> <?php echo $data->update_At ?></td>
                  <td>
                  <a href="<?php echo site_url('master/menu/menu/edit/'.$data->id_menu) ?>" data-toggle="tooltip" data-placement="bottom" title="Edit agen"
                                                                        class="btn btn-small btn-outline-primary" > Edit</a>
                                                                        <a href="<?php echo site_url('master/menu/menu/delete/'.$data->id_menu) ?>" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-small btn-outline-danger"> Hapus</a>
                                                                
                      
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Kode Menu</th>
                  <th>Nama Menu</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Foto</th>
                  <th>Deskripsi</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Update</th>
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
