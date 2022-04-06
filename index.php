
<?php

include('database/connect.php');
session_regenerate_id(true);
if (!isset($_SESSION['submit']) || $_SESSION['submit'] !==true){
  //  header("location: login.php");
}
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
				<h1 class="mt-md-0 mt-2"> <a href="master/adminlogin.php"><span class="fa fa-map-signs"></span> Greenlife Tourism </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.php">Home</a></li>
				<li class=""><a href="services.php">Services</a></li>
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
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			<li>
				<div class="banner-top">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Never let your memories be greater than your dreams.</h3>
								<h4 class="text-wh">EXPLORE • JOURNEY • DISCOVER • ADVENTURE</h4>
								<div class="buttons mt-4">
									<a href="packages.php" class="btn mr-2">Book A Tour</a>
									<a href="about.php" class="btn">About Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top1">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">It is better to travel than to arrive. Let's Be Adventurers.</h3>
								<h4 class="text-wh">WORK • TRAVEL • SAVE • REPEAT </h4>
								<div class="buttons mt-4">
									<a href="packages.php" class="btn mr-2">Book A Tour</a>
									<a href="about.php" class="btn">About Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top2">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">Let's find some beatiful place to get lost</h3>
								<h4 class="text-wh">GO • FLY • ROAM • TRAVEL</h4>
								<div class="buttons mt-4">
									<a href="packages.php" class="btn mr-2">Book A Tour</a>
									<a href="about.php" class="btn">About Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="banner-top3">
					<div class="overlay1">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">It is better to travel than to arrive. Let's Be Adventurers.</h3>
								<h4 class="text-wh">tristique senectus et netus et malesuada</h4>
								<div class="buttons mt-4">
									<a href="packages.php" class="btn mr-2">Book A Tour</a>
									<a href="about.php" class="btn">About Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5">
	<div class="container py-lg-5 py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left">
				<h3 class="mt-lg-3">We will take you to the Top destination in the world, <strong>Explore with us!</strong></h3>
				<p class="mt-4">While the high Alpine area is covered in snow, lower altitudes may not experience snow until mid-January. In the most southern parts of Switzerland (Ticino), on the central plateau (around Lucerne), the Mittelland (Solothurn) and the greater Geneva and Basel areas you might only experience snow on a few occasions during winter.</p>
				<p class="mt-3"> Usually there's low fog on the plain topping out at about 1000m (3280 ft) above sea level. Sometimes breaking up by lunchtime and sometimes not. </p>
			</div>
			<div class="col-lg-6 about-right text-lg-right mt-lg-0 mt-5">
				<img src="images/switzerland.jpg" alt="" class="img-fluid abt-image" />
			</div>
		</div>
		
		</div>
	</div>
</section>
<!-- //about -->

<!-- how to book -->
<section class="book py-5">
	<div class="container py-lg-5 py-sm-3">
		<h2 class="heading text-capitalize text-center"> How To Plan Your Trip</h2>
		<div class="row mt-5 text-center">
			<div class="col-lg-4 col-sm-6">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-map-signs"></span>
					</div>
					<h4>Pick Destination</h4>
					<p class="mt-3">All you need is the plan, the road map, and the courage to press on to your destination.Earl Nightingale....</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-5">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-calendar"></span>
					</div>
					<h4>Select Date</h4>
					<p class="mt-3">Why, I'd like nothing better than to achieve some BOLD ADVENTURE Worthy of our trip. </p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-lg-0 mt-5">
				<div class="grid-info">
					<div class="icon">
						<span class="fa fa-gift"></span>
					</div>
					<h4>Enjoy the Trip</h4>
					<p class="mt-3">"A mind that is stretched by a new experience can never go back to its old dimensions."</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //how to book -->

