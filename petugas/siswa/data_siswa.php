<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Siswa
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Siswa</li>
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
            <a href="index.php?page=tambah_siswa" class="btn btn-primary pull-right"> Tambah</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA SISWA</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>KELAS</th>
                <th>KEJURUAN</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $dt_siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                $no = 1;
                while ($siswa = mysqli_fetch_array($dt_siswa)) {
                ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $siswa['nm_siswa']; ?></td>
                  <td><?php echo $siswa['nis']; ?></td>
                  <td><?php echo $siswa['nisn']; ?></td>
                  <td><?php echo $siswa['kelas']; ?></td>
                  <td><?php echo $siswa['kejuruan']; ?></td>
                  <td>
                    <a href="index.php?page=edit_siswa&id=<?php echo $siswa['id_siswa']; ?>" class="btn btn-xs btn-warning">Edit</a>
                    <a href="siswa/delete_siswa.php?id=<?php echo $siswa['id_siswa']; ?>" class="btn btn-xs btn-danger">Delete</a>
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