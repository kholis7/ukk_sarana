<?php
include "../../koneksi/koneksi.php";

$nm_lokasi = $_POST['nm_lokasi'];

$query = "INSERT INTO tb_lokasi (nm_lokasi) VALUE ('$nm_lokasi')";

$simpan = mysqli_query($koneksi, $query);

if ($simpan) {
  echo "<script>
  alert ('Data Lokasi Berhasil Disimpan');
  window.location.href = '../index.php?page=data_lokasi';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menyimpan Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
