<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Admin
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Admin</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="input-group-btn">
            <a href="index.php?page=tambah_admin" class="btn btn-primary pull-right"> Tambah</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA ADMIN</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $dt_admin = mysqli_query($koneksi, "SELECT * FROM tb_admin");
                $no = 1;
                while ($admin = mysqli_fetch_array($dt_admin)) {
                ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $admin['nm_admin']; ?></td>
                  <td><?php echo $admin['username']; ?></td>
                  <td><?php echo str_repeat("*", 8); ?></td>
                  <td>
                    <a href="index.php?page=edit_admin&id=<?php echo $admin['id_admin']; ?>" class="btn btn-xs btn-warning">Edit</a>
                    <a href="admin/delete_admin.php?id=<?php echo $admin['id_admin']; ?>" class="btn btn-xs btn-danger">Delete</a>
                  </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>