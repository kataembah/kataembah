<?php
    $uri1 = $this->uri->segment(1);
    $uri2 = $this->uri->segment(2);
?>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
               <div class="register pull-right">
                    <ul class="nav nav-pills">
                        <!-- <li><a href="<?= site_url('dashboard/daftar') ?>">Daftar</i></a></li> -->
                        <li><a href="<?= site_url('dashboard/konfirmasi') ?>">Konfirmasi Pesanan</a></li>
                        <li><a href="<?= site_url('dahboard/lacak') ?>">Lacak Pesanan</a></li>
                        <li><a href="<?= site_url('auth/login') ?>">Login</a></li>
                    </ul>
                </div> 
            </div>
         </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?= base_url() ?>">
                    <h1><img src="<?= base_url() ?>asset/images/logo.png" alt="logo" width="208px" height="60px"></h1>
                </a>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?= ($uri1 == '' || $uri1 == 'dashboard' && $uri2 == '')? 'active' : '' ; ?>"><a href="<?= base_url() ?>">Home</a></li>
                    <!-- <li class="dropdown <?= ($uri2 == 'product')? 'active' : '' ; ?>"><a href="#">Produk <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?= site_url('dashboard/product') ?>">Tanaman Hias</a></li>
                            <li><a href="aboutus.html">Jasa Pembuatan Taman</a></li>
                            <li><a href="aboutus2.html">Jasa Pembuatan Kolam</a></li>
                            <li><a href="service.html">Jasa Perawatan Taman</a></li>
                            
                        </ul>
                    </li> -->
                    <li class="<?= ($uri2 == 'lokal')? 'active' : '' ; ?>">
                        <a href="<?= site_url('dashboard/lokal') ?>">Aglaonema Lokal</a>
                    </li>
                    <li class="<?= ($uri2 == 'import')? 'active' : '' ; ?>">
                        <a href="<?= site_url('dashboard/import') ?>">Aglaonema Thailand</a>
                    </li>
                    <li <?php ($uri2 == 'keranjang') ? "style='border-bottom:2px solid #2C9C1A'" : "" ?> >
                        <a href="<?= site_url('dashboard/keranjang') ?>" <?= ($uri2 == 'keranjang') ? "style='border-bottom:2px solid #2C9C1A'" : "" ?> >
                            <i class="fa fa-shopping-cart" style="font-size: 14pt;color:#36ab49;float: none;padding-right: 3px"></i>
                            <span class="badge alert-info"><?= count($this->cart->contents()) ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <form role="form" method="post" action="<?= site_url('dashboard/search') ?>">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle input-group">
                        <input type="text" class="search-form" autocomplete="off" name="cari" placeholder="Cari Produk" required  oninvalid="this.setCustomValidity('Tidak boleh Kosong')" oninput="setCustomValidity('')">
                        <Button class="btn btn-success" type="submit" style="height: 40px;margin-top: -7px;margin-left: -8px">Cari</Button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>