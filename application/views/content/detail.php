 <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Detail Produk</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <?php foreach ($getProduk as $a): ?>
        <section id="portfolio-information" class="padding-top">
            <div class="container">
                <form action="<?= site_url('process/addCart') ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?= base_url() ?>asset/images/portfolio/<?= ($a->img == NULL) ? '1.jpg' : $a->img ?>" class="img-responsive thumbnail" alt="" width="552px" height="577px" >
                        </div>
                        <div class="col-sm-6">
                            <div class="project-name overflow">
                                <h2 class="bold"><?= $a->nama_produk ?></h2>
                                <h2 style="color: #2BBC18">Rp. <?= number_format($a->harga) ?></h2>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-tag"></i>Branding</a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Info Produk :</h3>
                                <blockquote><?= $a->deskripsi ?></blockquote>
                            </div>
                            <div class="skills overflow">
                                <h3>Kategori Tanaman :</h3>
                                <ul class="nav navbar-nav navbar-default">
                                    <li><a href="#"><i class="fa fa-check-square"></i>Algaonema <?= $a->jenis_produk ?></a></li>
                                </ul>
                            </div>
                            <div class="project-info overflow">
                                <h3>Jumlah Produk:</h3>
                                <input type="number" required class="form-control" min="0" style="width: 100px" name="qty" oninvalid="this.setCustomValidity('Masukan jumlah produk')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="live-preview">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="hidden" value="<?= $a->nama_produk ?>" name="nama">
                                        <input type="hidden" value="<?= $a->img ?>" name="img">
                                        <input type="hidden" value="<?= $a->harga ?>" name="harga">
                                        <input type="hidden" value="<?= $a->id_produk ?>" name="id">
                                        <button type="submit" class="btn btn-common uppercase"><i class="fa fa-shopping-cart"></i> Masukan Keranjang</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-common uppercase"><i class="fa fa-money"></i> Beli Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <?php endforeach ?>

    <!-- produk terkait -->
    <section id="related-work" class="padding-top padding-bottom">
        <div class="container" align="center">
            <div class="row">
                <h1 class="title text-center">Produk Terkait</h1>
                <!-- lokal -->
                <?php if ($a->jenis_produk == 'Lokal'): ?>
                    <?php foreach ($produkLokal as $b): ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="<?= base_url() ?>asset/images/portfolio/<?= ($b->img == NULL) ? '1.jpg' : $b->img ?>" class="img-responsive" alt="<?= $b->nama_produk ?>" style="width:261px;height:269px">
                                    </div>
                                    <div class="portfolio-view">
                                        <ul class="nav nav-pills">
                                            <li title="Tambah ke keranjang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="<?= site_url('process/add/').$b->id_produk ?>"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                            <li title="Lihat detail" data-toggle="tooltip" data-placement="bottom">
                                                <a href="<?= site_url('dashboard/detail_product/')  ?><?= $b->id_produk ?>"><i class="fa fa-eye"></i></a>
                                            </li>
                                            <li title="Beli sekarang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="#"><i class="fa fa-money"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2><?= $b->nama_produk ?></h2>
                                    <h2 style="color: #2BBC18">
                                        Rp. 
                                        <script type="text/javascript">
                                          var bilangan = <?= $b->harga ?>;
                                          
                                          var reverse_number = bilangan.toString().split('').reverse().join(''),
                                            ribuan  = reverse_number.match(/\d{1,3}/gi);
                                            ribuan  = ribuan.join('.').split('').reverse().join('');
                                            
                                          document.write(ribuan);
                                        </script>    
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>


                <!-- Thailand -->
                <?php if ($a->jenis_produk == 'Thailand'): ?>
                    <?php foreach ($produkThailand as $b): ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="<?= base_url() ?>asset/images/portfolio/<?= ($b->img == NULL) ? '1.jpg' : $b->img ?>" class="img-responsive" alt="<?= $b->nama_produk ?>" style="width:261px;height:269px">
                                    </div>
                                    <div class="portfolio-view">
                                        <ul class="nav nav-pills">
                                            <li title="Tambah ke keranjang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                            <li title="Lihat detail" data-toggle="tooltip" data-placement="bottom">
                                                <a href="<?= site_url('dashboard/detail_product/')  ?><?= $b->id_produk ?>"><i class="fa fa-eye"></i></a>
                                            </li>
                                            <li title="Beli sekarang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="#"><i class="fa fa-money"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2><?= $b->nama_produk ?></h2>
                                    <h2 style="color: #2BBC18">
                                        Rp. 
                                        <script type="text/javascript">
                                          var bilangan = <?= $b->harga ?>;
                                          
                                          var reverse_number = bilangan.toString().split('').reverse().join(''),
                                            ribuan  = reverse_number.match(/\d{1,3}/gi);
                                            ribuan  = ribuan.join('.').split('').reverse().join('');
                                            
                                          document.write(ribuan);
                                        </script>    
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </section>
    <!--/#related-work-->