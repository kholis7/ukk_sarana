<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Aspirasi
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Aspirasi</li>
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
            <a href="index.php?page=tambah_aspirasi" class="btn btn-primary pull-right"> Tambah</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA ASPIRASI</th>
                <th>KATEGORI</th>
                <th>LOKASI</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $dt_aspirasi = mysqli_query($koneksi, "SELECT tb_aspirasi.*, tb_kategori.nm_kategori, tb_lokasi.nm_lokasi FROM tb_aspirasi JOIN tb_kategori ON tb_aspirasi.id_kategori = tb_kategori.id_kategori JOIN tb_lokasi ON tb_aspirasi.id_lokasi = tb_lokasi.id_lokasi ");
                $no = 1;
                while ($aspirasi = mysqli_fetch_array($dt_aspirasi)) {
                ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $aspirasi['nm_aspirasi']; ?></td>
                  <td><?php echo $aspirasi['nm_kategori']; ?></td>
                  <td><?php echo $aspirasi['nm_lokasi']; ?></td>
                  <td>
                    <a href="index.php?page=edit_aspirasi&id=<?php echo $aspirasi['id_aspirasi']; ?>" class="btn btn-xs btn-warning">Edit</a>
                    <a href="aspirasi/delete_aspirasi.php?id=<?php echo $aspirasi['id_aspirasi']; ?>" class="btn btn-xs btn-danger">Delete</a>
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