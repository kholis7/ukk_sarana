<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT *FROM tb_sarana where id_sarana = '$id'");
$data = mysqli_fetch_array($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Data Sarana
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tambah Data Sarana</li>
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
        <form action="sarana/update_sarana.php" method="POST" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nm_sarana" class="col-sm-2 control-label">NAMA SARANA</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="id_sarana" name="id_sarana" value="<?php echo $data['id_sarana']; ?>">
                <input type=" text" class="form-control" id="nm_sarana" name="nm_sarana" placeholder="Masukan Nama Sarana" value="<?php echo $data['nm_sarana']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="kategori" class="col-sm-2 control-label">KATEGORI</label>
              <div class="col-sm-10">
                <select class="form-control" name="kategori">
                  <?php
                  $dt_kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                  while ($kategori = mysqli_fetch_array($dt_kategori)) {
                    $selected = ($kategori['id_kategori'] == $data['id_kategori']) ? 'selected' : ' ';
                    echo "<option value='{$kategori['id_kategori']}' $selected>{$kategori['nm_kategori']} </option>";
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="lokasi" class="col-sm-2 control-label">LOKASI</label>
              <div class="col-sm-10">
                <select class="form-control" name="lokasi">
                  <?php
                  $dt_lokasi = mysqli_query($koneksi, "SELECT * FROM tb_lokasi");
                  while ($lokasi = mysqli_fetch_array($dt_lokasi)) {
                    $selected = ($lokasi['id_lokasi'] == $data['id_lokasi']) ? 'selected' : ' ';
                    echo "<option value='{$lokasi['id_lokasi']}' $selected>{$lokasi['nm_lokasi']} </option>";
                  } ?>
                </select>
              </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=data_sarana" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Update</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->


    </div>
  </div>
</section>