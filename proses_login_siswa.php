<?php
session_start();
include "koneksi/koneksi.php"; // Pastikan path ke koneksi benar

if (isset($_POST['login'])) {
  $nis  = mysqli_real_escape_string($koneksi, $_POST['nis']);
  $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);

  // Mencocokkan nis dan nisn sesuai tabel tb_siswa
  $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis='$nis' AND nisn='$nisn'");
  $data  = mysqli_fetch_assoc($query);
  $cek   = mysqli_num_rows($query);

  if ($cek > 0) {
    // Menyimpan data penting ke dalam SESSION
    $_SESSION['id_siswa']   = $data['id_siswa'];
    $_SESSION['nm_siswa']   = $data['nm_siswa'];
    $_SESSION['status_login'] = "siswa";

    echo "<script>
            alert('Login Berhasil! Selamat Datang " . $data['nm_siswa'] . "');
            window.location.href = 'siswa/index.php';
        </script>";
  } else {
    echo "<script>
            alert('Login Gagal! NIS atau NISN salah.');
            window.location.href = 'index.php';
        </script>";
  }
}
