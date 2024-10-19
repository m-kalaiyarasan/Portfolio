<!doctype html>
<html lang="en">
<?php 
include 'load.php';

?>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="g" type="image/png">
	<title>Kalaiyarasan M</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="css/cus.css">
	<link rel="stylesheet" href="css/cus.css">




	<!-- kalai -->
	 <!-- Favicons -->
	 <link href="assets/img/favicon.png" rel="icon">
	 <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   
	 <!-- Fonts -->
	 <link href="https://fonts.googleapis.com" rel="preconnect">
	 <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
	 <!-- Vendor CSS Files -->
	 <link href="vendors/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <link href="assets/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	 <link href="assets/vendors/aos/aos.css" rel="stylesheet">
	 <link href="assets/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
	 <link href="assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
	<!-- kalai -->

	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	
	<?php load('navbar'); ?>

	<!--================ End Header Area =================-->





	<!--================ Start Home Banner Area =================-->

	<?php load('home_baner'); ?>

	<!--================ End Home Banner Area =================-->




	<!--================ Skils =================-->
	<?php load('skills'); ?>

  <!--================ End Skils =================-->




<br><br><br>


	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>Recently done project </h2>
					</div>
				</div>
			</div>
			<!-- <div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div> -->
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/Projects/denver.jpg" alt="" height=>
								<div class="overlay"></div>
								<a href="https://www.linkedin.com/posts/kalaiyarasan-m-030048258_excited-to-share-my-latest-project-denver-activity-7208090941969100801-_Son?utm_source=share&utm_medium=member_desktop" >
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="https://www.linkedin.com/posts/kalaiyarasan-m-030048258_excited-to-share-my-latest-project-denver-activity-7208090941969100801-_Son?utm_source=share&utm_medium=member_desktop">AI Voice assitant <h6 class="mt-1">Read more</h6> </a></h4> 
								<p>Aim to control every part of your tech world</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 all latest">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/Projects/loginpage.png" alt="">
								<div class="overlay"></div>
								<a href="https://www.linkedin.com/posts/kalaiyarasan-m-030048258_security-database-php-activity-7232019645757603841-BAX5?utm_source=share&utm_medium=member_desktop">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>	
							</div>
							<div class="short_info">
								<h4><a href="https://www.linkedin.com/posts/kalaiyarasan-m-030048258_security-database-php-activity-7232019645757603841-BAX5?utm_source=share&utm_medium=member_desktop">Secure Login System<h6 class="mt-1">Read more</h6> </a></h4>
								<p>With complex Hashing technique</p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 all upcoming">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<img class="img-fluid w-100" src="img/Projects/turing.JPG" alt="">
								<div class="overlay"></div>
								<a href="img/portfolio/p9.jpg" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="https://youtu.be/nNexc5otHHc?si=K0tnYqwQibBckSC9">Smart Glass<h6 class="mt-1">Read more</h6> </a></h4>
								<p>With Bone Conduction Technology </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================ End Testimonial Area =================-->

	<!--================ Start Newsletter Area =================-->
	<?php //load('getNewsLetter'); ?>

	<!--================ End Newsletter Area =================-->

	<!--================Footer Area =================-->
	<?php load('footer'); ?>

	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	<script src="js2/main.js"></script>
</body>

</html>