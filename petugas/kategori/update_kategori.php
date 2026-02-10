<?php
include "../../koneksi/koneksi.php";

$id_kategori = $_POST['id_kategori'];
$nm_kategori = $_POST['nm_kategori'];

$query = "UPDATE tb_kategori SET nm_kategori = '$nm_kategori' WHERE id_kategori = '$id_kategori' ";

$update = mysqli_query($koneksi, $query);

if ($update) {
  echo "<script>
  alert ('Data Kategori Berhasil Diupdate');
  window.location.href = '../index.php?page=data_kategori';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Mengupdate Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
