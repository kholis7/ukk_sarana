<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT *FROM tb_admin where id_admin = '$id'");
$data = mysqli_fetch_array($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit Data Admin
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Data Admin</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-xs-12">

      <!-- Horizontal Form -->
      <div class="box box-info">
        <!-- form start -->
        <form action="admin/update_admin.php" method="POST" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nm_admin" class="col-sm-2 control-label">NAMA ADMIN</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="nm_admin" name="id_admin" value="<?php echo $data['id_admin']; ?>" placeholder="Masukan Nama Lengkap">
                <input type="text" class="form-control" id="nm_admin" name="nm_admin" value="<?php echo $data['nm_admin']; ?>" placeholder="Masukan Nama Lengkap">
              </div>
            </div>
            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">USERNAME</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username']; ?>" placeholder="Masukan Username">
              </div>
            </div>


          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=data_admin" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Update</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->


    </div>
  </div>
</section>