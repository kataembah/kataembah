<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Keranjang Belanja</h1>
                        <p>Grestenan Flora</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients" style="margin-top: 80px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                            <tr align="center">
                                <th width="10px"></th>
                                <th width="150px">Tanaman</th>
                                <th>Produk</th>
                                <th width="150px">Harga Satuan</th>
                                <th width="150px">Jumlah Barang</th>
                                <th width="150px">Sub Total</th>
                                <th width="50px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($produk != Null ): ?>
                                <?php foreach ($produk as $items): ?>
                                    <form action="<?= site_url('process/updateCart/').$items['rowid'] ?>" method="post">
                                        <tr>
                                            <td>
                                                <a href="<?= site_url('process/deleteCart/').$items['rowid'] ?>" onclick="return confirm('Apakah anda yakin?')" title="Hapus dari keranjang" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
                                                   X
                                                </a>
                                            </td>
                                            <td align="center"><img src="<?= base_url() ?>asset/images/portfolio/<?= ($items['option']['img'] != Null) ? $items['option']['img'] : '1.jpg' ?>" alt="produk" class="thumbnail" width="80px" height="80px"></td>
                                            <td><?= $items['name'] ?></td>
                                            <td>Rp. <?= number_format($items['price']) ?></td>
                                            <td><input type="number" min="0" value="<?= $items['qty'] ?>" name='qty' class="form-control"></td>
                                            <td>Rp. <?= number_format($items['subtotal']) ?></td>
                                            <td><button type="submit" class="btn btn-warning pull-right">Ubah</button></td>
                                        </tr>
                                    </form>
                                <?php endforeach ?>
                            <?php endif ?>
                            <?php if ($produk == Null): ?>
                                <tr>
                                    <th colspan="7" height="10px" class="alert-warning"><p align="center"> Tidak Ada data</p></th>
                                </tr>
                            <?php endif ?>
                        </tbody>
                        <?php if ($produk != Null): ?>
                            <tfoot>
                                <th><a href="<?= site_url('process/delAll') ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus semua?')" title="Hapus semua dari keranjang" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-trash"></i></a></th>
                            </tfoot>
                        <?php endif ?>
                    </table>
                </div>
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table">
                        <tr>
                            <td align="right">Total Bayar</td>
                            <td>Rp. <?= number_format($this->cart->total()) ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a class="btn btn-primary pull-right <?= ($produk == Null) ? 'disabled' : '' ?>" href="<?= site_url('dashboard/daftar') ?>/<?php echo '2'.time().'4';?>"><i class="fa fa-money"></i> Lanjutkan Pembayaran</a>
                                <!-- <a class="btn btn-default pull-right"><i class="fa fa-money"></i> Lanjutkan Pembayaran</a> -->
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>