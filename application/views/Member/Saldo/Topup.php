<?php
$konek = mysqli_connect("localhost", "root", "", "gosurvey");
$id = mysqli_query($konek, "SELECT * FROM tbl_harga_saldo");
$no = mysqli_query($konek, "SELECT * FROM tbl_bank");
$jsArray = "var hargaa = new Array();\n";
$jsArra = "var norek = new Array();\n";
?>

<!-- partial -->

<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-square-inc-cash"></i>
            </span> Member / Dompet (+Top Up)
        </h3>
        <br />

        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Top Up Saldo</h4><br />
                    <form class="form-sample" action="<?= site_url('/Member/Dompet_ctrl/isi_topup'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id_usr" class="form-control" value="<?= $user['id_usr']; ?> " id="exampleInputName1">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect3">Harga</label>
                            <select class="form-control form-control-sm" name="jmlh_saldo" id="exampleFormControlSelect3" onchange="changeValue(this.value)">
                                <option selected="selected"> -- Silahkan pilih jumlah saldo -- </option>
                                <?php if (mysqli_num_rows($id)) { ?>
                                    <?php while ($row_hrg = mysqli_fetch_array($id)) { ?>
                                        <option value="<?php echo $row_hrg["harga"] ?>"> <?php echo $row_hrg["harga"] ?> </option>
                                    <?php $jsArray .= "hargaa['" . $row_hrg['harga'] . "'] = {hargaaa:'" . addslashes($row_hrg['jml_saldo']) . "'};";
                                    } ?>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jumlah Saldo</label>
                            <input type="text" id="hargaaa" name="nominal" class="form-control form-control-sm" readonly placeholder="Jumlah Saldo">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect3">Metode Pembayaran</label>
                            <select class="form-control form-control-sm" name="harga_saldo" id="exampleFormControlSelect3" onchange="changeValuee(this.value)">
                                <option selected="selected"> -- Silahkan Metode Pembayaran -- </option>
                                <?php if (mysqli_num_rows($no)) { ?>
                                    <?php while ($row_rek = mysqli_fetch_array($no)) { ?>
                                        <option value="<?php echo $row_rek["nama_bank"] ?>"> <?php echo $row_rek["nama_bank"] ?> </option>
                                    <?php $jsArra .= "norek['" . $row_rek['nama_bank'] . "'] = {rek:'" . addslashes($row_rek['nomor_bank']) . "'};";
                                    } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label>Harga</label>
                            <input type="text" id="rek" class="form-control form-control-sm" placeholder="Harga">
                        </div> -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-5 ">No Rekening</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="rek" placeholder="no rek" readonly class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-5">Upload </label>
                                    <div class="col-sm-12">
                                        <input type="file" name="image" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="template-demo">

                            <!-- <a class="btn btn-inverse-info btn-fw" href="<?= site_url('/Member/Dompet_ctrl/isi_topup'); ?>">Top Up</a> -->
                            <button type="submit" class="btn btn-inverse-info btn-rounded btn-fw">Top Up</button>
                        </div>

                    </form>
                </div>
            </div>

            <script type="text/javascript">
                <?php echo $jsArray; ?>

                function changeValue(input_harga) {
                    document.getElementById("hargaaa").value = hargaa[input_harga].hargaaa;
                }

                <?php echo $jsArra; ?>

                function changeValuee(input_noreek) {
                    document.getElementById("rek").value = norek[input_noreek].rek;
                }
            </script>