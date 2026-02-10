<?php
include "../../koneksi/koneksi.php";

$id_admin = $_POST['id_admin'];
$nm_admin = $_POST['nm_admin'];
$username = $_POST['username'];

$query = "UPDATE tb_admin SET nm_admin = '$nm_admin', username = '$username' WHERE id_admin = '$id_admin' ";

$update = mysqli_query($koneksi, $query);

if ($update) {
  echo "<script>
  alert ('Data Admin Berhasil Diupdate');
  window.location.href = '../index.php?page=data_admin';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Mengupdate Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
