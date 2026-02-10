<?php
session_start();
include "../../koneksi/koneksi.php";

if (isset($_POST['simpan'])) {
  $tgl_input  = date('Y-m-d');
  $id_siswa   = $_SESSION['id_siswa']; // Diambil otomatis dari login
  $id_sarana  = $_POST['id_sarana'];
  $id_kategori = $_POST['id_kategori'];
  $id_lokasi  = $_POST['id_lokasi'];
  $aspirasi   = $_POST['aspirasi'];
  $status     = "Menunggu";

  // Konfigurasi Upload Gambar
  $foto      = $_FILES['bukti']['name'];
  $tmp       = $_FILES['bukti']['tmp_name'];

  // Rename foto agar tidak bentrok (format: tanggal_namafile)
  $fotobaru  = date('dmYHis') . $foto;

  // Path folder img berada di luar folder siswa (../../img/)
  $path      = "../../img/" . $fotobaru;

  // Proses upload ke folder
  if (move_uploaded_file($tmp, $path)) {
    // Jika upload berhasil, masukkan data ke database
    $query = "INSERT INTO tb_aspirasi (tgl_input, id_siswa, id_sarana, id_kategori, id_lokasi, aspirasi, bukti, status) 
                  VALUES ('$tgl_input', '$id_siswa', '$id_sarana', '$id_kategori', '$id_lokasi', '$aspirasi', '$fotobaru', '$status')";

    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
      echo "<script>
            alert('Aduan Berhasil Dikirim');
            window.location.href = '../index.php?page=data_aduan';
            </script>";
    } else {
      echo "<script>
            alert('Gagal Menyimpan ke Database: " . mysqli_error($koneksi) . "');
            window.history.back();
            </script>";
    }
  } else {
    echo "<script>
        alert('Gagal Mengunggah Gambar');
        window.history.back();
        </script>";
  }
}
