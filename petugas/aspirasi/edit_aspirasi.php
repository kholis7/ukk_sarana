<?php
$id = $_GET['id'];
// Query mengambil data aspirasi lengkap dengan join untuk informasi detail
$query = mysqli_query($koneksi, "SELECT tb_aspirasi.*, tb_siswa.nm_siswa, tb_sarana.nm_sarana 
                                 FROM tb_aspirasi 
                                 JOIN tb_siswa ON tb_aspirasi.id_siswa = tb_siswa.id_siswa
                                 JOIN tb_sarana ON tb_aspirasi.id_sarana = tb_sarana.id_sarana
                                 WHERE id_aspirasi = '$id'");
$data = mysqli_fetch_array($query);
?>

<section class="content-header">
  <h1>
    Update Status Aspirasi
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Status</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Laporan: <?php echo $data['nm_sarana']; ?></h3>
        </div>
        <form action="aspirasi/update_aspirasi.php" method="POST" class="form-horizontal">
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-2 control-label">PELAPOR</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $data['nm_siswa']; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">ISI ASPIRASI</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" readonly><?php echo $data['aspirasi']; ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">FOTO BUKTI</label>
              <div class="col-sm-10">
                <?php if (!empty($data['bukti'])) { ?>
                  <img src="../img/<?php echo $data['bukti']; ?>" class="img-responsive img-thumbnail" style="max-width: 300px;">
                  <br><br>
                  <a href="../img/<?php echo $data['bukti']; ?>" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-search-plus"></i> Lihat Foto Ukuran Penuh</a>
                <?php } else { ?>
                  <p class="form-control-static text-muted"><em>Tidak ada foto bukti yang diunggah.</em></p>
                <?php } ?>
              </div>
            </div>

            <hr>

            <div class="form-group">
              <label for="status" class="col-sm-2 control-label">STATUS PROSES</label>
              <div class="col-sm-10">
                <input type="hidden" name="id_aspirasi" value="<?php echo $data['id_aspirasi']; ?>">
                <select class="form-control" name="status" required>
                  <option value="Menunggu" <?php if ($data['status'] == 'Menunggu') echo 'selected'; ?>>Menunggu</option>
                  <option value="Proses" <?php if ($data['status'] == 'Proses') echo 'selected'; ?>>Proses</option>
                  <option value="Selesai" <?php if ($data['status'] == 'Selesai') echo 'selected'; ?>>Selesai</option>
                </select>
                <p class="help-block">*Perbarui status ini setelah Anda melakukan pengecekan atau perbaikan.</p>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <a href="index.php?page=data_aspirasi" class="btn btn-default">Kembali</a>
            <button type="submit" class="btn btn-info pull-right">Simpan Perubahan Status</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>