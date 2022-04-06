<?php include('database/connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Greenlife Tourism</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
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
				<h1 class="mt-md-0 mt-2"> <a href="index.php"><span class="fa fa-map-signs"></span> Greenlife Tourism </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="index.php">Home</a></li>
				<li class="active"><a href="services.php">Services</a></li>
				<li class=""><a href="contact.php">Contact</a></li>
				<?php if (isset($_SESSION['submit'])) : ?>

				<li class=""><a href="issue.php">Issue</a></li>

				<?php else : ?>

				<li class=""><a href="enquiry.php">Enquiry</a></li>
				
				<?php endif; ?>
				<li class=""><a href="about.php">About</a></li>
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

<!-- services -->
<section class="services pt-5">
	<div class="container py-lg-5 py-sm-3">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Our Services</h2>
		<div class="row">
			<div class="col-lg-3 main-title-text">
				<h4 class="my-lg-4 mb-4">The journey of a thousand miles begins with a single step.</h4>
				<img src="images/p1.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-9 mt-lg-0 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center mb-5">
						<div class="ser-fashion-grid">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-building" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
							  <h4 class="pb-3">Accomodation</h4>
							  <p>Duis nisi sapien, elementum et finibus et fermen eget, aliquet etleo. Mauris vel ex.</p>
							</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center mb-5">
						<div class="ser-fashion-grid">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-free-code-camp" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">Winter Tours</h4>
							  <p>Duis nisi sapien, elementum et finibus et fermen eget, aliquet etleo. Mauris vel ex.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center mb-5">
						<div class="ser-fashion-grid">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-users" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">Exp Agents</h4>
							  <p>Duis nisi sapien, elementum et finibus et fermen eget, aliquet etleo. Mauris vel ex.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center mb-5">
						<div class="ser-fashion-grid">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-money" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">Low Prices</h4>
							  <p>Duis nisi sapien, elementum et finibus et fermen eget, aliquet etleo. Mauris vel ex.</p>
							</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center mb-5">
						<div class="ser-fashion-grid">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-binoculars" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">Easy Booking</h4>
							  <p>Duis nisi sapien, elementum et finibus et fermen eget, aliquet etleo. Mauris vel ex.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center mb-5">
						<div class="ser-fashion-grid">
							<div class="about-icon mb-md-4 mb-3">
								<span class="fa fa-camera" aria-hidden="true"></span>
							</div>
							<div class="ser-sevice-grid">
								<h4 class="pb-3">Best Packages</h4>
							  <p>Duis nisi sapien, elementum et finibus et fermen eget, aliquet etleo. Mauris vel ex.</p>
							</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->


<!-- Footer Start Here -->
<?php include('includes/footer.php') ?>
<!-- Footer End Here -->
