

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
<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?php echo base_url()?>Public/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="registration.html">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
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
