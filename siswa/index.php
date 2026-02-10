<?php
session_start();
// Cek jika belum login
if (!isset($_SESSION['id_siswa'])) {
  header("location:../index.php");
  exit();
}

include "header.php";
include "../koneksi/koneksi.php";

echo '<div class="content-wrapper">';

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  switch ($page) {
    case 'dashboard':
      include "dashboard.php";
      break;
    case 'data_aduan':
      include "aduan/data_aduan.php";
      break;
    case 'tambah_aduan':
      include "aduan/tambah_aduan.php";
      break;
    default:
      include "dashboard.php";
      break;
  }
} else {
  include "dashboard.php";
}

echo '</div>';
include "footer.php";
