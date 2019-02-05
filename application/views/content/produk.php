<?php 

    $url2 = $this->uri->segment(2);

 ?>

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?= $jenis ?></h1>
                            <p>Kami menyediakan lebih dari 500 jenis tanaman hias impor maupun lokal yang siap order </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

<section id="projects" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="row" align="center">
                    
                    <?php foreach ($getProduk as $gp): ?>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="<?= base_url() ?>asset/images/portfolio/<?= ($gp->img == NULL) ? '1.jpg' : $gp->img ?>" class="img-responsive" alt="<?= $gp->nama_produk ?>">
                                    </div>
                                    <div class="portfolio-view">
                                        <ul class="nav nav-pills">
                                            <li title="Tambah ke keranjang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="<?= site_url('process/add/').$gp->id_produk ?>"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                            <li title="Lihat detail" data-toggle="tooltip" data-placement="bottom">
                                                <a href="<?= site_url('dashboard/detail_product/')  ?><?= $gp->id_produk ?>"><i class="fa fa-eye"></i></a>
                                            </li>
                                            <li title="Beli sekarang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="#"><i class="fa fa-money"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2 style="height: 30px"><?= $gp->nama_produk ?></h2>
                                    <h2 style="color: #2BBC18">
                                        Rp. <?= number_format($gp->harga) ?>
                                        <!-- <script type="text/javascript">
                                          var bilangan = <?= $gp->harga ?>;
                                          
                                          var reverse_number = bilangan.toString().split('').reverse().join(''),
                                            ribuan  = reverse_number.match(/\d{1,3}/gi);
                                            ribuan  = ribuan.join('.').split('').reverse().join('');
                                            
                                          document.write(ribuan);
                                        </script> -->
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="portfolio-pagination">
                    <?= $halaman ?>   
                </div>
            </div>

            <!-- sidebar -->
            <div class="col-md-3 col-sm-4" style="margin-bottom: 80px">
                <div class="sidebar portfolio-sidebar">
                    <!-- kategori produk -->
                    <div class="sidebar-item categories">
                        <h3>Produk Kategori</h3>
                        <ul class="nav navbar-stacked">
                            <li class="<?= ($url2 == 'lokal') ? 'active' : '' ?>"><a href="<?= site_url('dashboard/lokal') ?>">Aglaonema Lokal<span class="pull-right">(<?= $lokal ?>)</span></a></li>
                            <li class="<?= ($url2 == 'import') ? 'active' : '' ?>"><a href="<?= site_url('dashboard/import') ?>">Aglaonema Thailand<span class="pull-right">(<?= $import ?>)</span></a></li>
                        </ul>
                    </div>
                    <!-- produk baru -->
                    <div class="sidebar-item  recent">
                        <h3>Produk Baru</h3>
                        <?php if ($baru != NULL): ?>
                            <?php foreach ($baru as $e): ?>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="<?= site_url('dashboard/detail_product/').$e->id_produk ?>"><img src="<?= base_url() ?>asset/images/portfolio/<?= ($gp->img == NULL) ? '1.jpg' : $gp->img ?>" width="52px" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="<?= site_url('dashboard/detail_product/').$e->id_produk ?>"><?= $e->nama_produk ?></a></h4>
                                        <p>Rp. <script type="text/javascript">
                                          var bilangan = <?= $e->harga ?>;
                                          
                                          var reverse_number = bilangan.toString().split('').reverse().join(''),
                                            ribuan  = reverse_number.match(/\d{1,3}/gi);
                                            ribuan  = ribuan.join('.').split('').reverse().join('');
                                            
                                          document.write(ribuan);
                                        </script></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                        <?php if ($baru == NULL): ?>
                            <div class="media">
                                <div class="media-body">
                                    <h4><a href="#">Tidak ada produk</a></h4>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- Paling banyak di cari -->
                    <!-- <div class="sidebar-item popular">
                        <h3>Popular Projects</h3>
                        <ul class="gallery">
                            <li><a href="#"><img src="<?= base_url() ?>asset/images/portfolio/popular1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>asset/images/portfolio/popular2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>asset/images/portfolio/popular3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>asset/images/portfolio/popular4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>asset/images/portfolio/popular5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>asset/images/portfolio/popular1.jpg" alt=""></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>