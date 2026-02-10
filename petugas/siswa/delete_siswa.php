<?php
include "../../koneksi/koneksi.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$query = "DELETE FROM tb_siswa where id_siswa = '$id'";

$delete = mysqli_query($koneksi, $query);

if ($delete) {
  echo "<script>
  alert ('Data siswa Berhasil Dihapus');
  window.location.href = '../index.php?page=data_siswa';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menghapus Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
