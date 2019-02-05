<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Informasi Pemesanan</h1>
                        <p>Grestenan Flora</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients" style="margin-top: 40px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" align="center">
                <h4>Nomor Resi Kamu</h4>
                <p>Simpan nomor ini untuk keperluan konfirmasi pembayaran</p>
                <div class="col-sm-4 col-sm-offset-4">
                    <h2 class="thumbnail" style="margin-top: 0px"><b><?= ($this->uri->segment(3) == null)? '<a href="'.site_url('dashboard').'">Ayo Belanja!</a>' : $this->uri->segment(3)?></b></h2>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6" style="margin-bottom: 10px">
                        <div class="box col-sm-12">
                            <h3 class="page-header" align="center"><b>Detail Pemesanan</b></h3>
                            <div class="col-sm-12">
                                <?php if ($produk != null): ?>
                                    <?php foreach ($produk as $a): ?>
                                        <?php $tgl =  $a->tgl_pemesanan; ?>
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-4"><?= $a->nama_produk ?></div>
                                            <div class="col-sm-3 col-xs-3">Rp. <?= number_format($a->harga) ?></div>
                                            <div class="col-sm-1 col-xs-1">X</div>
                                            <div class="col-sm-1 col-xs-1"><?= $a->qty ?></div>
                                            <div class="col-sm-3 col-xs-3">Rp. <?= number_format($a->harga*$a->qty) ?></div>
                                        </div>
                                    <?php endforeach ?>
                                <?php endif ?>
                                <?php if ($produk==null): ?>
                                    <h5 align="center">Tidak ada data</h5>
                                <?php endif ?>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h5 class="pull-right">Total bayar</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php foreach ($faktur as $b): ?>
                                            <h5>Rp. <?= $total = number_format($b->total) ?></h5>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box col-sm-12">
                            <h3 class="page-header" align="center"><b>Detail Pengiriman</b></h3>
                            <div class="col-sm-12" style="margin-bottom: 20px">
                                <?php if ($pelanggan != null): ?>
                                    <?php foreach ($pelanggan as $b): ?>
                                        <div class="row">
                                            <div class="col-sm-4">ID Pelanggan</div>
                                            <div class="col-sm-8"><?= $b->id_pelanggan ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Nama</div>
                                            <div class="col-sm-8"><?= $b->nama_pelanggan ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Jenis Kelamin</div>
                                            <div class="col-sm-8"><?= $b->jenis_kelamin ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Email </div>
                                            <div class="col-sm-8"><?= $b->email ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Nomor Telepon</div>
                                            <div class="col-sm-8"><?= $b->no_hp ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Alamat Pengiriman </div>
                                            <div class="col-sm-8"><?= $b->alamat ?></div>
                                        </div>
                                    <?php endforeach ?>
                                <?php endif ?>
                                <?php if ($pelanggan==null): ?>
                                    <h5 align="center">Tidak ada data</h5>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="portfolio-pagination">
                    <form  method="post" action="<?= site_url('dashboard/pembayaran'); ?>">
                        <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="faktur">
                        <input type="hidden" value="<?= ($this->uri->segment(3) != Null)? $tgl : '' ?>" name="tgl">
                        <input type="hidden" value="<?= ($this->uri->segment(3) != Null)? $total : '' ?>" name="total">
                        <button type="submit" class="btn btn-common <?= ($this->uri->segment(3) == null)? 'disabled' : ''?>"> <i class="fa fa-money" ></i> Lanjutkan Pembayaran </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .box{
        border: 1px solid #DFDFDF;
    }
    .page-header{
        margin-top: 20px
    }
    .row{
        margin-bottom: 10px
    }
</style>