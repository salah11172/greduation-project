<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('images/logo.PNG')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/animate.css')); ?>">
        <link rel="stylesheet" type="text/css" href="  <?php echo e(asset('/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href=" <?php echo e(asset('/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href=" <?php echo e(asset('/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="  <?php echo e(asset('/css/chosen.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="  <?php echo e(asset('/css/style.css')); ?>">
        <link rel="stylesheet" type="text/css" href=" <?php echo e(asset('/css/color-01.css')); ?>">
		<script src="<?php echo e(asset('/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
		<script src="<?php echo e(asset('/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
		<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('/js/chosen.jquery.min.js')); ?>"></script>
		<script src="<?php echo e(asset('/js/owl.carousel.min.js')); ?>"></script>
		<script src="<?php echo e(asset('/js/jquery.countdown.min.js')); ?>"></script>
		<script src="<?php echo e(asset('/js/jquery.sticky.js')); ?>"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

		<script src="<?php echo e(asset('/js/functions.js')); ?>"></script>

    </head>
<body class="inner-page about-us ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels"  href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">			

				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456-789-1111</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<?php if( session()->get('LoggedUser') >= 1 ): ?>
                                  <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('auth.logout')); ?>">Log out</a></li>
								<?php else: ?>
								  <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('auth.login')); ?>">Log in</a></li>
							  	<li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('auth.register')); ?>">Register</a></li>
								<?php endif; ?>
								</li>
							
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">

							<a href="<?php echo e(route('shopproduct')); ?>" class="link-to-home"><img src="<?php echo e(asset('images/logo.PNG')); ?>" alt="mercado"></a>

						</div>
						
                                
								

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="<?php echo e(route('searchproducts')); ?>" method="POST" id="form-search-top" name="form-search-top">
									<?php echo csrf_field(); ?>
									<input type="text" name="search" value="" placeholder="Search here...">
									<button name="sad" form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true" id="heartbeat"></i>
									<div class="left-info">
										<span class="index"># item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="<?php echo e(route('cart.list')); ?>" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true" id="shake-top"></i>
									<div class="left-info">
										<span class="index"><?php echo e(Cart::getTotalQuantity()); ?> items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>
						
							
						

					</div>
				</div>

				<?php
					use App\Models\Marquee;
					$marquee = Marquee::all();
				?>
				<div class="nav-section header-sticky">
					<div class="container">
						<marquee scrollamount="4" direction="left">
							<?php $__currentLoopData = $marquee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<span style="color:#FF2832; font-size:15px;"><i>&lang; <?php echo e($marq->comment); ?> &rang;</i> <span style="color:#444444;font-weight:bolder;">MőB SHőP</span></span>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					
						</marquee>
					</div>

					
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								{<?php if( session()->get('UserType') == 0 ): ?> 
							
								
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('about_us.about')); ?>" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('shopproduct')); ?>" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('cart.list')); ?>" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('comment.create')); ?>" class="link-term mercado-item-title">Contact Us</a>
								</li>	
								<?php if( session()->get('LoggedUser') >= 1 ): ?>
								<li class="menu-item">
									<a href="<?php echo e(route('trackordersforuser')); ?>" class="link-term mercado-item-title">my orders</a>
								</li>
								<?php else: ?> 
								<span>  </span>

								<?php endif; ?>
								<span style="color:white"> <?php echo e(session()->get('LoggedUser')); ?></span>
								
								
									
								<?php else: ?> 
								  <?php if( session()->get('LoggedUser') >= 1 ): ?>
								
								  <li class="menu-item">
									<a href="<?php echo e(route('showordersforadmin')); ?>" class="link-term mercado-item-title">admindashborad</a>
								</li>	
							     <?php else: ?>
								 <li class="menu-item home-icon">
									<a href="<?php echo e(route('shopproduct')); ?>" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('about_us.about')); ?>" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('shopproduct')); ?>" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('cart.list')); ?>" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="<?php echo e(route('comment.create')); ?>" class="link-term mercado-item-title">Contact Us</a>
								</li>	
								
									<?php endif; ?>
							

								  
								 <?php endif; ?>						 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	

	<!-- here is the cpntent -->
<?php echo $__env->yieldContent('content'); ?>

				
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">address : mansoura</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">Hotline: (+123) 456 789</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">support@gmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>
							

					</div>

					<div class="row">


						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>

						

					</div>
				
			</div>
		</div>
	</footer>
	<script src="<?php echo e(asset('/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
	<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/chosen.jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/jquery.countdown.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/jquery.sticky.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/functions.js')); ?>"></script>
</body>
</html><?php /**PATH /var/www/html/greduation-project/gerduation-project/resources/views/layout/layout.blade.php ENDPATH**/ ?>