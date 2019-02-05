<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h2 class="title">Transaksi Berhasil Dilakukan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients" style="margin-top: 60px">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1" align="center">
                <h4>Terima kasih, Pesanan anda akan segera di proses</h4>
                <div class="table-responsive">
                	<table class="table table-bordered">
                		<tr>
                			<td>
                				<p class="small">Nomor order :</p>
                				<?= $faktur ?>
                			</td>
                			<td>
                				<p class="small">Tanggal order : </p>
                				<?= date('d F Y', strtotime($tgl)) ?>
                			</td>
                			<td>
                				<p class="small">Total :</p>
                				Rp. <?= $total ?>
                			</td>	
                			<td>
                				<p class="small">Metode Pembayaran</p>
                				<p><i>Direct Bank Transfer</i></p>
                			</td>
                		</tr>
                	</table>
                </div>
                <h4>Lakukan pembayaran langsung pada salah satu rekening kami dibawah ini. Silahkan gunakan <b><i>Nomor Order</i></b> anda untuk konfirmasi pembayaran di halaman <a href="#">konfirmasi pesanan</a></h4>
            </div>
        </div>
        <div class="row">
        	<div class="col-sm-10 col-sm-offset-1">
        		<h4>Detail Rekening Bank Kami</h4>
        		<table class="table-responsive">
        			<table class="table table-striped">
        				<thead>
        					<tr class="alert-info">
	        					<td>Atas Nama</td>
	        					<td>Nomor Rekening</td>
	        					<td>Bank</td>
	        				</tr>
        				</thead>
        				<tbody>
        					<?php foreach ($rekening as $a): ?>
        						<tr>
		        					<td><?= $a->atas_nama ?></td>
		        					<td><?= $a->nomor_rekening ?></td>
		        					<td><?= $a->nama_bank ?></td>
		        				</tr>
        					<?php endforeach ?>
        				</tbody>
        			</table>
        		</table>
        	</div>
        </div>
    </div>
</section>