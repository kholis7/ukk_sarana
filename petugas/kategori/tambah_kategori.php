<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Data Kategori
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tambah Data Kategori</li>
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
        <form action="kategori/proses_kategori.php" method="POST" class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nm_kategori" class="col-sm-2 control-label">NAMA KATEGORI</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nm_kategori" name="nm_kategori" placeholder="Masukan Kategori">
              </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="index.php?page=data_kategori" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Simpan</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->


    </div>
  </div>
</section>