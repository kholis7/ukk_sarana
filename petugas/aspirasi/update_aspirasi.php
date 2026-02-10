<?php
// 1. Pastikan path koneksi benar. 
// Jika file ini ada di folder petugas/aspirasi/, maka ../../koneksi/koneksi.php sudah benar.
// Namun, pastikan nama filenya benar-benar koneksi.php
include "../../koneksi/koneksi.php";

// 2. Ambil data dari POST (sesuai dengan name di form edit_aspirasi)
$id_aspirasi = $_POST['id_aspirasi'];
$status      = $_POST['status'];

// 3. Eksekusi Update
$query = "UPDATE tb_aspirasi SET status = '$status' WHERE id_aspirasi = '$id_aspirasi'";

$update = mysqli_query($koneksi, $query);

if ($update) {
  echo "<script>
    alert('Status Aspirasi Berhasil Diperbarui');
    window.location.href = '../index.php?page=data_aspirasi';
    </script>";
} else {
  echo "<script>
    alert('Gagal Memperbarui Status: " . mysqli_error($koneksi) . "');
    window.history.back();
    </script>";
}
