<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php $this->load->view('backend/layout/source') ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  	<?php $this->load->view('backend/layout/navbar')?>

 <?php $this->load->view('backend/layout/sidebar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <br>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $label;?></li>
      </ol>
    </section>

    <section class="content">
      	<?php $this->load->view('backend/content/'.$page) ?>
    </section>
   
  </div>
 <?php $this->load->view('backend/layout/footer')?>
</div>
</body>
</html>
