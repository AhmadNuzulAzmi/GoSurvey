<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?= $title; ?>
  </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/surveyer/assets/DataTables/datatables.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/assets/images/ful.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url(); ?>assets/surveyer/assets/images/logo.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url(); ?>assets/surveyer/assets/images/ful.png" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <!-- <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?php echo base_url(); ?>assets/gambar/profil/default.png" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"> <?= $user['nama_usr']; ?> </p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?= base_url('/Member/Profil_ctrl'); ?>">
                <i class="mdi mdi-account mr-2 text-info"></i> Profil </a>

              <a class="dropdown-item" href="<?= base_url('/Member/Password_ctrl'); ?>">
                <i class="mdi mdi-key-variant mr-2 text-info"></i> Ganti Password </a>

              <a class="dropdown-item" href="<?= base_url('login/auth/logout'); ?>">
                <i class="mdi mdi-logout mr-2 text-info"></i> Logout </a>
            </div>
          </li>
          <!-- <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li> -->
          <!-- <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="<?= base_url('login/login/logout'); ?>">
              <i class="mdi mdi-power"></i>
            </a>
          </li> -->




        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">

              <div class="nav-profile-text d-flex flex-column">
                <!-- <span class="font-weight-bold mb-2"><b>Go</b>Survey</span> -->
                <!-- <span class="text-secondary text-small">Admin</span> -->
              </div>
              <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/Admin/Admin_ctrl'); ?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Data</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-library-books menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/MemberMin_ctrl'); ?>">Data Member</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Data Survey</a></li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="<?= site_url('/Admin/Saldo_ctrl'); ?>">Data Saldo</a></li> -->
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Verifikasi</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-clipboard-check menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Verifikasi_ctrl/pembayaran'); ?>">Pembayaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Verifikasi_ctrl/topup'); ?>">Topup</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Verifikasi_ctrl/tarik'); ?>">Tarik</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Verifikasi_ctrl/return'); ?>">Return</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicc" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-settings menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basicc">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('/Admin/Saldo_ctrl'); ?>">Data Rekening</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('/Admin/Harga_ctrl'); ?>">Data Saldo</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="<?= site_url('Admin/Verifikasi_ctrl/pembayaran'); ?>">Pembayaran</a></li> -->
              </ul>

            </div>

          </li>
        </ul>
      </nav>
      <!-- partial -->

      <!-- plugins:js -->
      <script src="<?php echo base_url(); ?>assets/admin/assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="<?php echo base_url(); ?>assets/admin/assets/vendors/chart.js/Chart.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="<?php echo base_url(); ?>assets/admin/assets/js/off-canvas.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/assets/js/hoverable-collapse.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/assets/js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="<?php echo base_url(); ?>assets/admin/assets/js/dashboard.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/assets/js/todolist.js"></script>
      <!-- End custom js for this page -->
</body>

</html>