<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="<?php echo (!isset($_GET['page'])) ? 'active' : ' '; ?>">
            <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          </li>
          <li class="treeview <?php echo (isset($_GET['page']) && in_array($_GET['page'], ['data_admin', 'tambah_admin', 'edit_admin', 'data_siswa', 'tambah_siswa', 'edit_siswa', 'data_kategori', 'tambah_kategori', 'edit_kategori', 'data_lokasi', 'tambah_lokasi', 'edit_lokasi', 'data_sarana', 'tambah_sarana', 'edit_sarana'])) ? 'active' : ' '; ?>">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Master Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php echo (isset($_GET['page']) && ($_GET['page'] == 'data_admin' || $_GET['page'] == 'tambah_admin' || $_GET['page'] == 'edit_admin')) ? 'active' : ' '; ?>">
                <a href="index.php?page=data_admin"><i class="fa fa-circle-o"></i> Data Admin</a>
              </li>
              <li class="<?php echo (isset($_GET['page']) && ($_GET['page'] == 'data_siswa' || $_GET['page'] == 'tambah_siswa' || $_GET['page'] == 'edit_siswa')) ? 'active' : ' '; ?>">
                <a href="index.php?page=data_siswa"><i class="fa fa-circle-o"></i> Data Siswa</a>
              </li>
              <li class="<?php echo (isset($_GET['page']) && ($_GET['page'] == 'data_kategori' || $_GET['page'] == 'tambah_kategori' || $_GET['page'] == 'edit_kategori')) ? 'active' : ' '; ?>">
                <a href="index.php?page=data_kategori"><i class="fa fa-circle-o"></i> Data Kategori</a>
              </li>
              <li class="<?php echo (isset($_GET['page']) && ($_GET['page'] == 'data_lokasi' || $_GET['page'] == 'tambah_lokasi' || $_GET['page'] == 'edit_lokasi')) ? 'active' : ' '; ?>">
                <a href="index.php?page=data_lokasi"><i class="fa fa-circle-o"></i> Data Lokasi</a>
              </li>
              <li class="<?php echo (isset($_GET['page']) && ($_GET['page'] == 'data_sarana' || $_GET['page'] == 'tambah_sarana' || $_GET['page'] == 'edit_sarana')) ? 'active' : ' '; ?>">
                <a href="index.php?page=data_sarana"><i class="fa fa-circle-o"></i> Data Sarana</a>
              </li>
            </ul>
          </li>
          <li class="<?php echo (isset($_GET['page']) && ($_GET['page'] == 'data_aspirasi' || $_GET['page'] == 'edit_aspirasi')) ? 'active' : ' '; ?>">
            <a href="index.php?page=data_aspirasi"><i class="fa fa-dashboard"></i> <span>Aspirasi</span></a>
          </li>
          <li><a href="#"><i class="fa fa-dashboard"></i> <span>Laporan</span></a></li>
          <li><a href="#"><i class="fa fa-dashboard"></i> <span>Logout</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>