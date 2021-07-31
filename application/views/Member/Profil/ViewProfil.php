<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-account"></i>
            </span> Member / Profil
        </h3>

        <br />

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/gambar/profil/') . $user['image_usr']; ?>" class="card-img">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['nama_usr']; ?></h5>
                        <p class="card-text"><?= $profil['jenkel']; ?></p>
                        <p class="card-text"><?= $profil['tgl_lahir']; ?></p>
                        <p class="card-text"><?= $profil['pekerjaan']; ?></p>
                        <p class="card-text"><?= $profil['alamat']; ?></p>
                        <p class="card-text"><?= $profil['gol_darah']; ?></p>
                        <p class="card-text"><small class="text-muted">Member Since <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                    <div class="form-group">
                        <!-- <a class="btn btn-info mt-3" href="<?= site_url('/Member/Daerah_ctrl'); ?>">Edit Profil</a>
                        <button type="submit" class="btn btn-info">Edit Profil</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>