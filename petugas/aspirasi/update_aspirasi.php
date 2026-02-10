<?php
include "../../koneksi/koneksi.php";

$id_sarana = $_POST['id_sarana'];
$nm_sarana = $_POST['nm_sarana'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];

$query = "UPDATE tb_sarana SET nm_sarana = '$nm_sarana', id_kategori = '$kategori', id_lokasi = '$lokasi' WHERE id_sarana = '$id_sarana'";

$update = mysqli_query($koneksi, $query);

if ($update) {
  echo "<script>
  alert ('Data Sarana Berhasil Diupdate');
  window.location.href = '../index.php?page=data_sarana';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menyimpan Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
