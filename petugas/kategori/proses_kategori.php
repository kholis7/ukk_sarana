<?php
include "../../koneksi/koneksi.php";

$nm_kategori = $_POST['nm_kategori'];

$query = "INSERT INTO tb_kategori (nm_kategori) VALUE ('$nm_kategori')";

$simpan = mysqli_query($koneksi, $query);

if ($simpan) {
  echo "<script>
  alert ('Data Kategori Berhasil Disimpan');
  window.location.href = '../index.php?page=data_kategori';
  </script>";
} else {
  echo "<script>
  alert ('Gagal Menyimpan Data : " . mysqli_error($koneksi) . "');
  window.history.back();
  </script>";
}
