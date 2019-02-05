<!DOCTYPE html>
<html>
  <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="shortcut icon" href="<?= base_url();?>asset/images/ico/apple-touch-icon-144-precomposed.png">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?= base_url() ?>asset/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
  <body style="background: url('<?=base_url()?>asset/images/slide/IMG-20181113-WA0004.jpg');background-size: cover">

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                      
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                        <?php
                            //menampilkan error menggunakan alert javascript
                            if(isset($error)){
                                 echo" <h4 style='margin-bottom:-16px' class='alert alert-danger fade in'>$error</h4>";
                            }
                         ?> 
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <img src="<?= base_url() ?>asset/images/logo.png" alt="" style="width: 500px; height: 70px">
                                    <!-- <p>Masukan Username dan Password untuk masuk</p> -->
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form method="post" action="<?php echo base_url('index.php/auth/login'); ?>" class="login-form" role="login">
                                    <div class="form-group">
                                        <label class="sr-only" for="username">Username</label>
                                        <input type="text" class="form-username form-control" name="username" autofocus placeholder="Masukan Username" id="form-username"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Masukan Password"  id="form-password" />
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-primary" value="login">Masuk</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                           
                            <a class="label label-primary" style="color: #fff;font-size:15px; text-decoration: none;" href="<?= base_url() ?>"><i class="fa fa-arrow-left"></i> Ke Halaman Utama</a> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?= base_url() ?>asset/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?= base_url() ?>asset/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="<?= base_url() ?>asset/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>



 