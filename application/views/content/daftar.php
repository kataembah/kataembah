<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Data Pelanggan</h1>
                        <p>Grestenan Flora</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients" style="margin-top: 60px">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="<?php base_url()?>../../process/daftar" method="post">
                    <div class="col-sm-12">
                        <!-- data pribadi  -->
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4"><h5>Nama Lengkap</h5></div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" required name="nama" oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"><h5>Jenis Kelamin</h5></div>
                                <div class="col-sm-8">
                                    <select required name="jk" id="" class="form-control" id="jk" oninvalid="this.setCustomValidity('Pilih Jenis Kelamin')" oninput="setCustomValidity('')">
                                        <option value=""></option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <p id="errorKelamin"></p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"><h5>Email</h5></div>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" required name="email" oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"><h5>Nomor telepon</h5></div>
                                <div class="col-sm-8">
                                    <input type="text" onkeypress="return hanyaAngka(event)" maxlength="13" class="form-control" id="telp" required name="telp" oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            
                        </div>

                        <!-- alamat -->
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4"><h5>Alamat</h5></div>
                                <div class="col-sm-8">
                                    <textarea required name="alamat" class="form-control" id="alamat" rows=4.5 oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-1"><h5>RT</h5></div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" required maxlength="3" name="rt" oninvalid="this.setCustomValidity('RT Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-sm-1"><h5>RW</h5></div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" required maxlength="3" name="rw" oninvalid="this.setCustomValidity('RW Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"><h5>Kecamatan</h5></div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" required name="kec" oninvalid="this.setCustomValidity('Kecamatan Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"><h5>Kabupaten/Kota</h5></div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" required name="kab" oninvalid="this.setCustomValidity('Kabupaten Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"><h5>Provinsi</h5></div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" required name="prov" oninvalid="this.setCustomValidity('Provinsi Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4"><h5>Kode Pos</h5></div>
                                <div class="col-sm-3">
                                    <input type="text" maxlength="6" onkeypress="return hanyaAngka(event)" class="form-control" id="alamat" required name="kodepos" oninvalid="this.setCustomValidity('Kode Pos Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <input name="id" type="hidden" value="<?= $this->uri->segment(3) ?>">
                                <button value="kirim" name="register" type="submit" class="btn btn-primary btn-lg pull-right <?= ($this->cart->contents() == NULL) ? 'disabled' : '' ?>">Check Out</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </section>