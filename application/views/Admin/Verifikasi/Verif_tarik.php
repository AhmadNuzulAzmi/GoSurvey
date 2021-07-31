<script src="assets/surveyer/assets/js/sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- partial -->
<div class="flash-data6" id="flash" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-database"></i>
            </span> Admin / Tarik
        </h3>
        <br />



        <!-- add tabel survey -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Verifikasi</h4>
                    <br>
                    </br>
                    <table class="table table-bordered" id="data_tables">
                        <thead align="center">
                            <tr class="table-active">
                                <th> No </th>
                                <th> Nama</th>
                                <th> Tanggal Tarik</th>
                                <th> Nominal</th>
                                <th> Pembayaran</th>
                                <th> Atas Nama</th>
                                <th> No Rekening</th>
                                <th> Bukti </th>
                                <th> Status</th>
                                <th> Aksi</th>
                            </tr>
                        </thead>

                        <tbody align="center">
                            <?php foreach ($trk as $key => $value) {

                            ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value->nama_usr ?></td>
                                    <td><?php echo date('d F Y', $value->tgl_tarik) ?></td>
                                    <td>Rp. <?php echo number_format($value->jml_tarik, 2, ',', '.'); ?></td>
                                    <td><?php echo $value->pembayaran ?></td>
                                    <td><?php echo $value->ats_nama ?></td>
                                    <td><?php echo $value->no_rek ?></td>

                                    <?php
                                    if ($value->bukti == "") { ?>
                                        <td style="color: red;"> ------ </td>
                                    <?php
                                    } else { ?>
                                        <td onclick="Swal.fire({
                                                    title: '',
                                                    text: 'Bukti Transfer',
                                                    imageUrl: '<?= base_url('assets/gambar/dompet/') . $value->bukti ?>',
                                                    imageWidth: 400,
                                                    imageHeight: 400,
                                                    imageAlt: 'Custom image',
                                                    })">
                                            <img src="<?= base_url('assets/gambar/dompet/') . $value->bukti ?>" />
                                        </td>
                                    <?php }

                                    if ($value->status == "Verified") {
                                    ?>
                                        <th style="color: seagreen;"> <?php echo $value->status ?> </th>
                                    <?php
                                    } elseif ($value->status == "Unverified") {

                                    ?>
                                        <th style="color: red;"> <?php echo $value->status ?> </th>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if ($value->status == "Unverified") {
                                    ?>
                                        <td>
                                            <a href="#" data-target="#exampleModal" class="edit5" data-toggle="modal" data-id="<?php echo $value->id; ?> " data-status="<?php echo $value->status; ?> "><label class=" badge badge-info">Edit</label></a>
                                        </td>
                                    <?php } else { ?>
                                        <td style="color: green;">
                                            <b> ----- </b>
                                        </td>
                                    <?php
                                    } ?>
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

    <form method="POST" action="<?= base_url('Admin/Verifikasi_ctrl/edit_tarik'); ?>" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Tarik</h5>

                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-lg" id="id" name="id" placeholder="Id">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control form-control-lg" placeholder="Logo Bank">
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