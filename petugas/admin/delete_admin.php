<?php
include "../../koneksi/koneksi.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$query = "DELETE FROM tb_admin where id_admin = '$id'";

$delete = mysqli_query($koneksi, $query);

if ($delete) {
  echo "<script>
  alert ('Data Admin Berhasil Dihapus');
  window.location.href = '../index.php?page=data_admin';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menghapus Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
