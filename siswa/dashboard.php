<?php
$id_siswa = $_SESSION['id_siswa'];

// Hitung data berdasarkan id_siswa yang login
$total    = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_aspirasi WHERE id_siswa = '$id_siswa'"));
$menunggu = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_aspirasi WHERE id_siswa = '$id_siswa' AND status = 'Menunggu'"));
$proses   = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_aspirasi WHERE id_siswa = '$id_siswa' AND status = 'Proses'"));
$selesai  = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_aspirasi WHERE id_siswa = '$id_siswa' AND status = 'Selesai'"));
?>

<section class="content-header">
  <h1> Dashboard <small>Siswa - Sarpras Care</small> </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $total; ?></h3>
          <p>Total Aduan Saya</p>
        </div>
        <div class="icon"><i class="fa fa-envelope"></i></div>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $menunggu; ?></h3>
          <p>Menunggu</p>
        </div>
        <div class="icon"><i class="fa fa-clock-o"></i></div>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><?php echo $proses; ?></h3>
          <p>Diproses</p>
        </div>
        <div class="icon"><i class="fa fa-refresh"></i></div>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $selesai; ?></h3>
          <p>Selesai</p>
        </div>
        <div class="icon"><i class="fa fa-check"></i></div>
      </div>
    </div>
  </div>
</section>