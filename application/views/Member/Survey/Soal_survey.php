<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h3>Form Buat Survey</h3>



        <form id="form" action="<?= base_url('Member/SoalSurvey_ctrl/buatsoal'); ?>" method="POST">
          <center><br />
            <input type="hidden" name="idtask" id="idtask" class="form-control" value="<?= $id_task; ?> ">

            <button type="submit" class="btn btn-outline-primary btn-icon-text">
              <i class="mdi mdi-file-check btn-icon-prepend"></i> Buat Soal </button>
          </center>
        </form>


        <div class="template-demo d-flex justify-content-between flex-nowrap">

          <button id="add" class="btn btn-inverse-info btn-icon">
            <i class="mdi mdi-plus-box"></i></button>
        </div>

      </div>
    </div>
  </div>
  <script src="<?php echo base_url(); ?>assets/surveyer/assets/js/index.js"></script>