<!-- tour packages -->
<section class="packages py-5">
	<div class="container py-lg-4 py-sm-3">
		<h3 class="heading text-capitalize text-center"> Discover our New tour packages Soon </h3>
		<p class="text mt-2 mb-5 text-center">He package tour end of the travel industry is now more successful than it has ever been. The initiative of restricting foreign expenditure has created a huge public for the package tour and long may that interest continue.</p>
		<div class="row">

		<?php
              
               
		 $selectquery = "select * from Advancepackages order by rand() LIMIT 8";
               $query = mysqli_query($conn,$selectquery);
               $nums = mysqli_num_rows($query);
   
               while ($res = mysqli_fetch_array($query)){
                   ?>
			
			<div class="col-lg-3 col-sm-6">
				<div class="image-tour position-relative">
					<img src="master/Images/AdvancePackage/<?php echo $res['Image']; ?>" alt="" class="img-fluid" />
					<p><span class="fa fa-tags"></span> <span>₹<?php echo $res['Price']; ?></span></p>
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span class="fa fa-map-marker mr-2"></span><?php echo $res['Location']; ?></h6>
					<h5 class="my-2"><?php echo $res['Dot']; ?></h5>
					<p class=""><?php echo $res['Detail']; ?></p>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span><?php echo $res['Duration']; ?> Days</span></li>
					</ul>
				</div>
			</div>

			 <?php } ?> 

			
			
			
		</div>
		<div class="view-package text-center mt-4">
			<a href="packages.php">View All Packages</a>
		</div>
	</div>
</section>
<!-- tour packages -->

<!-- text -->
<section class="text-content">
	<div class="overlay-inner py-5">
		<div class="container py-md-3">
			<div class="test-info">
				<h4 class="tittle">Enjoy The Trip</h4>
				<p class="mt-3">It's about the journey. The world is waiting. Life is an adventure. Feed your wanderlust. Fuel your soul with travel.</p>
				<div class="text-left mt-4">
						<a href="#">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //text -->
	

<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Holiday Themes </h3>
		<p class="text mt-2 mb-5 text-center">You don’t have to know your crocus from your cranesbill to enjoy walking amid carpets of flowers, and nor do you have to be able to recognise an eagle or an egret from fifty paces to derive pleasure from watching a variety of birds flitting about as you explore. If you are looking for an extra dimension to your holiday, read on for inspiration…</p>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">Wildlife</h4>
				<div class="image-position position-relative">
					<img src="images/winter/Wildlife.jpg" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Top </h4>
						<a href="packagedetail.php">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3">Family</h4>
				<div class="image-position position-relative">
					<img src="images/winter/Family.jpg" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Top  </h4>
						<a href="packagedetail.php">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Honeymoon</h4>
				<div class="image-position position-relative">
					<img src="images/winter/Honeymoon.jpg" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Top</h4>
						<a href="packagedetail.php">Book Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mt-md-0 mt-4">
				<h4 class="destination mb-3">Beach</h4>
				<div class="image-position position-relative">
					<img src="images/winter/Beach.jpg" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Top</h4>
						<a href="packagedetail.php">Book Now</a>
					</div>
				</div>
			</div>
		</div>
		
		</div>
	</div>
</section>
<!-- destinations -->




<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Top 4 Countries in the World You Should Visit</h3>
		<p class="text mt-2 mb-5 text-center">Are you planning your next vacation? Will it be a place that you have already visited (and loved) or a completely new destination? Here are our picks of the top eight countries in the world you should visit.</p>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">

		<?php
              
          
   
               $selectquery = "select * from tourpackage LIMIT 4";

               $query = mysqli_query($conn,$selectquery);
               $nums = mysqli_num_rows($query);
   
               while ($res = mysqli_fetch_array($query)){
                   ?>

			
		
			<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center">
				<h4 class="destination mb-3"><?php echo $res['PName']; ?></h4>
				<div class="image-position position-relative">
					<img src="master/Images/Thumbnail/<?php echo $res['Thumbnail']; ?>" class="img-fluid" alt="">
					<div class="rating">
						<ul>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
							<li><span class="fa fa-star"></span></li>
						</ul>
					</div>
				</div>
				<div class="destinations-info">
					<div class="caption mb-lg-3">
						<h4>Top <?php echo $res['PID']; ?> </h4>
						<a href="packagedetail.php?PID=<?php echo $res['PID']; ?>">Book Now</a>
					</div>
				</div>
			</div>

		<?php
   
             }
   
             ?>

			
		</div>
	
				
		
		
	</div>
</section>
<!-- destinations -->

<!-- Footer Start Here -->
<?php include('includes/footer.php') ?>
<!-- Footer End Here -->
