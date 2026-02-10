<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "sarana";

// Mengkoneksikan ke database
$koneksi = mysqli_connect($host, $user, $pass, $database);

//Cek Koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi Database Gagal : " . mysqli_connect_error();
  exit();
}
