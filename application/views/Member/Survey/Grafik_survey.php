<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GoSurvey</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/vendors/css/vendor.bundle.base.css">
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
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <!-- <h4 class="card-title">Grafik Survey</h4>
          <canvas id="barChart" style="height: 295px; display: block; width: 590px;" width="737" height="368" class="chartjs-render-monitor"></canvas> -->


        <div class="card-body mx-auto">
          <div class="brand-logo mx-auto">
            <img src="<?php echo base_url(); ?>assets/admin/assets/images/logo.png" height="50" width="150">
          </div>
          <h2>Hai, <?= $user['email_usr'] ?></h2>
          <h3> Selamat Datang di GoSurvey.com </h3>
          <p> Terimakasih Sudah Mendaftar. Silahkan Klik Link Berikut Untuk Aktivasi Akun </p>

          <a href="<?= base_url('Member/SoalSurvey_ctrl/tampil_soal/') ?>" type="button" class="btn btn-info btn-rounded btn-fw">Aktivasi Akun</a>
        </div>
      </div>
    </div>





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