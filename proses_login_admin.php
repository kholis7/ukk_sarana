<?php
session_start();
include "koneksi/koneksi.php";

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password = mysqli_real_escape_string($koneksi, $_POST['password']);

  // Mengonversi input password menjadi MD5 sebelum dicocokkan
  $pass_md5 = md5($password);

  // Query mencari data dengan password MD5
  $query = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username' AND password='$pass_md5'");
  $cek   = mysqli_num_rows($query);
  $data  = mysqli_fetch_assoc($query);

  if ($cek > 0) {
    // Menyimpan data ke session
    $_SESSION['id_admin']     = $data['id_admin'];
    $_SESSION['nm_admin']     = $data['nm_admin'];
    $_SESSION['status_login'] = "admin";

    echo "<script>
            alert('Login Berhasil! Selamat Datang " . $data['nm_admin'] . "');
            window.location.href = 'petugas/index.php';
        </script>";
  } else {
    echo "<script>
            alert('Login Gagal! Username atau Password salah.');
            window.location.href = 'login_admin.php';
        </script>";
  }
}
