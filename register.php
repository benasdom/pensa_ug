<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Pensa Legon</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
<!-- Header Area -->
<header class="header" >
	<!-- Topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-5 col-12">
					<!-- Contact -->
					
					<!-- End Contact -->
				</div>
				<div class="col-lg-6 col-md-7 col-12">
					<!-- Top Contact -->
					<ul class="top-contact">
						<li><i class="fa fa-phone"></i>+880 1234 56789</li>
						<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">info@pensaug.com</a></li>
					</ul>
					<!-- End Top Contact -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Topbar -->
	<!-- Header Inner -->
	<div class="header-inner">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Start Logo -->
						<div class="logo">
							<a href="index.php"><img src="img/logo.png" alt="#"></a>
						</div>
						<!-- End Logo -->
						<!-- Mobile Nav -->
						<div class="mobile-nav"></div>
						<!-- End Mobile Nav -->
					</div>
					<div class="col-lg-7 col-md-9 col-12">
						<!-- Main Menu -->
						<div class="main-menu">
							<nav class="navigation">
								<ul class="nav menu">
									<li><a href="index.php">Home</a>
								</li>
									<li><a href="about.php">About </a></li>
									<li><a href="#">Deparment </a></li>
									<li><a href="#">Wings <i class="icofont-rounded-down"></i></a>
										<ul class="dropdown">
											<li><a href="#">Men's Wing</a></li>
											<li><a href="#">Ladies Wing</a></li>
											<li><a href="#">Business</a></li>
										</ul>
									</li>
									<li class=""><a href="event.php">Events</a></li>

									<li><a href="contact.php">Contact Us</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
					<div class="col-lg-2 col-12">
						<div class="get-quote">
							<a href="#" class="btn">Donate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
</header>
<!-- End Header Area -->

<section class="register">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12">
				<form class="form" method="POST" action="db.php">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input required name="username" type="text" placeholder="Name">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input required name="hall" type="text" placeholder="Hall of Residence">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input required name="email" type="email" placeholder="Email">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input required name="phone" type="text" placeholder="Phone">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
							<select name="level" required class="form-group">
        <option class="option">Level 100</option>
        <option class="option">Level 200</option>
        <option class="option">Level 300</option>
        <option class="option">Level 400</option>
        <option class="option">Level 500</option>
     </select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
							<select name="gender" required class="form-group">
        <option class="option">Male</option>
        <option class="option">Female</option>
 
     </select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<input type="text" required name="date" placeholder="Date" id="datepicker">
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<textarea required name="message" placeholder="Write Your Message Here....."></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-md-4 col-12">
							<div class="form-group">
								<div class="button">
									<button type="submit" required name="register" class="btn">Join Us</button>
									
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-8 col-12">
							<p>( We will be confirm by an Text Message )</p>
						</div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</section>
<!-- End register -->
<!-- Footer Area -->
<footer id="footer" class="footer ">
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<h2>About Us</h2>
						<p>PENSA UG stands for a dynamic fusion of unwavering faith, academic excellence, leadership development, and creative innovation/p>
						<!-- Social -->
						<ul class="social">
							<li><a href="#"><i class="icofont-facebook"></i></a></li>
							<li><a href="#"><i class="icofont-twitter"></i></a></li>
							<li><a href="#"><i class="icofont-youtube"></i></a></li>
						</ul>
						<!-- End Social -->
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer f-link">
						<h2>Quick Links</h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Department</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Wings</a></li>
									
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Shops</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Events</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>NADWID</a></li>
									<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<h2>Newsletter</h2>
						<p>subscribe to our newsletter to get allour news in your inbox..</p>
						<form action="newslist.php" method="POST" target="_blank" class="newsletter-inner">
							<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Your email address'" required="" type="email">
							<button name="submit" class="button"><i class="icofont icofont-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Footer Top -->
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<div class="copyright-content">
						<p>© Copyright 2023  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">PENSA MEDIA DEPARTMENT</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- jquery Min JS -->
<script src="js/jquery.min.js"></script>
<!-- jquery Migrate JS -->
<script src="js/jquery-migrate-3.0.0.js"></script>
<!-- jquery Ui JS -->
<script src="js/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="js/easing.js"></script>
<!-- Color JS -->
<script src="js/colors.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="js/bootstrap-datepicker.js"></script>
<!-- Jquery Nav JS -->
<script src="js/jquery.nav.js"></script>
<!-- Slicknav JS -->
<script src="js/slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="js/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="js/owl-carousel.js"></script>
<!-- counterup JS -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="js/steller.js"></script>
<!-- Wow JS -->
<script src="js/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>