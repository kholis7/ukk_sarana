<?php
include "../../koneksi/koneksi.php";

$nm_sarana = $_POST['nm_sarana'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];

$query = "INSERT INTO tb_sarana (nm_sarana, id_kategori, id_lokasi) VALUE ('$nm_sarana', '$kategori', '$lokasi')";

$simpan = mysqli_query($koneksi, $query);

if ($simpan) {
  echo "<script>
  alert ('Data Sarana Berhasil Disimpan');
  window.location.href = '../index.php?page=data_sarana';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menyimpan Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
