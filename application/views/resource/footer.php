<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="<?= base_url(); ?>asset/images/home/under.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-lg-6 col-sm-7">
                <div class="contact-info bottom">
                    <h2>Kontak</h2>
                    <address>
                    E-mail : <a href="mailto:someone@example.com">admin@tamantanaman.com</a> <br> 
                    Telepon : 081217218218 <br><br>
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="social-icons">
                                <ul class="nav nav-pills">
                                    <li><a href="<?= base_url() ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?= base_url() ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?= base_url() ?>"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="<?= base_url() ?>"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="<?= base_url() ?>"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    </address>

                    <h2>Alamat</h2>
                    <address>
                    JL.Raya CItayam-Parung <br>
                    Perumahan Puri Bukit Depok <br>
                    Kp. Ceringin RT. 02/08 Ds. Ragajaya Kec. Bojong Gede
                    </address>
                </div>
            </div>
            <div class="col-lg-6 col-sm-5">
                <div class="contact-form bottom">
                    <h2>Kirim sebuah pesan</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="<?= site_url('process/sendMail') ?>">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Buat Pertanyaan disini"></textarea>
                        </div>                        
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; TamanTanaman.com <?= date('Y') ?>. All Rights Reserved.</p>
                    <p>Crafted by <a target="_blank" href="#"><b>PT. GRESTENAN RAMADHANI</b></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>