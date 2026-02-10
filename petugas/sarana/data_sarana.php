<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Sarana
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Sarana</li>
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
            <a href="index.php?page=tambah_sarana" class="btn btn-primary pull-right"> Tambah</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA SARANA</th>
                <th>KATEGORI</th>
                <th>LOKASI</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $dt_sarana = mysqli_query($koneksi, "SELECT tb_sarana.*, tb_kategori.nm_kategori, tb_lokasi.nm_lokasi FROM tb_sarana JOIN tb_kategori ON tb_sarana.id_kategori = tb_kategori.id_kategori JOIN tb_lokasi ON tb_sarana.id_lokasi = tb_lokasi.id_lokasi ");
                $no = 1;
                while ($sarana = mysqli_fetch_array($dt_sarana)) {
                ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $sarana['nm_sarana']; ?></td>
                  <td><?php echo $sarana['nm_kategori']; ?></td>
                  <td><?php echo $sarana['nm_lokasi']; ?></td>
                  <td>
                    <a href="index.php?page=edit_sarana&id=<?php echo $sarana['id_sarana']; ?>" class="btn btn-xs btn-warning">Edit</a>
                    <a href="sarana/delete_sarana.php?id=<?php echo $sarana['id_sarana']; ?>" class="btn btn-xs btn-danger">Delete</a>
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