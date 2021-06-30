<div class="main-panel">
<div class="content-wrapper">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-info text-white mr-2">
                  <i class="mdi mdi-database"></i>
                </span> Admin / Data Survey
              </h3>
              <br/>

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Survey</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Judul </th>
                          <th> Deskripsi </th>
                          <th> Jumlah Responden </th>
                          <th> Nominal </th>
                          <th> Action </th>
                        </tr>
                      </thead>

                      <?php foreach ($srv as $key => $value) { ?>

                      <tbody>
                        <tr>
                          <td class="py-1"><?php echo $key + 1 ?></td>
                          <td class="py-1"><?php echo $value->judul_task ?></td>
                          <td class="py-1"><?php echo $value->desk_task ?></td>
                          <td class="py-1"><?php echo $value->jmlrespon_task ?></td>
                          <td class="py-1"><?php echo $value->nominal_task ?></td>
                          <td>
                            <a href="lihat.html"><label class="badge badge-info active">Edit</label></a>

                            <label class="badge badge-danger">Hapus</label>
                          </td>
                        </tr>
              <?php } ?>
                      </tbody>  
                    </table>
                  </div>
                </div>
              </div>