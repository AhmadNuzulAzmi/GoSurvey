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
            $nilai = -1;
            foreach ($soal as $keyy => $value) { ?>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <input type="hidden" name="idtask" id="idtask" class="form-control" value="<?php echo $value->id_task ?>">

                            <div class="card p-1 mt-1">
                                <div class="row">
                                    <div class="col-sm-8 mt-1">
                                        <input class="form-control mb-1" type="text" value="<?php echo $value->soal ?>">
                                    </div>
                                </div>
                            </div>

                            <?php
                            $nilai++;
                            $kd = $value->id_soal;
                            if ($value->type_soal == "Radio") {
                                foreach ($soal_opt as $key => $value) { ?>
                                    <?php
                                    if ($kd == $value->id_soal) { ?>
                                        <div>
                                            <div class="input-group-prepend mt-2 col-sm-8">
                                                <div class="input-group-text">
                                                    <input type="radio" name="jawaban[]" value="<?php echo $value->pilihan_opt ?>" aria-label="Radio button for following text input"> &nbsp; <br>
                                                    <!-- <input type="radio" required aria-label="Radio button for following text input"> -->
                                                </div>
                                                <input class="form-control" value="<?php echo $value->pilihan_opt ?>">
                                            </div>
                                        </div>

                                    <?php }
                                }
                            } elseif ($value->type_soal == "Checkbox") {
                                foreach ($soal_opt as $key => $value) {
                                    if ($kd == $value->id_soal) { ?>
                                        <div class="input-group-prepend mt-2 col-sm-8">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="jawaban[]" value="<?php echo $value->pilihan_opt ?>" aria-label="Checkbox button for following text input">
                                            </div>
                                            <input class="form-control" value="<?php echo $value->pilihan_opt ?>">
                                        </div>

                                <?php }
                                }
                            } elseif ($value->type_soal == "Text") { ?>
                                <div class="mt-2 col-8">
                                    <input type="text" name="jawaban[2]" class="form-control">
                                </div>

                            <?php } elseif ($value->type_soal == "Textarea") { ?>
                                <div class="mt-2 col-sm-8">
                                    <textarea class="form-control mb-3" name="jawaban[]"></textarea>
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