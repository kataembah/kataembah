<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masuk Administrator</title>
		<link rel="shortcut icon" href="<?=base_url()?>asset/dist/img/AdminLTELogo.png" type="image/x-icon">

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

    <body style="background: url('<?= base_url()?>asset/dist/img/photo4.jpg');background-size: cover">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                        	<h1><img src="<?=base_url()?>asset/dist/img/AdminLTELogo.png" alt="" style="margin-right: 20px;width: 60px"><strong>Aplikasi</strong> Indonesia</h1>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Masuk Kehalaman Administrator</h3>
                            		<p>Masukan Username dan Password untuk masuk</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?= site_url('auth/getloginAdmin') ?>" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <div class="form-group">
			                        	<input type="checkbox"> Remember Me
			                        	<a class="pull-right" href="#">Forgot password</a>
			                        </div>
			                        <button type="submit" class="btn btn-primary">Masuk</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                        	<a style="color: #000;text-decoration: underline;" href="<?= base_url() ?>"><i class="fa fa-arrow-left"></i> Ke Halaman Utama</a> 
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

</html>