<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT *FROM tb_siswa where id_siswa = '$id'");
$data = mysqli_fetch_array($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit Data Siswa
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Data Siswa</li>
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
        <form action="siswa/update_siswa.php" method="POST" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nm_siswa" class="col-sm-2 control-label">NAMA SISWA</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="nm_siswa" name="id_siswa" value="<?php echo $data['id_siswa']; ?>">
                <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" value="<?php echo $data['nm_siswa']; ?>" placeholder="Masukan Nama Lengkap">
              </div>
            </div>
            <div class="form-group">
              <label for="nis" class="col-sm-2 control-label">NIS</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $data['nis']; ?>" placeholder="Masukan NIS">
              </div>
            </div>
            <div class="form-group">
              <label for="nisn" class="col-sm-2 control-label">NISN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data['nisn']; ?>" placeholder="Masukan NIS">
              </div>
            </div>
            <div class="form-group">
              <label for="kelas" class="col-sm-2 control-label">KELAS</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $data['kelas']; ?>" placeholder="Masukan Kelas">
              </div>
            </div>
            <div class="form-group">
              <label for="kejuruan" class="col-sm-2 control-label">KEJURUAN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="kejuruan" name="kejuruan" value="<?php echo $data['kejuruan']; ?>" placeholder="Masukan Kejuruan">
              </div>
            </div>


          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=data_siswa" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Update</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->


    </div>
  </div>
</section>