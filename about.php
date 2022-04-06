<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Greenlife Tourism</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- //css files -->
	
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

	<!--- top-header -->
<?php include('includes/topheader.php'); ?>
<!--/top-header ---->

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="index.php"><span class="fa fa-map-signs"></span> Greenleaf Tourism </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="index.php">Home</a></li>
				<li class=""><a href="services.php">Services</a></li>
				<li class=""><a href="contact.php">Contact</a></li>
				<?php if (isset($_SESSION['submit'])) : ?>

				<li class=""><a href="issue.php">Issue</a></li>

				<?php else : ?>

				<li class=""><a href="enquiry.php">Enquiry</a></li>
				
				<?php endif; ?>
				<li class="active"><a href="about.php">About</a></li>
				<li class="booking"><a href="Packages.php">Packages</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-lg-5 py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left">
				<h3 class="mt-lg-3">We will take you to the Top destination in the world, <strong>Explore with us!</strong></h3>
				<p class="mt-4">Duis nisi sapien, elementum finibus fermentum eget, aliquet leo et. Mauris hendrerit vel ex.
				Quisque vitae luctus massa. Phasellus sed aliquam leo. Vestibulum ullamcorper a massa eu fringilla. Integer ultrices finibus sed nisi.
				in convallis felis dapibus sit amet.</p>
				<p class="mt-3"> Donec a arcu et sapien hendrerit accumsan. Pellentesque sit amet eros iac, elementum 
				urna ipsum accumsan, iaculis ligula. Aenean quam eget maximus in convallis felis dapibus sit amet.</p>
			</div>
			<div class="col-lg-6 about-right text-lg-right mt-lg-0 mt-5">
				<img src="images/about.jpg" alt="" class="img-fluid abt-image" />
			</div>
		</div>
		<div class="row mt-5 text-center">
			<div class="col-lg-3 col-6">
				<div class="counter">
					<span class="fa fa-smile-o"></span>
					<div class="timer count-title count-number">1000+</div>
					<p class="count-text text-uppercase">happy customers</p>
				</div>
			</div>
			<div class="col-lg-3 col-6">
				<div class="counter">
					<span class="fa fa-ship"></span>
					<div class="timer count-title count-number">1500</div>
					<p class="count-text text-uppercase">Tours & Travels </p>
				</div>
			</div>
			<div class="col-lg-3 col-6 mt-lg-0 mt-5">
				<div class="counter">
					<span class="fa fa-users"></span>
					<div class="timer count-title count-number">100</div>
					<p class="count-text text-uppercase">destinations</p>
				</div>
			</div>
			<div class="col-lg-3 col-6 mt-lg-0 mt-5">
				<div class="counter">
					<span class="fa fa-gift"></span>
					<div class="timer count-title count-number">10+<span>years</span></div>
					<p class="count-text text-uppercase">experience</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //about -->


<!-- tabs -->
<section class="choose" id="choose">
	<div class="overlay-all py-5">
		<div class="container py-lg-5 py-sm-4">
			<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Why Choose Us</h2>
			<div class="edu-exp-grids">
				<div class="tab-main">
					<input id="tab1" type="radio" name="tabs" class="w3pvt-sm" checked>
					<label for="tab1">We Offer</label>
					<input id="tab2" type="radio" class="w3pvt-sm" name="tabs">
					<label for="tab2">We provide</label>
					<section id="content1">
						<div class="row text-center">
							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
								<div class="inner-sec-grid">
									<span class="fa fa-gift"></span>
									<h4 class="mt-md-4 mt-2">Winter Tours</h4>
									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
								<div class="inner-sec-grid">
									<span class="fa fa-gift"></span>
									<h4 class="mt-md-4 mt-2">Accomodation</h4>
									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
								<div class="inner-sec-grid">
									<span class="fa fa-gift"></span>
									<h4 class="mt-md-4 mt-2">Low Prices</h4>
									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
								</div>
							</div>
						</div>
					</section>
					<section id="content2">
						<div class="row text-center">
							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
								<div class="inner-sec-grid">
									<span class="fa fa-gift"></span>
									<h4 class="mt-md-4 mt-2">Less Crowd</h4>
									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 inner-w3pvt-wrap">
								<div class="inner-sec-grid">
									<span class="fa fa-gift"></span>
									<h4 class="mt-md-4 mt-2">Exp Agents</h4>
									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
								</div>
							</div>
							<div class="col-lg-4 inner-w3pvt-wrap">
								<div class="inner-sec-grid">
									<span class="fa fa-gift"></span>
									<h4 class="mt-md-4 mt-2">Easy Trip</h4>
									<p class="mt-3">Lorem ipsum dolor sit amet, conse ctetur elit. Cras lobortis mollis arcu, vel vulputate justo.</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- tabs -->

<!-- testimonials -->
<section class="testimonials py-5" id="testi">
	<div class="container py-lg-5 py-md-3">
			<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> What Our Customers Say</h3>
		<div class="row pt-xl-4">
			<div class="col-md-4 test-grid px-lg-4">
				<div class="testi-info text-center">
					<p class="text-li">"Sed ut perspiciatis unde omnis ist natus error sit volup tatem acu antium dolor tium sed e ullam dolor amet.</p>
					<div class="test-img text-center mt-4">
						<img src="images/te1.jpg" class="img-fluid" alt="user-image">
					</div>
					<h3 class="mt-md-4 mt-3">Elisa ker</h3>
				</div>
			</div>
			<div class="col-md-4 test-grid px-lg-4 my-md-0 my-5">
				<div class="testi-info text-center">
					<p class="text-li">"Sed ut perspiciatis unde omnis ist natus error sit volup tatem acu antium dolor tium sed e ullam dolor amet.</p>
					<div class="test-img text-center mt-4">
						<img src="images/te2.jpg" class="img-fluid" alt="user-image">
					</div>
					<h3 class="mt-md-4 mt-3">Johnson</h3>
				</div>
			</div>
			<div class="col-md-4 test-grid px-lg-4">
				<div class="testi-info text-center">
					<p class="text-li">"Sed ut perspiciatis unde omnis ist natus error sit volup tatem acu antium dolor tium sed e ullam dolor amet.</p>
					<div class="test-img text-center mt-4">
						<img src="images/te3.jpg" class="img-fluid" alt="user-image">
					</div>
					<h3 class="mt-md-4 mt-3">Elizabeth</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- Footer Start Here -->
<?php include('includes/footer.php') ?>
<!-- Footer End Here -->
	
</body>
</html>