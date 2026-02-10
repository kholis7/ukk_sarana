<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori where id_kategori = '$id'");
$data = mysqli_fetch_array($query);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit Data Kategori
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Data Kategori</li>
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
        <form action="kategori/update_kategori.php" method="POST" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nm_kategori" class="col-sm-2 control-label">NAMA KATEGORI</label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
                <input type="text" class="form-control" id="nm_kategori" name="nm_kategori" value="<?php echo $data['nm_kategori']; ?>" placeholder="Masukan Kategori">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=data_kategori" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Update</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->


    </div>
  </div>
</section>