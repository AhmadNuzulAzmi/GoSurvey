<script src="assets/surveyer/assets/js/sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white mr-2">
        <i class="mdi mdi-database"></i>
      </span> Admin / Data Member
    </h3>
    <br />



    <!-- add tabel survey -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Pengguna</h4>
          <br>
          <a href="#" data-target="#exampleModal2" class="edit" data-toggle="modal" data-id=""><label class="btn btn-info">Tambah</label></a>
          <br>
          </br>
          <table class="table table-bordered" id="data_tables">
            <thead align="center">
              <tr class="table-active">
                <th> No </th>
                <th> Nama </th>
                <th> email </th>
                <th> Status</th>
                <th> Action</th>
              </tr>
            </thead>

            <tbody align="center">
              <?php foreach ($pgn as $key => $value) { ?>

                <tr>
                  <td><?php echo $key + 1 ?></td>
                  <td><?php echo $value->nama_usr ?></td>
                  <td><?php echo $value->email_usr ?></td>
                  <td><?php
                      if ($value->role_id == 1) {
                        echo "ADMIN";
                      } else {
                        echo "USER";
                      }
                      ?></td>

                  <td>
                    <a href="#<?= base_url('MemberMin_ctrl/edit' . $value->id_usr);  ?>" data-target="#exampleModal" class="edit" data-toggle="modal" data-id="<?php echo $value->id_usr; ?> " data-nama="<?php echo $value->nama_usr; ?> " data-email="<?php echo $value->email_usr; ?> " data-status="<?php echo $value->role_id; ?>"><label class=" badge badge-info">Edit</label></a>
                    <a href="<?= base_url('Admin/MemberMin_ctrl/hapus/' . $value->id_usr); ?>" onclick="return confirm('Apakah Anda Yakin ?');"><label class="badge badge-danger">Hapus</label></a>
                  </td>

                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- end tabel survey -->

    <!-- <br/><br/>
    <div>
    <button id="btn_hapus"> Coba </button> 
    </div> -->
    <form method="POST" action="<?= base_url('Admin/MemberMin_ctrl/editaction'); ?>">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>

            </div>

            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" class="form-control form-control-lg" id="id_usr" name="id" placeholder="id">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="nama_usr" name="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="email_usr" name="email" placeholder="Email">

              </div>
              <div class="form-group">
                <!-- <input type="text" class="form-control form-control-lg" id="status_usr" name="status" placeholder="Status"> -->
                <select class="form-control form-control-sm" name="status" id="exampleFormControlSelect3">
                  <option value="">-- Silahkan Pilih --</option>
                  <option value="1">ADMIN</option>
                  <option value="2">USER</option>
                </select>

              </div>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" onclick="Swal.fire('Data Pengguna', 'Berhasi di Edit', 'success')">Edit</button>

            </div>
          </div>
        </div>
      </div>
    </form>

    <form method="POST" action="<?= base_url('Admin/MemberMin_ctrl/register_pgn2'); ?>">
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Tambah Pengguna</h5>

            </div>

            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" class="form-control form-control-lg" id="id_usr" name="id" placeholder="id">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="nama_usr" name="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="email_usr" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="password_usr" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <!-- <input type="text" class="form-control form-control-lg" id="status_usr" name="status" placeholder="status"> -->
                <select class="form-control form-control-sm" name="status" id="exampleFormControlSelect3">
                  <option value="">-- Pilih Status --</option>
                  <option value="1">ADMIN</option>
                  <option value="2">USER</option>
                </select>
              </div>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" onclick="Swal.fire('Data Pengguna', 'Berhasi di tambahkan', 'success')">Tambah</button>

            </div>
          </div>
        </div>
      </div>
    </form>

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