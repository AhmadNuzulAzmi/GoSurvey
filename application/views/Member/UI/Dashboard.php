<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row" id="proBanner">
      <div class="col-12">
        <h4><?= $this->session->flashdata('profil'); ?></h4>
        <span class="d-flex align-items-center purchase-popup">
          <h4>Selamat datang di halaman Member</h4>
        </span>
      </div>
    </div>

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span> Member / Dashboard
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
            <h4 class="font-weight-normal mb-3">Saldo<i class="mdi mdi-square-inc-cash mdi-24px float-right"></i>
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
            <?php
            $a = 0;
            // $b = 0;
            foreach ($profil as $prof) {
              $id_prof = $prof->id_usr;

              if ($id_prof == null) {
                echo "Profil Kosong";
              } else { ?>
                <?php
                foreach ($srvy as $key => $value) {
                  foreach ($soal as $key => $value1) {
                    if ($value->filter == "tidak") {
                      if ($value->jmlrespon_task != 0 and $value->id_task == $value1->id_task) { ?>

                        <?php
                        $a++;
                      }
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
                          <?php $b = count([$value->id_task]) ?>

                <?php
                          $a++;
                        }
                      }
                    }
                  }
                } ?>

                <h2 class="mb-5"><?= $a ?> </h2>
            <?php
              }
            }
            ?>



            <!-- <h2 class="mb-5"> <?= $survey['id_task']; ?> </h2> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <h4 class="font-weight-normal mb-3">Survey Tuntas<i class="mdi mdi-clipboard-check mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?= $jawab['id_jwb']; ?></h2>
          </div>
        </div>
      </div>
    </div>


  </div>


  <!-- content-wrapper ends -->