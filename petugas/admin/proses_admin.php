<?php
include "../../koneksi/koneksi.php";

$nm_admin = $_POST['nm_admin'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "INSERT INTO tb_admin (nm_admin, username, password) VALUE ('$nm_admin', '$username', '$password')";

$simpan = mysqli_query($koneksi, $query);

if ($simpan) {
  echo "<script>
  alert ('Data Admin Berhasil Disimpan');
  window.location.href = '../index.php?page=data_admin';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menyimpan Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
