<script src="assets/surveyer/assets/js/sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white mr-2">
        <i class="mdi mdi-pen"></i>
      </span> Member / Buat Survey
    </h3>
    <br /><br />



    <!-- add tabel survey -->
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Riwayat Pembuatan Survey</h4>
            <br />
            <div class="table-responsive">
              <table class="table">
                <thead align="center">
                  <tr>
                    <th> No </th>
                    <th> Judul</th>
                    <th> Nominal</th>
                    <th> Pembayaran</th>
                    <th> Bukti</th>
                    <th> Status</th>
                    <th> Aksi</th>
                  </tr>
                </thead>

                <?php foreach ($srvy as $key => $value) { ?>
                  <tbody align="center">
                    <tr>
                      <td><?php echo $key + 1 ?></td>
                      <td><?php echo $value->judul_task ?></td>
                      <td>Rp. <?php echo  number_format($value->total_nominal, 2, ',', '.'); ?></td>
                      <td> <?php echo $value->pembayaran ?> </td>
                      <?php
                      if ($value->pembayaran == "Saldo") { ?>
                        <td style="color: red;"> ------ </td>
                      <?php } else { ?>
                        <td> <img src="<?= base_url('assets/gambar/pembayaran/') . $value->bukti ?>" /></td>
                      <?php } ?>
                      <?php

                      if ($value->status == "verified") { ?>
                        <td style="color: seagreen;"> <strong><?php echo $value->status ?><strong></td>
                        <td>
                          <?php foreach ($soal as $key => $value1) {
                            // $test = true;
                            if ($value1->id_task == $value->id_task) {
                              // echo ' <a href="' . base_url('Member/SoalSurvey_ctrl/index/' . $value->id_task) . '" type="button" class="btn btn-info btn-rounded btn-fw">Soal Sudah Di Tambahkan</label></a>';
                              $hsl = true;
                              break;
                            } else {
                              $hsl = false;
                            }

                          ?>
                            <div>
                            <?php }
                          if ($hsl == true) {
                            echo ' <a href="#" type="button" class="btn btn-success btn-rounded  btn-fw">Soal Selesai</label></a>';
                          } else {
                            echo ' <a href="' . base_url('Member/SoalSurvey_ctrl/index/' . $value->id_task) . '" type="button" class="btn btn-info btn-rounded btn-fw">Buat Soal</label></a>';
                          }
                            ?>
                        </td>

                      <?php
                      } elseif ($value->status == "unverified") { ?>
                        <th style="color: red;"> <?php echo $value->status ?> </th>
                        <td>
                          <button class="btn btn-danger btn-rounded btn-fw"> Tunggu </button>
                        </td>
                      <?php } ?>
            </div>



            </tr>
          <?php } ?>


          </tbody>
          </table>
          </div>
        </div>
      </div>
      <br /><br />
      <center>
        <a class="btn btn-gradient-info btn-rounded btn-fw" href="<?= site_url('/Member/TaskSurvey_ctrl'); ?>">+ Buat Survey</a>
        <!-- <a href="<?= site_url('/Member/Member_ctrl/halaman_task'); ?>"><button type="button" class="btn btn-gradient-primary btn-fw">Add Survey</button></a> -->
      </center>
    </div>
  </div>
</div>




<!-- end tabel survey -->

<!-- <br/><br/>
    <div>
    <button id="btn_hapus"> Coba </button> 
    </div> -->



<script>
  const btn = document.getElementById('btn_hapus');
  btn.addEventListener('click', function() {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
  })
</script>