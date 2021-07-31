<div class="main-panel">
  <div class="content-wrapper">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white mr-2">
        <i class="mdi mdi-pen"></i>
      </span> Member / Buat Survey
    </h3> <br />

    <div class="page-header">
      <nav aria-label="breadcrumb">
      </nav>
    </div>
    <form class="forms-sample" action="<?= site_url('Member/TaskSurvey_ctrl/create_survey') ?>" method="POST" enctype="multipart/form-data">
      <div class="col-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Buat Survey</h1>
            <br />
            <div class="form-group">
              <input type="hidden" name="id_usr" class="form-control" value="<?= $user['id_usr']; ?> " id="exampleInputName1">
            </div>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Owner</label>
                <input type="text" class="form-control form-control-lg" readonly value="<?= $user['nama_usr']; ?> " id="owner_rwt" name="">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail3">Judul</label>
                <input type="text" class="form-control form-control-lg" id="judul_rwt" name="judul" placeholder="Judul Task" required>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Deskripsi</label>
                <textarea class="form-control" id="desk_rwt" name="deskripsi" rows="4" placeholder="Deskripsi Singkat" required></textarea>
              </div>



              <div class="form-group">
                <label for="nominal">Nominal Survey</label>
                <input type="range" min="2000" max="200000" value="2000" class="slider" id="myRange" required>
                <!-- <p>Value: <span id="demo"></span></p> -->
                Rp. <output id="demo"></output>
                <input type="hidden" id="demo1" name="nominal">
                </h6>
              </div>

              <div class="form-group">
                <label for="responden">Jumlah Responden</label>
                <input type="range" min="10" max="200" value="10" name="jml_res" class="slider2" id="myRange2">
                <!-- <p>Value: <span id="demo"></span></p> -->
                <output id="demo2"></output>
                Orang <br /><br /><br />

                <div class="form-group">
                  <label>Pilih Pembayaran</label>
                  <select class="form-control form-control-sm" name="pembayaran" id="select_option" required>
                    <option value="">-- Silahkan Pilih --</option>
                    <?php foreach ($saldo as $key => $value) { ?>
                      <option> <?php echo "Transfer " . $value->nama_bank ?></option>
                    <?php } ?>
                    <!-- <option value="Saldo" id="option_saldo"> Saldo Dompet </option> -->
                  </select>
                </div>

                <!-- <button type="button" class="ml-2 btn-sm btn-info border" data-toggle="modal" data-target=".modal-filter">filter audience</button> -->
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="filter" class="custom-control-input" id="tidak" value="tidak" checked>
                  <label class="custom-control-label" for="tidak" style="color: red;">No Filter</label>
                  <?= form_error('file', '<small class="text-danger pl-3">', '</small>') ?>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="filter" class="custom-control-input" id="ya" value="ya" data-toggle="modal" data-target=".modal-filter">
                  <label class="custom-control-label" for="ya" style="color: red;">Filter Audience</label>
                </div>
                <!-- <button type="button" class="ml-2 btn-sm btn bg-white border" data-toggle="modal" data-target=".modal-filter">filter audience</button> -->
              </div>


              <div class="form-group">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="upload_filee">
                  <label class="custom-file-label" for="customFile">Upload Bukti Pembayaran</label>
                </div>
                <label class="mt-2" style="color: red;">Note : <br /><br />Tidak perlu upload bukti pembayaran jika menggunakan metode pembayaran <b> Saldo Dompet</b></label>


              </div>

              <button type="submit" class="btn btn-info">Submit</button>
              <!-- <a class="btn btn-gradient-success mr-2" href="<?= site_url('/Member_ctrl/halaman_soal'); ?>">Submit</a> -->
              <!-- <button class="btn btn-danger">Cancel</button> -->

              <!-- <a href="<?= base_url('Member/TaskSurvey_ctrl/waiting_survey'); ?>" class="btn btn-success">Beralih</label></a> -->

          </div>

        </div>

        <div class="mx-3 card" style="height: 8cm;">
          <div class="card-body">
            <h1 class="card-title">Pembayaran</h1>
            <br />

            <div class="form-group">
              <h6 for="nominal">Nominal Survey &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp.

                <output style="font-size: 14px;" id="demoo"></output>
              </h6>
              <br />
              <h6 for="nominal">Jumlah Responden &nbsp;&nbsp; :
                <output style="font-size: 14px;" id="demoo1"></output> Orang
              </h6>
              <br />
              <h6 for="nominal">Biaya Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp.
                <output style="font-size: 14px;" class="mb-2">2500</output>
              </h6>
              <hr class="mb-4">

              <div class="input-group col-xs-12">
                <h6>Total Pembayaran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                  Rp.
                  <output style="font-size: 14px;" id="total" name="ttl_nominal"></output>
                  <input type="hidden" id="total2" name="ttl_nominal">
                  <output style="font-size: 14px;" id="penjumlahan" hidden></output>
                </h6>
              </div>
            </div>




          </div>


          <div class="mx-0 card" style="height: 4cm; position: relative; bottom: -165px;">
            <div class="card-body">
              <h1 class="card-title">Dompet</h1>
              <br />

              <div class="form-group">
                <h6 for="nominal">Saldo Dompet : Rp <?= $dompet['nominal_saldo']; ?>
                  <input type="hidden" value="<?= $dompet['nominal_saldo']; ?>" id="saldo">

                </h6>

                <div class="input-group col-xs-12">
                </div>
              </div>
            </div>



            <div class="card" style="position: relative; bottom: -90px;">
              <table class="table">
                <thead>
                  <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Nama Bank</th>
                    <th scope="col">No Rekening</th>
                    <th scope="col">Nama Penerima</th>
                    <th scope="col">Logo</th>
                  </tr>
                </thead>

                <?php foreach ($saldo as $key => $value) { ?>


                  <tbody>
                    <tr>

                      <!-- <td><?php echo $key + 1 ?></td> -->
                      <td><?php echo $value->nama_bank ?></td>
                      <td><?php echo $value->nomor_bank ?></td>
                      <td><?php echo $value->atas_nama ?></td>
                      <td><img src="<?= base_url('assets/gambar/logo/') . $value->logo_bank ?>" /></td>
                    </tr>

                  <?php } ?>


                  </tbody>
              </table>
            </div>
          </div>
        </div>


        <!-- Modal Filter -->
        <!-- <form class="form-sample" action="<?= site_url('/Member/TaskSurvey_ctrl/create_survey'); ?>" method="POST"> -->

        <div class="modal fade modal-filter" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" style="width: 50%;" role=" document">
            <div class="modal-content">
              <div class="modal-header border-white">
                <h5 class="modal-title">Filter Audience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="form-group">
                  <div class="custom-control custom-checkbox custom-control-inline" hidden>
                    <input type="checkbox" name="jk[]" class="custom-control-input" id="x" value="x" checked>
                    <label class="custom-control-label" for="x">x</label>
                  </div>

                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" name="jk[]" class="custom-control-input" id="Pria" value="Pria">
                    <label class="custom-control-label" for="Pria">Pria</label>
                  </div>

                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" name="jk[]" class="custom-control-input" id="Wanita" value="Wanita">
                    <label class="custom-control-label" for="Wanita">Wanita</label>
                  </div>
                </div>

                <!-- <div class="form-group">
                  <label>Rentang Usia dari : </label>
                  <input type="number" name="age" class="form-control form-control-sm " value="1"><br />
                  <label> Sampai : </label>
                  <input type="number" class="form-control form-control-sm" value="65" name="age_max"></label>
                </div> -->

                <div class="form-group">
                  <label>Pekerjaan</label>
                  <select class="form-control form-control-sm" name="kerja" style="display: block" required>
                    <option value="---">-- Silahkan Pilih --</option>
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
                  <label>Penghasilan : </label>
                  <select name="penghasilan" id="income_type" class="form-control form-control-sm">
                    <option value="---">Silakan Pilih</option>
                    <option value="0">Tidak memilki penghasilan</option>
                    <option value="1">Dibawah 1 juta</option>
                    <option value="2">1 juta sampai 5 juta</option>
                    <option value="3">5 juta sampai 10 juta</option>
                    <option value="4">10 juta sampai 50 juta</option>
                    <option value="5">Diatas 50 juta</option>
                  </select>
                </div>

                <div class="form-group d-flex">
                  <label>Golongan Darah : </label>
                  <br />

                  <div class="col-md-6">
                    <div class="custom-control custom-checkbox custom-control-inline" hidden>
                      <input type="checkbox" name="darah[]" class="custom-control-input" id="x" value="x" checked>
                      <label class="custom-control-label" for="x">X</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" name="darah[]" class="custom-control-input" id="A" value="A">
                      <label class="custom-control-label" for="A">A</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" name="darah[]" class="custom-control-input" id="B" value="B">
                      <label class="custom-control-label" for="B">B</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" name="darah[]" class="custom-control-input" id="AB" value="AB">
                      <label class="custom-control-label" for="AB">AB</label>
                    </div>

                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" name="darah[]" class="custom-control-input" id="O" value="O">
                      <label class="custom-control-label" for="O">O</label>
                    </div>
                  </div>

                </div>


                <div class="form-group form-inlne">
                  <label>Perokok : </label>
                  <div class="custom-control custom-checkbox custom-control-inline" hidden>
                    <input type="checkbox" name="smoking[]" class="custom-control-input" id="x" value="x" checked>
                    <label class="custom-control-label" for="x">x</label>
                  </div>

                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" name="smoking[]" class="custom-control-input" id="Iya" value="Ya">
                    <label class="custom-control-label" for="Iya">Iya</label>
                  </div>

                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" name="smoking[]" class="custom-control-input" id="Tidak" value="Tidak">
                    <label class="custom-control-label" for="Tidak">Tidak</label>
                  </div>
                </div>

              </div>
              <div class="modal-footer border-white d-flex justify-content-start mx-auto">
                <button type="button" data-dismiss="modal" class="btn btn-info btn-rounded">Simpan</button>
              </div>
    </form>
  </div>
