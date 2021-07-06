<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <h4>Selamat datang di halaman Admin</h4>
        </span>
      </div>
    </div>
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span> Admin / Dashboard
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">

        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <h4 class="font-weight-normal mb-3">Saldo Terkumpul<i class="mdi mdi-square-inc-cash mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">Rp <?= number_format($dompet['nominal_saldo'], 2, ',', '.'); ?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <h4 class="font-weight-normal mb-3">Survey Aktif<i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?= $jml_task['id_task']; ?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <h4 class="font-weight-normal mb-3">Survey Done<i class="mdi mdi-clipboard-check mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?= $jml_taskdone['id_task']; ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div style="background-color:darkkhaki" class="card  card-img-holder text-white">
          <div class="card-body">
            <h4 class="font-weight-normal mb-3">Jumlah Pengguna<i class="mdi mdi-account-check mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?= $jml_user['id_usr']; ?></h2>
          </div>
        </div>
      </div>





    </div>


    <!-- content-wrapper ends -->