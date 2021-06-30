<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white mr-2">
        <i class="mdi mdi mdi-wallet"></i>
      </span> Member / Dompet
    </h3>
    <br /><br />

    <div class="row">
      <div class="col-md-12 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <h4 class="font-weight-normal mb-3">Saldo<i class="mdi mdi-square-inc-cash mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">Rp. <?= number_format($dompet['nominal_saldo'], 2, ',', '.'); ?></h2>
            <a class="btn btn-success btn-rounded btn-fw" href="<?= site_url('/Member/Dompet_ctrl/topup'); ?>">+ Top Up</a> &nbsp; &nbsp; &nbsp;
            <a class="btn btn-danger btn-rounded btn-fw" href="<?= site_url('/Member/Dompet_ctrl/tarik'); ?>">- Tarik</a>
          </div>
        </div>
      </div>

    </div>


    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Riwayat Transaksi</h4>
            <div class="table-responsive">
              <table class="table" id="data_tables">
                <thead align="center">
                  <tr class="table-active">
                    <th> No </th>
                    <th> Transaksi</th>
                    <th> Nominal </th>
                    <th> Tanggal Transaksi</th>
                    <th> Bukti Transaksi</th>
                    <th> Status Transaksi</th>
                  </tr>
                </thead>

                <tbody align="center">
                  <?php
                  foreach ($rwyt as $key => $value) {
                  ?>
                    <tr height="60px">
                      <td><?php echo $key + 1 ?></td>
                      <td><?php echo $value->transaksi ?></td>

                      <?php
                      if ($value->transaksi == "Topup" || $value->transaksi == "Jawab Survey" || $value->transaksi == "Return Dana") { ?>
                        <td style="color: seagreen;"><b> + <?php echo $value->nominal_trans ?> </b></td>
                      <?php
                      } else { ?>
                        <td style="color: red;"><b> - <?php echo $value->nominal_trans ?></b></td>
                      <?php } ?>

                      <td><?php echo date('d F Y', $value->wkt_trans) ?></td>
                      <?php
                      if ($value->bukti == "") { ?>
                        <td style="color: red;"> ------ </td>
                      <?php
                      } else { ?>
                        <td><img src="<?= base_url('assets/gambar/dompet/') . $value->bukti ?>" /></td>
                      <?php }
                      if ($value->status == "Unverified") { ?>
                        <td style="color: red;"><b> Proses </b></td>
                      <?php } elseif ($value->status == "Verified") { ?>
                        <td style="color: seagreen;"><b> Berhasil </b></td>
                      <?php
                      }
                      ?>


                    </tr>
                  <?php } ?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

  </script>