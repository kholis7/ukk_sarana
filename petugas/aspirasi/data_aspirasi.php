<section class="content-header">
  <h1>
    Data Aspirasi Kerusakan
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Aspirasi</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>PELAPOR (SISWA)</th>
                <th>SARANA</th>
                <th>LOKASI</th>
                <th>ASPIRASI / KELUHAN</th>
                <th>BUKTI</th>
                <th>STATUS</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Query menggunakan JOIN sesuai struktur tabel sarana.sql
              $query = "SELECT tb_aspirasi.*, 
                               tb_siswa.nm_siswa, 
                               tb_sarana.nm_sarana, 
                               tb_kategori.nm_kategori, 
                               tb_lokasi.nm_lokasi 
                        FROM tb_aspirasi 
                        JOIN tb_siswa ON tb_aspirasi.id_siswa = tb_siswa.id_siswa
                        JOIN tb_sarana ON tb_aspirasi.id_sarana = tb_sarana.id_sarana
                        JOIN tb_kategori ON tb_aspirasi.id_kategori = tb_kategori.id_kategori 
                        JOIN tb_lokasi ON tb_aspirasi.id_lokasi = tb_lokasi.id_lokasi 
                        ORDER BY tb_aspirasi.tgl_input DESC";

              $dt_aspirasi = mysqli_query($koneksi, $query);
              $no = 1;
              while ($aspirasi = mysqli_fetch_array($dt_aspirasi)) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo date('d-m-Y', strtotime($aspirasi['tgl_input'])); ?></td>
                  <td><?php echo $aspirasi['nm_siswa']; ?></td>
                  <td><?php echo $aspirasi['nm_sarana']; ?></td>
                  <td><?php echo $aspirasi['nm_lokasi']; ?></td>
                  <td><?php echo $aspirasi['aspirasi']; ?></td>
                  <td>
                    <?php if (!empty($aspirasi['bukti'])) { ?>
                      <a href="dist/img/bukti/<?php echo $aspirasi['bukti']; ?>" target="_blank" class="btn btn-xs btn-default">Lihat Foto</a>
                    <?php } else {
                      echo '<span class="text-muted">No Photo</span>';
                    } ?>
                  </td>
                  <td>
                    <?php
                    if ($aspirasi['status'] == 'Menunggu') echo '<span class="label label-warning">Menunggu</span>';
                    elseif ($aspirasi['status'] == 'Proses') echo '<span class="label label-primary">Proses</span>';
                    else echo '<span class="label label-success">Selesai</span>';
                    ?>
                  </td>
                  <td>
                    <a href="index.php?page=edit_aspirasi&id=<?php echo $aspirasi['id_aspirasi']; ?>" class="btn btn-xs btn-warning">Edit</a>
                    <a href="aspirasi/delete_aspirasi.php?id=<?php echo $aspirasi['id_aspirasi']; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data aspirasi ini?')">Delete</a>
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