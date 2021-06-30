<script src="assets/surveyer/assets/js/sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-database"></i>
            </span> Admin / TopUp
        </h3>
        <br />



        <!-- add tabel survey -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Verifikasi</h4>
                    <br>
                    <!-- <a href="#" data-target="#exampleModal2" class="edit" data-toggle="modal" data-id=""><label class="btn btn-info">Tambah</label></a> -->
                    <!-- <br> -->
                    </br>
                    <table class="table table-bordered" id="data_tables">
                        <thead align="center">
                            <tr class="table-active">
                                <th> No </th>
                                <th> Nama</th>
                                <th> Tanggal Topup</th>
                                <th> Nominal</th>
                                <th> Bukti</th>
                                <th> Transaksi</th>
                                <th> Status</th>
                                <th> Aksi</th>
                                <!-- <th> Pembayaran</th>
                                <th> Status</th>
                                <th> Aksi</th> -->
                            </tr>
                        </thead>


                        <tbody align="center">
                            <?php foreach ($top as $key => $value) {

                            ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value->nama_usr ?></td>
                                    <td><?php echo date('d F Y', $value->tgl_topup) ?></td>
                                    <td>Rp. <?php echo number_format($value->jml_topup, 2, ',', '.'); ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/gambar/dompet/') . $value->bukti ?>" />
                                    </td>
                                    <td><?php echo $value->transaksi ?></td>
                                    <?php

                                    if ($value->status == "Verified") {
                                    ?>
                                        <td style="color: seagreen;"><b> <?php echo $value->status ?></b> </td>
                                    <?php
                                    } elseif ($value->status == "Unverified") {

                                    ?>
                                        <td style="color: red;"><b> <?php echo $value->status ?> </b></td>
                                    <?php
                                    }
                                    ?>

                                    <td><b>
                                            <a href="#" data-target="#exampleModal" class="edit4" data-toggle="modal" data-id="<?php echo $value->id; ?> " data-status="<?php echo $value->status; ?> "><label class=" badge badge-info">Edit</label></a>
                                        </b>
                                    </td>
                                    <!-- Modal -->

                                </tr>
                            <?php } ?>
                        </tbody>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end tabel survey -->

    <form method="POST" action="<?= base_url('Admin/Verifikasi_ctrl/edit_topup'); ?>" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Topup</h5>

                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-lg" id="id" name="id" placeholder="Id">
                        </div>
                        <div class="form-group">
                            <!-- <input type="text" class="form-control form-control-lg" id="status" name="status" placeholder="Status"> -->
                            <select class="form-control form-control-sm" name="status" id="status">
                                <option value="">-- Silahkan Pilih --</option>
                                <option>Verified</option>
                                <option>Unverified</option>
                            </select>

                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>

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