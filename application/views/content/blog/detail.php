<div class="col-md-9 col-sm-7">
    <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="single-blog blog-details two-column">
                <div class="post-thumb">
                    <a href="#"><img src="<?= base_url() ?>asset/images/blog/7.jpg" class="img-responsive" alt=""></a>
                    <div class="post-overlay">
                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                    </div>
                </div>
                <div class="post-content overflow">
                    <h2 class="post-title bold"><a href="#">Advanced business cards design</a></h2>
                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br> <br>

                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                    <div class="post-bottom overflow">
                        <ul class="nav navbar-nav post-nav">
                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                        </ul>
                    </div>
                    <div class="blog-share">
                        <span class='st_facebook_hcount'></span>
                        <span class='st_twitter_hcount'></span>
                        <span class='st_linkedin_hcount'></span>
                        <span class='st_pinterest_hcount'></span>
                        <span class='st_email_hcount'></span>
                    </div>
                   
                    <!-- author -->
                    <div class="author-profile padding">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="<?= base_url() ?>asset/images/blogdetails/1.png" alt="">
                            </div>
                            <div class="col-sm-10">
                                <h3>Rodrix Hasel</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                <span>Website:<a href="www.jooomshaper.com"> www.jooomshaper.com</a></span>
                            </div>
                        </div>
                    </div>

                    <!-- comments -->
                    <div class="response-area">
                        <h2 class="bold">Comments</h2>
                        <div class="row">
                           <div class="col-sm-12">
                                <form id="main-contact-form" name="contact-form" method="post" action="<?= site_url('process/sendMail') ?>">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="10" placeholder="Buat Pertanyaan disini"></textarea>
                                </div>                        
                                <div class="form-group col-sm-4 col-sm-offset-8">
                                    <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                                </div>
                            </form>
                           </div>
                        </div>
                        <ul class="media-list">
                            <li class="media">
                                <div class="post-comment">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="<?= base_url() ?>asset/images/blogdetails/2.png" alt="">
                                    </a>
                                    <div class="media-body">
                                        <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="parrent">
                                    <ul class="media-list">
                                        <li class="post-comment reply">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="<?= base_url() ?>asset/images/blogdetails/3.png" alt="">
                                            </a>
                                            <div class="media-body">
                                                <span><i class="fa fa-user"></i>Posted by <a href="#">Endure</a></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                                                <ul class="nav navbar-nav post-nav">
                                                    <li><a href="#"><i class="fa fa-clock-o"></i>February 11,2014</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>                   
                    </div><!--/Response-area-->

                </div>
            </div>
        </div>
    </div>
</div>