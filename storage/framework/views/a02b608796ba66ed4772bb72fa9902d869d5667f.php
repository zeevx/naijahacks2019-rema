<!DOCTYPE html>
<html>
<head>
    <!--========= Basic Page Needs =========-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--========== Specific Meta ==========-->
    <meta name="description" content="REMA">

    <!--======== Page Title===========-->
    <title>REMA - Result Management and Analysis</title>
    
    <!--========== Favicons =========-->
    <link rel="shortcut icon" href="<?php echo e(url('public/images/favicon.ico')); ?>">
    
    <!--======== Font icon Css ============-->
    <link href="<?php echo e(url('public/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('public/css/themify-icons.css')); ?>" rel="stylesheet">
    
    <!--======= Bootstrap Main Css =============-->
    <link href="<?php echo e(url('public/css/bootstrap.min.css')); ?>" rel="stylesheet">
    
    <!--====== Plugins Css ================-->
    <link href="<?php echo e(url('public/css/plugins.css')); ?>" rel="stylesheet">

    <!--====== Custom CSS for themes =======-->
    <link href="<?php echo e(url('public/css/style.css')); ?>" rel="stylesheet">
    
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <script src="<?php echo e(url('public/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
</head>
<body>
    
    
    <!--====Home Search Section
    ====================================-->
    <div id="home-search-section" class="home-search-section-area bg-image home-header-one" style="background-image: url(<?php echo e(url('public/images/welcome-bg.jpg')); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="welcome-text text-center tb">
                        <div class="tb-cell">
                                <img class="img-resposive" src="<?php echo e(url('public/logo2.png')); ?>"/>

                            <h1>Result Management and Analysis</h1>
                            <p>Improving the standards of the default learning and teaching processes..</p>
                            <form class="product-search-form" action="<?php echo e(url('login')); ?>" method="get">
                                <div class="form-group">
                                    <input class="form-controllar" name="key" placeholder="Type your email address" type="text">
                                    <button class="btn btn-default btn-primary" type="submit">Proceed</button>

                                 </div>
                                </br>
                                <div class="divider-or text-center">
                                        <span>or</span>
                                    </div>  <div class=""><a class="btn btn-default btn-primary" href="<?php echo e(url('register')); ?>">Get Access</a></div>

                            </form>
                            <!--/.product-search-form-->
                                                </br></br></br></br></br></br></br></br>
                        </div><!--/.tb-cell-->
                    </div><!--/.welcome-text-->
                </div><!--/.col-lg-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/#home-search-section-->
      
    <!--====Services Section
    ====================================-->
    <section id="services-section" class="services-section-area s-pd1">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
				    <div class="section-heading-area text-center">
					    <h2 class="section-heading text-capitalize">This is what we offer you</h2>
				    </div><!--/.section-heading-area--> 
				</div><!--/.col-lg-8-->
			</div><!--/.row-->
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="single-service text-center">
                        <div class="icon">
				            <img src="<?php echo e(url('public/images/icon/s-icon1.png')); ?>" alt="icon">
				        </div>
						<h3>Storage</h3>
						<p>We provide enough storage access for all your data, anytime and anywhere.</p>
					</div><!--/.single-service-->
				</div><!--/.col-lg-4-->
				<div class="col-lg-4 col-md-4">
					<div class="single-service text-center">
                        <div class="icon">
				            <img src="<?php echo e(url('public/images/icon/s-icon2.png')); ?>" alt="icon">
				        </div><!--/.row-->
						<h3>Security</h3>
						<p>We provide optimal security for your data, we protect it from breaches and hacks.</p>
					</div><!--/.single-service-->
				</div><!--/.col-lg-4-->
				<div class="col-lg-4 col-md-4">
					<div class="single-service text-center">
                        <div class="icon">
				            <img src="<?php echo e(url('public/images/icon/s-icon3.png')); ?>" alt="icon">
				        </div><!--/.row-->
						<h3>Management & Analysis</h3>
						<p>We give you the right tool to manage and analyze results uploaded.</p>
					</div><!--/.single-service-->
				</div><!--/.col-lg-4-->	
			</div><!--/.row-->
		</div><!--/.container-->
	</section><!--/#services-section-->
   
    
    <!-- Start footer area -->
    <footer id="footer" class="site-footer">
       
        <!-- Start footer copyright area -->
        <div class="footer-copyright-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            &copy; Designed by <a href="#">Team REMA - Naija Hacks</a> 
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--End footer copyright area -->
    </footer><!--End footer area -->
   
    
    
</body>

</html><?php /**PATH /var/www/html/naijahacks2019-rema/resources/views/welcome.blade.php ENDPATH**/ ?>