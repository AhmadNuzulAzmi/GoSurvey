<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi mdi-stove"></i>
            </span> Member / Soal Survey
        </h3>
        <br />

        <form id="form" action="<?= base_url('Member/SoalSurvey_ctrl/jawabsoal'); ?>" method="POST">
            <input type="hidden" name="iduser" id="idusr" class="form-control" value="<?= $user['id_usr']; ?> ">

            <?php
            foreach ($soal as $keyy => $value) {
                foreach ($task as $taskk) { ?>
                    <?php
                    if ($value->id_task == $taskk->id_task) { ?>
                        <input type="hidden" name="nominal" class="form-control" value="<?php echo $taskk->nominal_task ?>">
                <?php }
                } ?>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" name="idtask" id="idtask" class="form-control" value="<?php echo $value->id_task ?>">


                            <div class="card p-1 mt-1">
                                <div class="row">
                                    <div class="col-sm-12 mt-1" id="soal_">
                                        <input class="form-control mb-1" value="<?= $value->soal ?>" name="soal[]" type="text" readonly>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $kd = $value->id_soal;
                            if ($value->type_soal == "Radio") { ?>
                                <input class="form-control mb-1" value="<?= $value->id_soal ?>" name="id_soal[]" type="hidden">
                                <?php
                                foreach ($soal_opt as $key => $value) { ?>
                                    <?php
                                    if ($kd == $value->id_soal) { ?>
                                        <div>
                                            <div class="input-group-prepend mt-2 col-sm-12">
                                                <div class="input-group-text">
                                                    <input type="radio" name="jawaban3" value="<?php echo $value->pilihan_opt ?>" aria-label="Radio button for following text input" required>

                                                </div>
                                                <input style="background-color:white;" class="form-control" value="<?php echo $value->pilihan_opt ?>" readonly>
                                            </div>
                                        </div>

                                <?php }
                                }
                            } elseif ($value->type_soal == "Checkbox") { ?>
                                <input class="form-control mb-1" value="<?= $value->id_soal ?>" name="id_soal[]" type="hidden">
                                <?php
                                $i = 0;
                                foreach ($soal_opt as $key => $value) {
                                    if ($kd == $value->id_soal) { ?>
                                        <div class="input-group-prepend mt-2 col-sm-12">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="jawaban<?= $value->id_soal ?>[]" value="<?php echo $value->pilihan_opt ?>" aria-label="Checkbox button for following text input">

                                            </div>
                                            <input style="background-color:white;" class="form-control" value="<?php echo $value->pilihan_opt ?>" readonly>
                                        </div>


                                <?php
                                        $i++;
                                    }
                                }
                            } elseif ($value->type_soal == "Text") { ?>
                                <div class="mt-2 col-12">
                                    <input class="form-control mb-1" value="<?= $value->id_soal ?>" name="id_soal[]" type="hidden">
                                    <input type="text" name="jawaban1" class="form-control" required>
                                </div>

                            <?php } elseif ($value->type_soal == "Textarea") { ?>
                                <div class="mt-2 col-sm-12">
                                    <input class="form-control mb-1" value="<?= $value->id_soal ?>" name="id_soal[]" type="hidden">
                                    <textarea id="text_area" name="jawaban2" class="form-control mb-3" required></textarea>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
    </div>
</div>

<?php } ?>
</div>
<center>
    <button type="submit" class="btn btn-success btn-rounded btn-fw">Submit</button>
</center>
</form>
<script src="<?php echo base_url(); ?>assets/surveyer/assets/js/tampil_soal.js"></script>