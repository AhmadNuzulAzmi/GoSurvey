<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi mdi-stove"></i>
            </span> Member / Ganti Password
        </h3>
        <br />
        <form action="<?= base_url('Member/Password_ctrl'); ?>" method="post">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ganti Password</h4><br />
                        <?= $this->session->flashdata('message'); ?> <br />
                        <div class="form-group">
                            <label>Password Lama</label>
                            <input type="password" name="pass_lama" id="pass_lama" class="form-control form-control-lg">
                            <?= form_error('pass_lama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" name="pass_baru1" id="pass_baru1" class="form-control">
                            <?= form_error('pass_baru1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Repeat Password Baru</label>
                            <input type="password" name="pass_baru2" id="pass_baru2" class="form-control form-control-sm">
                            <?= form_error('pass_baru2', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Ganti Password</button>
                        </div>
                    </div>
        </form>
    </div>
</div>