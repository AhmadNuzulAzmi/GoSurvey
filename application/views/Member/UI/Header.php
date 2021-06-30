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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/surveyer/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/surveyer/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/surveyer/assets/DataTables/datatables.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/surveyer/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/surveyer/assets/images/ful.png" />
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
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
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
              </div>
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?php echo base_url(); ?>assets/gambar/profil/default.png" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?= $user['nama_usr']; ?> </p>
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

          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">



            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="mdi mdi-calendar"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="mdi mdi-settings"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="mdi mdi-link-variant"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
          </div>
          </li>


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
            <!-- <a href="#" class="nav-link"> -->
            <div class="nav-profile-image mb-4">
              <!-- <img src="<?php echo base_url(); ?>assets/surveyer/assets/images/faces/face16.jpg" alt="profile"> -->
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <!-- <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><b>GoSurvey</b></span>
                <span class="text-secondary text-small">Member</span>
              </div> -->
            <i></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/Member/Member_ctrl'); ?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/Member/Dompet_ctrl'); ?>">
              <span class="menu-title">Dompet</span>
              <i class="mdi mdi mdi-wallet menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/Member/Mysurvey_ctrl'); ?>">
              <span class="menu-title">My Survey</span>
              <i class="mdi mdi mdi-file-document menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/Member/ActiveSurvey_ctrl'); ?>">
              <span class="menu-title">Survey Aktif</span>
              <i class="mdi mdi-chart-line menu-icon"></i>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/Member/Password_ctrl'); ?>">
              <span class="menu-title">Ganti Password</span>
              <i class="mdi mdi mdi-stove menu-icon"></i>
            </a>
          </li> -->

          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
              </div>


              <a class="btn btn-gradient-info btn-rounded mt-3" href="<?= site_url('/Member/TaskSurvey_ctrl/waiting_survey'); ?>">+ Buat Survey</a>

              <div class="mt-4">

              </div>
            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->

      <!-- plugins:js -->
      <script src="<?php echo base_url(); ?>assets/surveyer/assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="<?php echo base_url(); ?>assets/surveyer/assets/vendors/chart.js/Chart.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="<?php echo base_url(); ?>assets/surveyer/assets/js/off-canvas.js"></script>
      <script src="<?php echo base_url(); ?>assets/surveyer/assets/js/hoverable-collapse.js"></script>
      <script src="<?php echo base_url(); ?>assets/surveyer/assets/js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="<?php echo base_url(); ?>assets/surveyer/assets/js/dashboard.js"></script>
      <script src="<?php echo base_url(); ?>assets/surveyer/assets/js/todolist.js"></script>

      <!-- End custom js for this page -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous">
      </script> -->

</body>

</html>