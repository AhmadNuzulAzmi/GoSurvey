<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Saldo
                        </h4>

                    </div>
                </div>
            </div>

        </div>

        <!-- add tabel survey -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">

                    <h4 class="card-title">Metode Pembayaran</h4>
                    </br>
                    <a href="#" data-target="#exampleModal2" class="edit" data-toggle="modal" data-id=""><label class="btn btn-info">Tambah</label></a>
                    </br>


                    <table class="table table-bordered">
                        <thead style="text-align: center;">
                            <tr class="table-active">
                                <th> No </th>
                                <th>Logo</th>
                                <th>Nama Rekening</th>
                                <th> Nomor</th>
                                <th> Action </th>
                            </tr>
                        </thead>





                        <?php foreach ($saldo as $key => $value) {

                        ?>

                            <tbody align="center">
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value->logo_bank ?></td>
                                    <td><?php echo $value->nama_bank ?></td>
                                    <td><?php echo $value->nomor_bank ?></td>

                                    <td>
                                        <a href="#" data-target="#exampleModal" class="edit" data-toggle="modal" data-id=""><label class=" badge badge-info">Edit</label></a>
                                        <!-- Modal -->


                </div>
            </div>


            <a href="<?= base_url('Admin/Admin_ctrl/hapus_bank/' . $value->no_bank); ?>" onclick="return confirm('Apakah Anda Yakin ?');"><label class="badge badge-danger">Hapus</label></a>
            </td>
            </td>

            </tr>
        <?php } ?>
        </table>

        <form method="POST" action="<?= base_url('Admin/Admin_ctrl/editaction'); ?>">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Saldo</h5>

                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-lg" id="id_pgn" name="id" placeholder="id">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-lg" id="nama_pgn" name="name" placeholder="Logo Bank">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="pass_pgn" name="pass" placeholder="Nama Rekening">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="email_pgn" name="email" placeholder="Nomor Rekening">

                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form method="POST" action="<?= base_url('Admin/Admin_ctrl/register_bank'); ?>">
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Bank</h5>

                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-lg" id="no_bank" name="IdBank" placeholder="id">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-lg" id="LogoBank" name="LogoBank" size="20" placeholder="Logo Bank">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="Nama_rek" name="NamaBank" placeholder="Nama Rekening">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="Nomor_rek" name="NomorBank" placeholder="Nomor Rekening">

                            </div>
                            <!-- <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="jk_pgn" name="jk" placeholder="Jenis Kelamin">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="nohp_pgn" name="nohp" placeholder="No HP">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="alamat_pgn" name="alamat" placeholder="Alamat">
                            </div> -->
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>