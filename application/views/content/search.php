<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Daftar Pencarian <b>"<?= $cari ?>"</b></h1>
                        <p>Ditemukan <?= $hasil ?> pencarian</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($produk == NULL){ ?>
                    <div class="padding"></div>
                    <div class="clients text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <p><img src="<?= base_url() ?>asset/images/home/clients.png" class="img-responsive" alt="" style="width: 150px"></p>
                        <h1 class="title">Pencarian Tidak ditemukan</h1>
                    </div>
                    
                <?php }else{ ?>
                    <div style="margin-top: 50px"></div>
                    <?php foreach ($produk as $a): ?>
                         <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item" align="center">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="<?= base_url() ?>asset/images/portfolio/<?= ($a->img == NULL) ? '1.jpg' : $a->img ?>" class="img-responsive" alt="<?= $a->nama_produk ?>" >
                                    </div>
                                    <div class="portfolio-view">
                                        <ul class="nav nav-pills">
                                            <li title="Tambah ke keranjang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="<?= site_url('process/add/').$a->id_produk ?>"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                            <li title="Lihat detail" data-toggle="tooltip" data-placement="bottom">
                                                <a href="<?= site_url('dashboard/detail_product/')  ?><?= $a->id_produk ?>"><i class="fa fa-eye"></i></a>
                                            </li>
                                            <li title="Beli sekarang" data-toggle="tooltip" data-placement="bottom">
                                                <a href="#"><i class="fa fa-money"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2><?= $a->nama_produk ?></h2>
                                    <h2 style="color: #2BBC18">
                                        Rp. 
                                        <script type="text/javascript">
                                          var bilangan = <?= $a->harga ?>;
                                          
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
                <?php } ?>
            </div>
        </div>
    </div>
</section>