</div>
</div>
</div>
</div>



<script>
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  var outputt = document.getElementById("demo1");

  var out = document.getElementById("demoo");
  var outt = document.getElementById("demoo1");

  var slider2 = document.getElementById("myRange2");
  var output2 = document.getElementById("demo2");
  var output3 = document.getElementById("penjumlahan");
  var output4 = document.getElementById("total");
  var output5 = document.getElementById("total2");

  let responden = 0;
  let nominal = 0;
  const saldo = document.getElementById('saldo');

  output.innerHTML = parseInt(slider.value);
  outputt.value = parseInt(slider.value);

  out.innerHTML = parseInt(slider.value);
  outt.innerHTML = slider2.value;

  output2.innerHTML = slider2.value;
  output3.innerHTML = slider.value;
  output4.value = slider.value;
  output5.value = slider.value;


  slider.oninput = function() {
    output.innerHTML = parseInt(this.value)
    outputt.value = parseInt(this.value)

    out.innerHTML = parseInt(slider.value)

    output3.innerHTML = parseInt(this.value)
    output4.value = parseInt(this.value)
    output5.value = parseInt(this.value)

    nominal = parseInt(slider.value)
    console.log(slider.value)

    option_saldoo(nominal, responden)

  }

  slider2.oninput = function() {
    output2.innerHTML = this.value;
    outt.innerHTML = this.value;
    var bilangan1 = parseInt(slider.value);
    var bilangan2 = parseInt(slider2.value);

    var penjumlahan = (bilangan1 * bilangan2 || bilangan2 * bilangan1);

    document.getElementById("penjumlahan").innerHTML = penjumlahan;
    var total = (bilangan1 * bilangan2 + 2500);
    document.getElementById("total").innerHTML = parseInt(total)
    document.getElementById("total2").value = parseInt(total)

    responden = parseInt(slider2.value)

    const option = document.getElementById('option_saldo');
    const file = document.getElementById('upload_filee');

    console.log({
      responden,
      nominal
    })

    option_saldoo(nominal, responden)

  }


  var select1 = document.getElementById('select_option');
  var opt = document.createElement('option');
  opt.appendChild(document.createTextNode('Saldo Dompet'));
  opt.value = 'Saldo';

  function option_saldoo(nominal, responden) {
    console.log(saldo)
    console.log(select_option.children)
    console.log(file)
    const children = select_option.children;


    if (nominal * responden < parseInt(saldo.value)) {
      console.log("Dompet Ada")
      select1.appendChild(opt);
      // children.pop()
    } else {
      console.log("Dompet Hilang")
      select1.removeChild(opt);
    }

  }

  function hasil() {
    var bilangan1 = parseInt(slider.value);
    var bilangan2 = parseInt(slider2.value);

    var penjumlahan = (bilangan1 * bilangan2 || bilangan2 * bilangan1);

    document.getElementById("penjumlahan").innerHTML = parseInt(penjumlahan)
  }

  function total() {
    var output3 = document.getElementById("kode");
    var x = 900;
    var acak = Math.floor(Math.random() * x) + 99;
    // output3.innerHTML = acak;
    var bilangan1 = parseInt(slider.value);
    var bilangan2 = parseInt(slider2.value);
    var total = (bilangan1 * bilangan2 + 2500);
    if (total < parseInt(saldo.value)) {
      select1.appendChild(opt);
    }

    document.getElementById("total").innerHTML = parseInt(total)
    document.getElementById("total2").value = parseInt(total)



    // total2.addEventListener("change", (e) => {
    //   e.preventDefault()
    //   option.disable = saldo.value <= e.target.value
    //   console.log(saldo.value <= e.target.value, saldo.value, e.target.value)
    // })
    // total2.dispatchEvent(new Event("change"))

    return total;
  }
  const file = document.getElementById('upload_filee');
  // const pil = select1.options[select1.selectedIndex].value;
  // console.log(pil);

  // if (pil == "Saldo") {
  //   document.getElementById("upload_filee").style.visibility = 'hidden';
  // }
  file.hidden = select1.options[select1.selectedIndex].value == "Saldo";


  total();
  // console.log(total_);
  kode_unik();
  hasil();
</script>