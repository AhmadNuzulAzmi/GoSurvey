<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white mr-2">
        <i class="mdi mdi-file-document"></i>
      </span> Member / My Survey
    </h3>
    <br />

    <?php foreach ($srvy as $key => $value) {
      if ($value->status == "verified") {
        foreach ($soal as $key => $value1) {
          if ($value1->id_task == $value->id_task) {
            $hsl = true;
            break;
          } else {
            $hsl = false;
          }
        }
        if ($hsl == true) { ?>
          <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <h3 class="font-weight-normal mb-3"><?php echo $value->judul_task ?><i class="mdi mdi-file-document mdi-24px float-right"></i>
                  </h3>
                  <h5 class="font-weight-normal mb-3"><?php echo $value->desk_task ?></h5>
                  <?php
                  if ($value->total_nominal != 0) { ?>
                    <h4 class="mb-4">Rp. <?= number_format($value->total_nominal, 2, ',', '.') ?></h4>
                  <?php } else { ?>
                  <?php } ?>
                  <p class="mb-4">Author <?php echo $value->nama_usr ?></p>
                  <a class="btn btn-success btn-rounded btn-fw" href="<?= site_url('/Member/Mysurvey_ctrl/tampil_jwbsurvey/' . $value->id_task); ?>">Lihat Jawaban</a>
                  &nbsp; &nbsp;
                  <?php if ($value->jmlrespon_task != 0) { ?>
                    <a class="btn btn-danger btn-rounded btn-fw" href="<?= site_url('/Member/Mysurvey_ctrl/akhir_survey/' . $value->id_task); ?>">Akhiri Survey</a>
                  <?php } else { ?>
                    <button class="btn btn-danger btn-rounded btn-fw"> Survey Berakhir </button>
                  <?php } ?>
                </div>
              </div>
            </div>

          </div>

    <?php }
      }
    } ?>


    <div class="row">
      <div class="card-body" align="center">
        <a class="btn btn-gradient-info btn-rounded btn-fw" href="<?= site_url('/Member/TaskSurvey_ctrl/waiting_survey'); ?>">+ Buat Survey</a>
        <!-- <a href="<?= site_url('/Member/Member_ctrl/halaman_task'); ?>"><button type="button" class="btn btn-gradient-primary btn-fw">Add Survey</button></a> -->
      </div>
    </div>

  </div>
  <!-- content-wrapper ends -->