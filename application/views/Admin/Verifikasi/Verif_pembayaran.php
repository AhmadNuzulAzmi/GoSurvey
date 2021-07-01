<script src="assets/surveyer/assets/js/sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- partial -->
<div class="flash-data4" id="flash" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-database"></i>
            </span> Admin / Verifikasi - Pembayaran
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
                                <th> Owner</th>
                                <th> Judul</th>
                                <th> Nominal</th>
                                <th> Pembayaran</th>
                                <th> Bukti</th>
                                <th> Status</th>
                                <th> Aksi</th>
                            </tr>
                        </thead>

                        <tbody align="center">
                            <?php foreach ($byr as $key => $value) { ?>
                                <tr height="60px">
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?= $value->nama_usr ?></td>
                                    <td><?php echo $value->judul_task ?></td>
                                    <td>Rp. <?php echo  number_format($value->total_nominal, 2, ',', '.'); ?></td>
                                    <td> <?php echo $value->pembayaran ?> </td>

                                    <?php
                                    if ($value->pembayaran == "Saldo") { ?>
                                        <td style="color: red;"> ------ </td>
                                    <?php } else { ?>
                                        <td onclick="Swal.fire({
                                                    title: '',
                                                    text: 'Bukti Transfer',
                                                    imageUrl: '<?= base_url('assets/gambar/pembayaran/') . $value->bukti ?>',
                                                    imageWidth: 400,
                                                    imageHeight: 200,
                                                    imageAlt: 'Custom image',
                                                    })">
                                            <img src="<?= base_url('assets/gambar/pembayaran/') . $value->bukti ?>" />
                                        </td>
                                    <?php } ?>

                                    <?php
                                    if ($value->status == "verified") {
                                    ?>
                                        <th style="color: seagreen;"> <?php echo $value->status ?> </th>
                                    <?php
                                    } elseif ($value->status == "unverified") {

                                    ?>
                                        <th style="color: red;"> <?php echo $value->status ?> </th>
                                    <?php
                                    }
                                    ?>

                                    <th>
                                        <a href="#" data-target="#exampleModal" class="edit3" data-toggle="modal" data-id="<?php echo $value->id_task; ?>" data-id_usr="<?php echo $value->id_usr; ?>" data-pembayaran="<?php echo $value->pembayaran; ?>" data-total_nominal="<?php echo $value->total_nominal; ?>" data-status="<?php echo $value->status; ?>">
                                            <label class=" badge badge-info">Edit</label></a>
                                    </th>
                                    <!-- Modal -->

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end tabel survey -->

    <!-- <br/><br/>
    <div>
    <button id=" btn_hapus"> Coba </button>
                </div> -->
    <form method="POST" action="<?= base_url('Admin/Verifikasi_ctrl/edit_pembayaran'); ?>" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Verifikasi</h5>

                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-lg" id="id_task" name="id" placeholder="Id">
                            <input type="hidden" class="form-control form-control-lg" id="pembayaran" name="bayar">
                            <input type="hidden" class="form-control form-control-lg" id="id_usr" name="id_user">
                            <input type="hidden" class="form-control form-control-lg" id="total_nominal" name="total">


                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm" name="status" id="status">
                                <option value="">-- Silahkan Pilih --</option>
                                <option>verified</option>
                                <option>unverified</option>
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