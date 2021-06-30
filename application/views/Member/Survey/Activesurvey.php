<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white mr-2">
        <i class="mdi mdi-chart-line"></i>
      </span> Member / Survey Aktif
    </h3>
    <br />
    <h4><?= $this->session->flashdata('profil'); ?></h4>
    <?php

    foreach ($profil as $prof) {
      $id_prof = $prof->id_usr;
      // var_dump($id_prof);
      // die;


      if ($id_prof == null) {
        echo "Profil Kosong";
      } else { ?>
        <?php
        foreach ($srvy as $key => $value) {
          foreach ($soal as $key => $value1) {
            if ($value->filter == "tidak") {
              if ($value->jmlrespon_task != 0 and $value->id_task == $value1->id_task) { ?>
                <div class="row">
                  <div class="col-md-12 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                      <div class="card-body">
                        <h3 class="font-weight-normal mb-3"><?php echo $value->judul_task ?><i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h3>
                        <h5 class="font-weight-normal mb-3"><?php echo $value->desk_task ?></h5>
                        <h4 class="mb-4">Rp. <?= number_format($value->nominal_task, 2, ',', '.') ?></h4>
                        <p class="mb-4">Author <?php echo $value->nama_usr ?></p>

                        <a href="<?= base_url('Member/SoalSurvey_ctrl/tampil_soal/' . $value->id_task) ?>" type="button" class="btn btn-info btn-rounded btn-fw">Jawab Survey</a>

                      </div>
                    </div>
                  </div>
                </div>

                <?php }
            } elseif ($value->filter == "ya") {
              foreach ($filter as $filt) {
                $gol_a = $prof->gol_darah;
                $gol_b = $filt->gol_darah;
                $darah = strpos($gol_b, $gol_a);

                $roko_a = $prof->merokok;
                $roko_b = $filt->merokok;
                $rokok = strpos($roko_b, $roko_a);

                $jk_a = $prof->jenkel;
                $jk_b = $filt->jenkel;
                $jen_kel = strpos($jk_b, $jk_a);

                if (
                  $value->jmlrespon_task != 0 and $value->id_task == $value1->id_task and
                  $prof->pekerjaan == $filt->pekerjaan and $prof->jml_penghasilan == $filt->penghasilan
                  and $rokok  and $jen_kel and $darah
                ) { ?>
                  <div class="row">
                    <div class="col-md-12 stretch-card grid-margin">
                      <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                          <h3 class="font-weight-normal mb-3"><?php echo $value->judul_task ?><i class="mdi mdi-chart-line mdi-24px float-right"></i>
                          </h3>
                          <h5 class="font-weight-normal mb-3"><?php echo $value->desk_task ?></h5>
                          <h4 class="mb-5">Rp. <?= number_format($value->nominal_task, 2, ',', '.') ?></h4>
                          <p>Author <?php echo $value->nama_usr ?></p>

                          <a href="<?= base_url('Member/SoalSurvey_ctrl/tampil_soal/' . $value->id_task) ?>" type="button" class="btn btn-info btn-rounded btn-fw">Jawab Survey</a>

                        </div>
                      </div>
                    </div>
                  </div>
    <?php
                }
              }
            }
          }
        }
      }
    }
    ?>
  </div>









  <!-- content-wrapper ends -->