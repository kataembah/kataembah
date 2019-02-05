  <!-- meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Dika Fahrozy, DikaOji, Dika, Oji">
  
  <!-- css -->
  <link href="<?= base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/css/animate.min.css" rel="stylesheet"> 
  <link href="<?= base_url();?>asset/css/lightbox.css" rel="stylesheet"> 
  <link href="<?= base_url();?>asset/css/main.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/css/responsive.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/css/mycss.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="<?= base_url();?>asset/js/html5shiv.js"></script>
    <script src="<?= base_url();?>asset/js/respond.min.js"></script>
  <![endif]-->       
  
  <!-- iconic -->
  <link rel="shortcut icon" href="<?= base_url();?>asset/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url();?>asset/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url();?>asset/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url();?>asset/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?= base_url();?>asset/images/ico/apple-touch-icon-57-precomposed.png">
  
  <!-- javascript -->
  <script type="text/javascript" src="<?= base_url();?>asset/js/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url();?>asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>asset/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>asset/js/wow.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>asset/js/main.js"></script>
  <script type="text/javascript" src="<?= base_url();?>asset/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="<?= base_url();?>asset/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>asset/js/holder.js"></script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });

    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>
