<?php
include "../../koneksi/koneksi.php";

$nm_siswa = $_POST['nm_siswa'];
$nis = $_POST['nis'];
$nisn = $_POST['nisn'];
$kelas = $_POST['kelas'];
$kejuruan = $_POST['kejuruan'];

$query = "INSERT INTO tb_siswa (nm_siswa, nis, nisn, kelas, kejuruan) VALUE ('$nm_siswa', '$nis', '$nisn', '$kelas', '$kejuruan')";

$simpan = mysqli_query($koneksi, $query);

if ($simpan) {
  echo "<script>
  alert ('Data siswa Berhasil Disimpan');
  window.location.href = '../index.php?page=data_siswa';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menyimpan Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
