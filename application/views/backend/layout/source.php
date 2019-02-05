<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grestenan Flora</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- shortcut icon -->
  <!-- <link rel="shortcut icon" href="<?php echo base_url()?>asset/img/motorku.png"> -->
    <link rel="shortcut icon" href="<?= base_url();?>asset/images/ico/apple-touch-icon-144-precomposed.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>dist/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>dist/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>dist/bower_components/Ionicons/css/ionicons.min.css">
  <!-- data Tables -->
  <link rel="stylesheet" href="<?= base_url()?>dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.css">
  <!-- Select2 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url()?>asset/css/select2.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>dist/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>dist/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>dist/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- <script src="<?php echo base_url() ?>asset/js/jquery-1.10.2.js"></script> -->
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url()?>dist/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url()?>dist/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url()?>dist/dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url();?>dist/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>dist/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>

</head>
