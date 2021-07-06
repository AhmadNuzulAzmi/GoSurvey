<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi mdi-stove"></i>
            </span> Member / Survey Berakhir
        </h3>
        <br /><br />

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">

                    <div class="container-scroller">
                        <div class="container-fluid page-body-wrapper full-page-wrapper">
                            <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
                                <div class="row flex-grow">
                                    <div class="col-lg-7 mx-auto text-white">
                                        <div class="row align-items-center d-flex flex-row">
                                            <div class="col-lg-6 text-lg-right pr-lg-4">
                                                <h1 class="display-1 mb-0">✓</h1>
                                            </div>
                                            <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                                                <h2>Survey</h2>
                                                <h3 class="font-weight-light">Anda Berhasil Di Akhiri</h3>
                                                <h3 class="font-weight-light">Anda Memiliki sisa saldo <b> Rp. <?= number_format($srvy['total_nominal'] - 2500, 2, ',', '.'); ?></b> </h3>
                                                <h3 class="font-weight-light">Akan dikembalikan ke Saldo Dompet anda selama 1-3 hari jam kerja </h3>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12 text-center mt-xl-2">
                                                <a class="text-white font-weight-medium" href="<?= base_url('Member/Mysurvey_ctrl') ?>">Kembali</a>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>