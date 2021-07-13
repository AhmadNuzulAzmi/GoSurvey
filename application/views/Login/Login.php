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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?php echo base_url(); ?>assets/admin/assets/images/logo.png">
              </div>

              <h4>Welcome To Form Login</h4>
              <h6 class="font-weight-light">Sign in to continue!</h6>

              <?= $this->session->flashdata('message'); ?>

              <form class="pt-3" action="<?= base_url('login/auth'); ?>" method="POST">

                <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">SIGN IN</a>
                </div>

              </form>
              <div class="text-center mt-4 font-weight-light"> Belum Punya Akun ? <a href="<?= base_url('Login/Auth/registration'); ?>">Buat</a>
                <br /><br />
                Lupa Password ? <a href="<?= base_url('Login/Auth/forgotPassword'); ?>">Reset</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/admin/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/admin/assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/assets/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>