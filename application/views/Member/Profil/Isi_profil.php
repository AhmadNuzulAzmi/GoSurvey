<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-info text-white mr-2">
                    <i class="mdi mdi mdi-stove"></i>
                </span> Member / Isi Data Profil
            </h3>
            <br />

            <form class="form-sample" action="<?= site_url('/Member/Profil_ctrl/create_profil'); ?>" method="POST">

                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> <?= $user['nama_usr'] ?></h4><br />
                            <?= $this->session->flashdata('message'); ?> <br />

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pekerjaan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sosial Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="lain-tab" data-toggle="tab" href="#lain" role="tab" aria-controls="lain" aria-selected="false">Lain-lain</a>
                                </li>
                            </ul>

                            <div class="tab-content card-stack-3" id="myTabContent">
                                <input type="hidden" class="form-control form-control-sm" value="<?= $user['id_usr'] ?>" name="id_usr" readonly>
                                <div class="tab-pane py-5 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control form-control-sm" name="jk" id="exampleFormControlSelect3">
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                        <!-- <?= form_error('pass_lama', '<small class="text-danger pl-3">', '</small>') ?> -->
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lhr" id="pass_baru1" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group">
                                        <label>Golongan Darah</label>
                                        <select class="form-control form-control-sm" name="darah" id="exampleFormControlSelect3">
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat Rumah</label>
                                        <textarea class="form-control form-control-sm" name="almt"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control form-control-sm" name="prov" id="provinsi">
                                            <option>-- Silahkan Pilih --</option>
                                            <?php
                                            foreach ($hasil as $value) {
                                                echo "<option value='$value->id_prov'>$value->nama</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <select class="form-control form-control-sm" name="kab" id="kabupaten">
                                            <option value="">-- Silahkan Pilih --</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select class="form-control form-control-sm" name="kec" id="kecamatan">
                                            <option value="">-- Silahkan Pilih --</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <select class="form-control form-control-sm" name="kel" id="kelurahan">
                                            <option value="">-- Silahkan Pilih --</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mt-5 d-flex justify-content-end">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="changeTab('profile-tab')">
                                                <i class="mdi mdi-arrow-right-bold-circle"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane py-5 card-stack-3 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select class="form-control form-control-sm" name="kerja" style="display: block" required>
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="Tidak memiliki pekerjaan">Tidak memiliki pekerjaan</option>
                                            <option value="Freelancer">Freelancer</option>
                                            <option value="Siswa">Siswa</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                            <option value="Pengusaha">Pengusaha</option>
                                            <option value="Pegawai BUMN">Pegawai BUMN</option>
                                            <option value="Tenaga Medis">Tenaga Medis</option>
                                            <option value="Buruh">Buruh</option>
                                            <option value="Investor">Investor</option>
                                            <option value="Pegawai startup">Pegawai startup</option>
                                            <option value="Pengusaha E-Commerce">Pengusaha E-Commerce</option>
                                            <option value="Content creator">Content creator</option>
                                            <option value="Dosen">Dosen</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Entrepreneur">Entrepreneur</option>
                                            <option value="Karyawan swasta">Karyawan swasta</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah Penghasilan</label>
                                        <select class="form-control form-control-sm" name="penghasilan" style="display: block" required>
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="1">Dibawah 1 juta</option>
                                            <option value="2">1 juta sampai 5 juta</option>
                                            <option value="3">5 juta sampai 10 juta</option>
                                            <option value="4">10 juta sampai 50 juta</option>
                                            <option value="5">Diatas 50 juta</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Institusi (Optional)</label>
                                        <input type="text" class="form-control form-control-sm" name="nama_institusi">
                                    </div>

                                    <div class="col-md-12 mt-5 d-flex justify-content-end">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-inverse-danger btn-icon" onclick="changeTab('home-tab')">
                                                <i class="mdi mdi-arrow-left-bold-circle"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="changeTab('contact-tab')">
                                                <i class="mdi mdi-arrow-right-bold-circle"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-12 mt-5 d-flex justify-content-end">
                                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="changeTab('home-tab')">
                                                <i class="mdi mdi-arrow-left-bold-circle"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="changeTab('contact-tab')">
                                                <i class="mdi mdi-arrow-right-bold-circle"></i>
                                            </button>
                                        </div>
                                    </div> -->

                                </div>

                                <div class="tab-pane fade card-stack-3 py-5" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control form-control-sm" value="<?= $user['email_usr'] ?>" name="email" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>No Handphone (Whatsapp)</label>
                                        <input type="text" class="form-control form-control-sm" name="nohp">
                                    </div>

                                    <div class="form-group">
                                        <label>Username Instagram</label>
                                        <input type="text" class="form-control form-control-sm" name="ig">
                                    </div>

                                    <div class="col-md-12 mt-5 d-flex justify-content-end">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-inverse-danger btn-icon" onclick="changeTab('profile-tab')">
                                                <i class="mdi mdi-arrow-left-bold-circle"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="changeTab('lain-tab')">
                                                <i class="mdi mdi-arrow-right-bold-circle"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-12 mt-5 d-flex justify-content-end">
                                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="changeTab('profile-tab')">
                                                <i class="mdi mdi-arrow-left-bold-circle"></i>
                                            </button>
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="changeTab('lain-tab')">
                                                <i class="mdi mdi-arrow-right-bold-circle"></i>
                                            </button>
                                        </div>
                                    </div> -->

                                </div>

                                <div class="tab-pane fade py-5" id="lain" role="tabpanel" aria-labelledby="lain-tab">
                                    <div class="form-group">
                                        <label>Apakah Anda Merokok ? </label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="tidak" name="smoking" class="custom-control-input input" value="Ya" checked required>
                                            <label class="custom-control-label" for="tidak">Tidak</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="ya" name="smoking" class="custom-control-input input" value="Tidak" required>
                                            <label class="custom-control-label" for="ya">Iya</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Gadget yang anda miliki</label>
                                        <br>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Android" value="Android">
                                            <label class="custom-control-label" for="Android">Android</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Laptop" value="Laptop">
                                            <label class="custom-control-label" for="Laptop">Laptop</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Tablet" value="Tablet">
                                            <label class="custom-control-label" for="Tablet">Tablet</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Macbook" value="Macbook">
                                            <label class="custom-control-label" for="Macbook">Macbook</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="PC-Desktop" value="PC-Desktop">
                                            <label class="custom-control-label" for="PC-Desktop">PC-Desktop</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Iphone" value="Iphone">
                                            <label class="custom-control-label" for="Iphone">Iphone</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Ipad" value="Ipad">
                                            <label class="custom-control-label" for="Ipad">Ipad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input title="Gadget yang anda miliki" type="checkbox" name="device[]" class="custom-control-input input check" id="Imac" value="Imac">
                                            <label class="custom-control-label" for="Imac">Imac</label>
                                        </div>

                                        <div class="col-md-12 mt-5 d-flex justify-content-end">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-inverse-danger btn-icon" onclick="changeTab('contact-tab')">
                                                    <i class="mdi mdi-arrow-left-bold-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
</body>

</html>

<script>
    $("#provinsi").change(function() {

        // variabel dari nilai combo box provinsi
        var id_prop = $("#provinsi").val();

        // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            url: "<?php echo base_url(); ?>/Member/Daerah_ctrl/get_provinsi",
            method: "POST",
            data: {
                id_prov: id_prop
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;

                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].id_kab + '>' + data[i].nama + '</option>';
                }
                $('#kabupaten').html(html);

            }
        });
    });

    $("#kabupaten").change(function() {

        // variabel dari nilai combo box kabupaten
        var id_kabu = $("#kabupaten").val();

        // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            url: "<?php echo base_url(); ?>/Member/Daerah_ctrl/get_kabupaten",
            method: "POST",
            data: {
                id_kab: id_kabu
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;

                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].id_kec + '>' + data[i].nama + '</option>';
                }
                $('#kecamatan').html(html);

            }
        });
    });

    $("#kecamatan").change(function() {

        // variabel dari nilai combo box kecamatan
        var id_keca = $("#kecamatan").val();

        // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            url: "<?php echo base_url(); ?>/Member/Daerah_ctrl/get_kecamatan",
            method: "POST",
            data: {
                id_kec: id_keca
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;

                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].id_kel + '>' + data[i].nama + '</option>';
                }
                $('#kelurahan').html(html);

            }
        });
    });
</script>
<script>
    function changeTab(idTab) {
        $(`#${idTab}`).tab('show');
        // alert(`#${idTab}`);     
    }
</script>