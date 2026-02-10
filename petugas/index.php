<?php
include "header.php";
include "../koneksi/koneksi.php";

echo '<div class="content-wrapper">';
//Menangkap Parameter URL ($_GET['page'])
if (isset($_GET['page'])) {
  $page = $_GET['page'];

  switch ($page) {
    case 'data_admin':
      include "admin/data_admin.php";
      break;
    case 'tambah_admin':
      include "admin/tambah_admin.php";
      break;
    case 'edit_admin':
      include "admin/edit_admin.php";
      break;
    case 'data_siswa':
      include "siswa/data_siswa.php";
      break;
    case 'tambah_siswa':
      include "siswa/tambah_siswa.php";
      break;
    case 'edit_siswa':
      include "siswa/edit_siswa.php";
      break;
    case 'data_kategori':
      include "kategori/data_kategori.php";
      break;
    case 'tambah_kategori':
      include "kategori/tambah_kategori.php";
      break;
    case 'edit_kategori':
      include "kategori/edit_kategori.php";
      break;
    case 'data_lokasi':
      include "lokasi/data_lokasi.php";
      break;
    case 'tambah_lokasi':
      include "lokasi/tambah_lokasi.php";
      break;
    case 'edit_lokasi':
      include "lokasi/edit_lokasi.php";
      break;
    case 'data_sarana':
      include "sarana/data_sarana.php";
      break;
    case 'tambah_sarana':
      include "sarana/tambah_sarana.php";
      break;
    case 'edit_sarana':
      include "sarana/edit_sarana.php";
      break;
    case 'data_aspirasi':
      include "aspirasi/data_aspirasi.php";
      break;
    case 'edit_aspirasi':
      include "aspirasi/edit_aspirasi.php";
      break;
    default:
      include "dashboard.php";
      break;
  }
} else {
  include "dashboard.php";
}
echo '</div>';
include 'footer.php';
