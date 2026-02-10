<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_lokasi where id_lokasi = '$id'");
$data = mysqli_fetch_array($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit Data Lokasi
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Data Lokasi</li>
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
        <form action="lokasi/update_lokasi.php" method="POST" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nm_lokasi" class="col-sm-2 control-label">NAMA LOKASI</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" name="id_lokasi" value="<?php echo $data['id_lokasi']; ?>">
                <input type="text" class="form-control" id="nm_lokasi" name="nm_lokasi" value="<?php echo $data['nm_lokasi']; ?>" placeholder="Masukan Lokasi">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=data_lokasi" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Update</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->


    </div>
  </div>
</section>