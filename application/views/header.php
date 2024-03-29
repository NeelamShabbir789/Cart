<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title> Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>Public/css/main.css">
</head>

<body>
	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="<?php echo site_url('welcome/index/');?>">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/category/');?>">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/single_product/');?>">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/checkout/');?>">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/cart/');?>">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/confirmation/');?>">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/blog/');?>">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/single_blog/');?>">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/login/');?>">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/tracking/');?>">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/element/');?>">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('welcome/contact/');?>">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
	<script src="<?php echo base_url(); ?> Public/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.<?php echo base_url(); ?> Public/js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?> Public/js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/jquery.sticky.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/nouislider.min.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/countdown.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo base_url(); ?> Public/js/gmaps.min.js"></script>
	<script src="<?php echo base_url(); ?> Public/js/main.js"></script>
</body>

</html>