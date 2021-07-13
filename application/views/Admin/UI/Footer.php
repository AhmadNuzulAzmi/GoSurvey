<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Surveyer Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/surveyer/assets/DataTables/datatables.min.css">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/assets/images/ful.png" />
</head>

<body>
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <center>
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> GoSurveyTeam © 2021</span>
      </center>
    </div>
  </footer>
  <!-- partial -->

  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url(); ?>assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>

  <script src="<?php echo base_url(); ?>assets/admin/assets/alert/sweetalert2.all.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/assets/alert/myscript.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/assets/alert/myscript2.js"></script>
  <!-- End custom js for this page -->
</body>
<!-- <script>
  var flashdata = $('#flash').data('flash');
  if (flash) {
    swall.fire({
      icon: 'success',
      tittle: 'Success',
      text: 'Data Berhasil Ditambahkan!'
    })
  }
</script> -->
<script>
  $(function() {
    $('#modal').modal('toggle');
  });
  $(".edit").on("click", function() {
    const id = $(this).data('id');
    const nama = $(this).data('nama');
    const email = $(this).data('email');
    const status = $(this).data('status');

    // const job = $(this).data('job');

    $("#id_usr").attr("value", id);
    $("#nama_usr").attr("value", nama);
    $("#email_usr").attr("value", email);
    $("#status_usr").attr("value", status);
    // $("#namaPekerjaan_edit").attr("value", job);
  })
</script>
<script>
  $(function() {
    $('#modal').modal('toggle');
  });
  $(".edit").on("click", function() {
    const id = $(this).data('id');
    const logo = $(this).data('logo');
    const nama = $(this).data('nama');
    const nomor = $(this).data('nomor');
    const pemilik = $(this).data('pemilik');

    $("#no_bank").attr("value", id);
    $("#logo_bank").attr("value", logo);
    $("#nama_bank").attr("value", nama);
    $("#nomor_bank").attr("value", nomor);
    $("#Ats_nama").attr("value", pemilik);
  })
</script>
<script>
  $(function() {
    $('#modal').modal('toggle');
  });
  $(".edit3").on("click", function() {
    const id = $(this).data('id');
    const pembayaran = $(this).data('pembayaran');
    const status = $(this).data('status');
    const id_usr = $(this).data('id_usr');
    const total_nominal = $(this).data('total_nominal');
    const total_nominal1 = $(this).data('total_nominal1');
    // const nama = $(this).data('nama');
    // const nomor = $(this).data('nomor');
    // const pemilik = $(this).data('pemilik');

    $("#id_task").attr("value", id);
    $("#pembayaran").attr("value", pembayaran);
    $("#status").attr("value", status);
    $("#id_usr").attr("value", id_usr);
    $("#total_nominal").attr("value", total_nominal);
    $("#total_nominal1").attr("value", total_nominal1);

    // $("#nama_bank").attr("value", nama);
    // $("#nomor_bank").attr("value", nomor);
    // $("#Ats_nama").attr("value", pemilik);
  })

  // $(".form-control form-control-lg").on("change", function() {
  //   var fileName = $(this).val().split("\\").pop();
  //   $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  // });
</script>

<script>
  $(function() {
    $('#modal').modal('toggle');
  });
  $(".edit4").on("click", function() {
    const idtopup = $(this).data('id');
    const status = $(this).data('status');
    // const nama = $(this).data('nama');
    // const nomor = $(this).data('nomor');
    // const pemilik = $(this).data('pemilik');

    $("#id").attr("value", idtopup);
    $("#status").attr("value", status);
    // $("#nama_bank").attr("value", nama);
    // $("#nomor_bank").attr("value", nomor);
    // $("#Ats_nama").attr("value", pemilik);
  })
  $(".edit5").on("click", function() {
    const idtopup = $(this).data('id');
    const status = $(this).data('status');
    // const nama = $(this).data('nama');
    // const nomor = $(this).data('nomor');
    // const pemilik = $(this).data('pemilik');

    $("#id").attr("value", idtopup);
    $("#status").attr("value", status);
    // $("#nama_bank").attr("value", nama);
    // $("#nomor_bank").attr("value", nomor);
    // $("#Ats_nama").attr("value", pemilik);
  })
  // $(".form-control form-control-lg").on("change", function() {
  //   var fileName = $(this).val().split("\\").pop();
  //   $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  // });
</script>

<script src="<?php echo base_url(); ?>assets/surveyer/assets/DataTables/datatables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data_tables').DataTable();
  });
</script>

<script>
  $(function() {
    $('#modal').modal('toggle');
  });
  $(".harga").on("click", function() {
    const id = $(this).data('id');
    const harga = $(this).data('harga');
    const jml_saldo = $(this).data('jml_saldo');


    $("#id").attr("value", id);
    $("#harga").attr("value", harga);
    $("#jml_saldo").attr("value", jml_saldo);

  })
</script>

</html>