<section class="content-header">
  <h1>
    Buat Aduan Kerusakan
    <small>Sarpras Care</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tambah Aduan</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
        <form action="aduan/proses_aduan.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-2 control-label">NAMA SARANA</label>
              <div class="col-sm-10">
                <select class="form-control" name="id_sarana" required>
                  <option value="">- Pilih Sarana -</option>
                  <?php
                  $dt_sarana = mysqli_query($koneksi, "SELECT * FROM tb_sarana");
                  while ($sarana = mysqli_fetch_array($dt_sarana)) {
                  ?>
                    <option value="<?php echo $sarana['id_sarana']; ?>"><?php echo $sarana['nm_sarana']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">KATEGORI</label>
              <div class="col-sm-10">
                <select class="form-control" name="id_kategori" required>
                  <?php
                  $dt_kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                  while ($kategori = mysqli_fetch_array($dt_kategori)) {
                  ?>
                    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nm_kategori']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">LOKASI</label>
              <div class="col-sm-10">
                <select class="form-control" name="id_lokasi" required>
                  <?php
                  $dt_lokasi = mysqli_query($koneksi, "SELECT * FROM tb_lokasi");
                  while ($lokasi = mysqli_fetch_array($dt_lokasi)) {
                  ?>
                    <option value="<?php echo $lokasi['id_lokasi']; ?>"><?php echo $lokasi['nm_lokasi']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">DETAIL ADUAN</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="aspirasi" rows="3" placeholder="Jelaskan detail kerusakan sarana..." required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">FOTO BUKTI</label>
              <div class="col-sm-10">
                <input type="file" name="bukti" class="form-control" accept="image/*" required>
                <p class="help-block">Pastikan foto terlihat jelas.</p>
              </div>
            </div>

          </div>
          <div class="box-footer">
            <a href="index.php?page=data_aduan" class="btn btn-default">Cancel</a>
            <button type="submit" name="simpan" class="btn btn-info pull-right">Kirim Aduan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>