<?php
session_start();?>
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
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="article.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>
 
		<!-- Register button -->
		<ul class="pro-features">
			<a class="get-pro" href="#">Register</a>
			<li class="big-title">Welcometo Pensa Legon</li>
			<li class="title">PENTECOST STUDENTS AND ASSOCIATES</li>
			
			
			<div class="button">
				<a href="register.php" target="_blank" class="btn">Join a Department</a>
				<a href="register.php" target="_blank" class="btn">Register</a>
				
				<?php if(isset($_SESSION['user'])){?>
 

 
<div  onclick=" confirm('Are you sure you wish to logout')?<?php session_destroy(); ?>logout():false" id="logout" class="btn">Logout as <?php $person= $_SESSION['user']; echo strlen($person)>20?substr($person,0,20)."..":$person; ?></div>
<?php } ?>
			</div>
		</ul>
	
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
										<li class="active"><a href="#">Home</a>
										</li>
											<li><a href="about.php">About </a></li>
											<li><a href="#">Departments </a></li>
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
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote signed">
									<a href="#" class="btn mg">Donate</a>
 								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
    <section id="section1">
        <img src="images/Rectangle 45.jpg" alt="">
        <div id="overlay">
            <div id="overlay-text">
                <h1>The Modern Church and Christ Jesus</h1>
                <p>Embracing Faith in a Changing World</p>
                <p>By Elder Jacob Atongo</p>
            </div>
        </div>
    </section>
    <section id="section2">
        <div id="top-bar">
            <div id="div1">
                <p>AUGUST 28, 2022</p>
                <p>5 MINUTES READ</p>
            </div>
            <div id="div2">
                <p>Share</p>
                <img src="images/linkedin.png" alt="">
                <img src="images/whatsapp.png" alt="">
                <img src="images/facebook.png" alt="">
                <img src="images/Subtract.png" alt="">
            </div>
        </div>
        <h3>Title: The Modern Church and Christ Jesus: Embracing Faith in a Changing World</h3>
        <div>
            <p>Introduction</p>
            <p>In the ever-evolving landscape of the 21st century, the modern church finds itself at the intersection of tradition and innovation, striving to maintain its timeless connection to Christ Jesus while adapting to the dynamic needs of contemporary society. As technology, culture, and global communication reshape the way we live, the church is faced with the challenge of remaining relevant without compromising its core message of love, redemption, and faith in Christ.</p>

            <p>Embracing Technology for Outreach:</p>
            <p>One notable aspect of the modern church is its embrace of technology as a tool for outreach and community engagement. Social media platforms, podcasts, and online streaming services have become powerful tools for sharing sermons, organizing events, and connecting with a broader audience. The church recognizes the importance of meeting people where they are, whether physically or virtually, in order to spread the teachings of Christ and foster a sense of community among believers.</p>
            
            <p>Diversity and Inclusivity:</p>
            <p>In response to the increasing diversity of societies worldwide, the modern church is making strides towards greater inclusivity. Recognizing that Christ's message is for all people, regardless of race, ethnicity, gender, or socio-economic status, many churches are actively working to create an environment where everyone feels welcome. This inclusivity extends beyond the physical church building, as congregations engage in community outreach programs, support social justice initiatives, and strive to be a positive force for change in the world.</p>
            
            <p>Balancing Tradition and Innovation:</p>
            <p>While embracing the benefits of technology and responding to the changing cultural landscape, the modern church remains grounded in its timeless traditions. The teachings of Christ Jesus, as recorded in the Bible, serve as the unchanging foundation upon which the church is built. Balancing tradition with innovation, the church seeks to convey ageless truths in ways that resonate with contemporary audiences, ensuring that the message of Christ remains accessible and impactful</p>
            
            <p>Community Involvement and Service:</p>
            <p>Christ's example of selfless service and compassion is a cornerstone of the modern church's mission. Congregations around the world are actively engaged in various forms of community service, ranging from feeding the hungry and housing the homeless to supporting education and healthcare initiatives. By embodying the principles of love and service advocated by Christ, the modern church aims to be a positive force for good in the communities it serves.</p>
            
            <p>Conclusion:</p>
            <p>The modern church, with its commitment to embracing technology, promoting inclusivity, balancing tradition with innovation, and actively engaging in community service, continues to navigate the complex challenges of the 21st century. In doing so, it remains dedicated to the timeless teachings of Christ Jesus, fostering a faith that is both relevant and enduring in an ever-changing world.</p>
        </div>
    </section>
    <p>PREVIOUS ARTICLES</p>
    <section id="section3">
        <div class="sec3-parts">
            <img src="images/Rectangle 24.jpg" alt="">
            <div class="sec3-text">
                <h2>Facebook Ads Management</h2>
                <p>Facebook Ads are a way to directly place your product before the people who need them. Facebook is the biggest social media platform and it has valuable data on the people on the platform. Imagine placing your mouse pad Ad directly in front of the person whose mouse pad just got destroyed. That’s the power of Facebook Ads.</p>
                <p>Facebook Ads, if employed properly, can lead to an increase in revenue for businesses. It’s therefore no surprise that more and more businesses are looking for Facebook Ad experts to help them with their Facebook Ads.</p>
                <p>If you are interested in learning how to use the Facebook Ad Manager, Meta offers free courses on their... <a href="#"></a> </p>
                <div>
                    <p>AUGUST 28, 2022</p>
                    <p>5 MINUTES READ</p>
                </div>
            </div>
        </div>
        <div class="sec3-parts">
            <div class="sec3-text">
                <h2>Social Media Management</h2>
                <p>Now, not having a social media presence is a no-no. The first thing that customers ask when you introduce your business to them, is if you have a profile on any social media site. They want to see the quality of your work and want to be sure that your business is legit.</p>
                <p>Businesses are beginning to understand the value of having a compelling social media presence, and there has been a surge in the demand for social media management experts.</p>
                <p>Many sites, such as LinkedIn Learning (paid), Coursera, Google Digital Centre and Facebook Blueprint, teach these skills to anyone who ...</p>
                <div>
                    <p>AUGUST 28, 2022</p>
                    <p>5 MINUTES READ</p>
                </div>
            </div>
            <img src="images/Rectangle 21.jpg" alt="">
        </div>
        <div class="sec3-parts">
            <img src="images/Rectangle 26.jpg" alt="">
            <div class="sec3-text">
                <h2>Video Production</h2>
                <p>If you find it easy or are interested in learning how to make TikToks, Youtube videos or Instagram Reels, then there is space for you on the job market.</p>
                <p>Video production is a skill in high demand because more and more businesses are looking for people to help them edit quality content that can grab their audience's attention in the midst of all the distractions they are competing with.</p>
                <p>Developing your video production and editing skills can help you earn money by making videos for business owners who either have no time or have no idea how to go about it. Today, ...</p>
                <div>
                    <p>AUGUST 28, 2022</p>
                    <p>5 MINUTES READ</p>
                </div>
            </div>
        </div>
    </section>
    <section id="section4">
        <div id="rel-art" class="sec4-parts">
            <h1>Related Articles</h1>
            <a href="#">See All Related Articles</a>
        </div>
        <div id="sec4-mid-part" class="sec4-parts">
            <img src="images/Rectangle 29.jpg" alt="">
            <div id="repositi">
                <div class="timestamp">
                    <p>AUG 5,2022</p>
                    <p>5 MIN READ</p>
                </div>
                <p id="chr">CHRISTIAN LIFESTYLE</p>
                <h2>Repositioning the church
                    for Maximum impact; the 
                    Vision of the Church.</h2>
                <p>Are you looking to make some extra money this season? Then this list of High Demand Skills that will earn you some good money</p>
                <p>Continue Reading <img src="" alt=""></p>
            </div>
        </div>
        <div id="col-con" class="sec4-parts">
            <div class="rel-art-cols">
                <img src="images/Rectangle 28.jpg" alt="">
                <div>
                    <h2>The Lord our God;
                        Drawing near to Christ today !</h2>
                        <p>Have you ever been caught in a Ponzi Scheme? This article by Paula Sabin-Quarm… <a href="">Read More <img src="" alt=""> </a> </p>
                        <div class="timestamp">
                            <p>AUG 5,2022</p>
                            <p>5 MIN READ</p>
                        </div>
                </div>
            </div>
            <div id="middle-col" class="rel-art-cols">
                <img src="images/Rectangle 28 (1).jpg" alt="">
                <div>
                    <h2>Church Media: The benefit of growing the church on media.</h2>
                        <p>Getting financial freedom is not just about what you do, but also what you don't do. In this article… <a href="">Read More <img src="" alt=""> </a> </p>
                        <div class="timestamp">
                            <p>AUG 5,2022</p>
                            <p>5 MIN READ</p>
                        </div>
                </div>
            </div>
            <div class="rel-art-cols">
                <img src="images/Rectangle 28 (2).jpg" alt="">
                <div>
                    <h2>At the place of prayer: 
                        Praying and seeking the Lord.</h2>
                        <p>Have you wondered what investments you can make in Ghana apart from Treasury Bills, Fixed… <a href="">Read More <img src="" alt=""> </a> </p>
                        <div class="timestamp">
                            <p>AUG 5,2022</p>
                            <p>5 MIN READ</p>
                        </div>
                </div>
            </div>
        </div>
    </section>

		<!-- Footer Area -->
		<footer id="footer" class="footer ">
 			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>PENSA UG stands for a dynamic fusion of unwavering faith, academic excellence, leadership development, and creative innovation</p>
 								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-youtube"></i></a></li>
								</ul>
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
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
 		 
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
 		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- devotion JS -->

        <script src="js/devotion.js"></script>
        <script src="js/logout.js" defer></script>
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