<!-- partial -->
<div class="flash-data3" id="flash" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
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

                    <h4 class="card-title">Harga Saldo</h4>
                    </br>
                    <a href="#" data-target="#exampleModal2" class="edit" data-toggle="modal" data-id=""><label class="btn btn-info">Tambah</label></a>
                    </br>


                    <table class="table table-bordered" id="data_tables">
                        <thead style="text-align: center;">
                            <tr class="table-active">
                                <th> No </th>
                                <th> Harga </th>
                                <th> Jumlah Saldo </th>
                                <th> Aksi </th>

                            </tr>
                        </thead>

                        <tbody align="center">
                            <?php foreach ($harga as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $value->harga ?></td>
                                    <td><?php echo $value->jml_saldo ?></td>


                                    <td>
                                        <a href="#" data-target="#exampleModal" class="harga" data-toggle="modal" data-id="<?php echo $value->id; ?> 
                                        " data-harga="<?php echo $value->harga; ?> " data-jml_saldo="<?php echo $value->jml_saldo; ?> "><label class=" badge badge-info">Edit</label></a>
                                        <!-- Modal -->
                                        </ </div>
                </div>


                <a href="<?= base_url('Admin/Harga_ctrl/hapus_saldo/' . $value->id); ?>" onclick="return confirm('Apakah Anda Yakin ?');"><label class="badge badge-danger">Hapus</label></a>
                </td>
                </td>

                </tr>
            <?php } ?>
            </table>

            <form method="POST" action="<?= base_url('Admin/Harga_ctrl/editaction'); ?>" enctype="multipart/form-data">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Saldo</h5>

                            </div>

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-lg" id="id" name="id" placeholder="id">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="harga" name="harga" placeholder="Harga">

                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="jml_saldo" name="jml_saldo" placeholder="Jumlah Saldo">

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

            <form method="POST" action="<?= base_url('Admin/Harga_ctrl/register_saldo'); ?>" enctype="multipart/form-data">
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Bank</h5>

                            </div>

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-lg" id="id" name="id" placeholder="id">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="Harga" name="harga" placeholder="Harga">

                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="Jumlah" name="jumlah" placeholder="Jumlah Saldo">

                                </div>

                            </div>



                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>

                            </div>
                        </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>