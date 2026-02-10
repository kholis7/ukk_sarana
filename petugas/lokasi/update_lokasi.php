<?php
include "../../koneksi/koneksi.php";

$id_lokasi = $_POST['id_lokasi'];
$nm_lokasi = $_POST['nm_lokasi'];

$query = "UPDATE tb_lokasi SET nm_lokasi = '$nm_lokasi' WHERE id_lokasi = '$id_lokasi' ";

$update = mysqli_query($koneksi, $query);

if ($update) {
  echo "<script>
  alert ('Data Lokasi Berhasil Diupdate');
  window.location.href = '../index.php?page=data_lokasi';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Mengupdate Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
