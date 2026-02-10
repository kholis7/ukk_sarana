<section class="content-header">
  <h1>
    Data Aduan Saya
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Aduan</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="input-group-btn">
            <a href="index.php?page=tambah_aduan" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Aduan</a>
          </div>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>SARANA</th>
                <th>LOKASI</th>
                <th>ISI ADUAN</th>
                <th>BUKTI</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $id_siswa = $_SESSION['id_siswa'];
              // Query Join untuk mengambil data lengkap aduan milik siswa yang login
              $query = "SELECT tb_aspirasi.*, tb_sarana.nm_sarana, tb_lokasi.nm_lokasi 
                        FROM tb_aspirasi 
                        JOIN tb_sarana ON tb_aspirasi.id_sarana = tb_sarana.id_sarana 
                        JOIN tb_lokasi ON tb_aspirasi.id_lokasi = tb_lokasi.id_lokasi 
                        WHERE tb_aspirasi.id_siswa = '$id_siswa' 
                        ORDER BY tb_aspirasi.tgl_input DESC";

              $dt_aduan = mysqli_query($koneksi, $query);
              $no = 1;
              while ($aduan = mysqli_fetch_array($dt_aduan)) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo date('d-m-Y', strtotime($aduan['tgl_input'])); ?></td>
                  <td><?php echo $aduan['nm_sarana']; ?></td>
                  <td><?php echo $aduan['nm_lokasi']; ?></td>
                  <td><?php echo $aduan['aspirasi']; ?></td>
                  <td>
                    <?php if (!empty($aduan['bukti'])) { ?>
                      <a href="../img/<?php echo $aduan['bukti']; ?>" target="_blank">
                        <img src="../img/<?php echo $aduan['bukti']; ?>" width="60" style="border: 1px solid #ddd; padding: 2px;">
                      </a>
                    <?php } else {
                      echo "-";
                    } ?>
                  </td>
                  <td>
                    <?php
                    if ($aduan['status'] == 'Menunggu') {
                      echo '<span class="label label-warning">Menunggu</span>';
                    } elseif ($aduan['status'] == 'Proses') {
                      echo '<span class="label label-primary">Proses</span>';
                    } else {
                      echo '<span class="label label-success">Selesai</span>';
                    }
                    ?>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>