<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <nav aria-label="breadcrumb">
      </nav>
    </div>

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Buat Survey</h2>
          <br />
          <form class="forms-sample" action="<?= site_url('Member/TaskSurvey_ctrl/create_survey') ?>" method="POST">
            <div class="form-group">
              <input type="hidden" name="id_usr" class="form-control" value="<?= $user['id_usr']; ?> " id="exampleInputName1">
            </div>
            <div class="form-group">
              <label>Owner</label>
              <input type="text" name="nama" readonly class="form-control" value="<?= $user['nama_usr']; ?> " id="exampleInputName1">
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" name="judul" class="form-control" id="exampleInputEmail3">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label>Jumlah Responden</label>
              <input type="text" name="jml_res" class="form-control" id="exampleInputPassword4">
            </div>
            <div class="form-group">
              <label>Nominal Survey</label>
              <input type="text" name="nominal" class="form-control" id="exampleInputPassword4">
            </div>
            <div class="form-group">
              <label>Upload Bukti Pembayaran</label>
              <input type="text" name="bukti" class="form-control" id="exampleInputPassword4">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
          </form>
          <a href="<?= base_url('Member/TaskSurvey_ctrl/waiting_survey'); ?>" class="btn btn-danger">Beralih</label></a>
          <!-- <button class="btn btn-danger">Cancel</button> -->

        </div>

      </div>
    </div>


  </div>