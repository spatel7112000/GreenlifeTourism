<?php include('database/connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Greenlife Tourism</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

   
	
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
				<h1 class="mt-md-0 mt-2"> <a href="index.php"><span class="fa fa-map-signs"></span>Greenlife Tourism</a></h1>
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


<!-- tour packages -->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center"> Discover our tour packages</h2>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row">
			<?php
              
               
		 $selectquery = "select * from Advancepackages order by rand()";
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

			 <?php
   
             }
   
             ?> 
			
		</div>
	</div>
</section>
<!-- tour packages -->

<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-xl-5 py-lg-3">
		<h3 class="heading text-capitalize text-center"> Popular Destinations</h3>
		<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>
		<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
			 <?php
              
          
   
               $selectquery = "select * from tourpackage order by rand()";
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
