<?php
include "../../koneksi/koneksi.php";

$id_siswa = $_POST['id_siswa'];
$nm_siswa = $_POST['nm_siswa'];
$nis = $_POST['nis'];
$nisn = $_POST['nisn'];
$kelas = $_POST['kelas'];
$kejuruan = $_POST['kejuruan'];

$query = "UPDATE tb_siswa SET nm_siswa = '$nm_siswa', nis = '$nis', nisn = '$nisn',  kelas = '$kelas',  kejuruan = '$kejuruan'  WHERE id_siswa = '$id_siswa' ";

$update = mysqli_query($koneksi, $query);

if ($update) {
  echo "<script>
  alert ('Data siswa Berhasil Diupdate');
  window.location.href = '../index.php?page=data_siswa';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Mengupdate Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
