<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Lokasi
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Lokasi</li>
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
            <a href="index.php?page=tambah_lokasi" class="btn btn-primary pull-right"> Tambah</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA LOKASI</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $dt_lokasi = mysqli_query($koneksi, "SELECT * FROM tb_lokasi");
                $no = 1;
                while ($lokasi = mysqli_fetch_array($dt_lokasi)) {
                ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $lokasi['nm_lokasi']; ?></td>
                  <td>
                    <a href="index.php?page=edit_lokasi&id=<?php echo $lokasi['id_lokasi']; ?>" class="btn btn-xs btn-warning">Edit</a>
                    <a href="lokasi/delete_lokasi.php?id=<?php echo $lokasi['id_lokasi']; ?>" class="btn btn-xs btn-danger">Delete</a>
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