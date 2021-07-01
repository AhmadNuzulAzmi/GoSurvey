<?php
foreach ($judul_task as $value) {
  $a = $value->judul_task;
} ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h1 style="font-style: italic;" align="center"><?= $a; ?></h1>
        <div class=" template-demo d-flex justify-content-between flex-nowrap">
          <button id="add" class="btn btn-inverse-info btn-icon">
            <i class="mdi mdi-plus-box"></i></button>
        </div>

      </div>
    </div>

    <div class="card-body">
      <form id="form" action="<?= base_url('Member/SoalSurvey_ctrl/buatsoal'); ?>" method="POST">
        <br />
        <input type="hidden" name="idtask" id="idtask" class="form-control" value="<?= $id_task; ?> ">

    </div>
    <center>
      <button type="submit" class="btn btn-outline-info btn-rounded btn-icon-text mt-2">
        <i class="mdi mdi-file-check btn-icon-prepend"></i> Buat Soal </button>
    </center>
    </form>
    <!-- <div class="card-body">
      <div class=" template-demo d-flex justify-content-between flex-nowrap">
        <button id="addd" class="btn btn-inverse-info btn-icon mx-3">
          <i class="mdi mdi-plus-box"></i></button>
      </div>
    </div> -->

  </div>
</div>
</div>
<script src="<?php echo base_url(); ?>assets/surveyer/assets/js/index.js"></script>