<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Data Lokasi
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tambah Data Lokasi</li>
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
        <form action="lokasi/proses_lokasi.php" method="POST" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nm_lokasi" class="col-sm-2 control-label">NAMA LOKASI</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nm_lokasi" name="nm_lokasi" placeholder="Masukan Lokasi">
              </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=data_lokasi" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Simpan</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->


    </div>
  </div>
</section>