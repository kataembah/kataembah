  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>dist/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?= base_url()?>Admin/home"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
       
            <li>
          <a href="<?= base_url()?>Admin/produk">
            <i class="fa fa-list-alt"></i> <span>Daftar Produk</span>
            <span class="pull-right-container">
            
            </span>
          </a>
        </li>
        <li>
          <a href="<?= base_url()?>Admin/Pesanan">
            <i class="fa fa-envelope"></i> <span>Pesanan</span>
            <span class="pull-right-container">
           
            </span>
          </a>
        </li>
        <li>
          <a href="<?= base_url()?>Admin/Pelanggan">
            <i class="fa fa-users"></i> <span>Pelanggan</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
         
        <li class="header"><i class="fa fa-gear"></i> Setting</li>
         <li><a href="<?= base_url()?>index.php/Admin/setting"><i class="fa fa-circle-o text-yellow"></i> <span>Rekening & Bukti Transfer</span></a></li>
        <li><a href="<?= base_url()?>index.php/Admin/slide"><i class="fa fa-circle-o text-blue"></i> <span>Slide</span></a></li>
        <li><a href="<?= base_url()?>index.php/Admin/Backup"><i class="fa fa-circle-o text-red"></i> <span>Backup & Restore</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
