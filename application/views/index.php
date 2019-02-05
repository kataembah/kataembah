<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Grestenan Flora</title>
  <?php $this->load->view('resource/source'); ?>
</head><!--/head-->

<body>
  <?php $this->load->view('resource/header'); ?>
  <!--/#header-->
  
  <?php $this->load->view($page); ?>
  <!--/#features-->

  <?php $this->load->view('resource/footer'); ?>
  <!--/#footer-->

</body>
</html>
