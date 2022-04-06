<?php include('database/connect.php');
session_regenerate_id(true);
if (!isset($_SESSION['submit']) || $_SESSION['submit'] !==true){
   header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Greenleaf Tourism</title>
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


<!-- Booking -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Book Your Tour</h2>
		<div class="contact-grids">
			<div class="row">
			<?php



 $PID = intval($_GET['PID']);
 $selectquery = "select * from tourpackage where PID=$PID";
 $query = mysqli_query($conn,$selectquery);
 $nums = mysqli_num_rows($query);
   
               while ($res = mysqli_fetch_array($query)){
                   ?>
				<div class="col-lg-12 col-md-6 contact-left-form">
					<div class="image-tour position-relative">
						<img src="master/Images/ActivePackage/<?php echo $res['PImage']; ?>" alt="" class="img-fluid" />
											<p><span class="fa fa-tags"></span> <span>₹<?php echo $res['PPrice']; ?></span></p>
					</div><br><br>
					<form action="bpage.php?PID=<?php echo $res['PID']; ?>" method="post" class="row">
						<div class="col-sm-8 form-group contact-forms">
							<h2><?php echo $res['PName']; ?></h2> 
						  </div>
						<div class="col-sm-12 form-group contact-forms">
							<p>#PID-<?php echo $res['PID']; ?></p> 
						  </div>
						<div class="col-sm-12 form-group contact-forms">
							<p><b>Package Type :</b> <?php echo $res['PType']; ?></p>
						</div>
						<div class="col-sm-12 form-group contact-forms">
							<p><b>Package Date:</b> <?php echo $res['FDate']; ?> <b>To</b> <?php echo $res['TDate']; ?></p>
						</div>
						<div class="col-sm-12 form-group contact-forms">
							<p><b>Package Location :</b> <?php echo $res['PLocation']; ?></p>
						</div>
						<div class="col-sm-12 form-group contact-forms">
							<p><b>Package Features:</b> <?php echo $res['PFeatures']; ?></p>
						</div>
						<?php if (isset($_POST['bpage']))
					{?>

						<div class="col-md-8 booking-button">
							<button class="btn btn-block sent-butnn" name="bpage">Book Now</button>
						</div>
						<?php  } else { ?>
						<div class="col-md-8 booking-button">
							<button class="btn btn-block sent-butnn">Book Now</button>
						</div>

							<?php  } ?>
						<div class="col-sm-8 form-group contact-forms">
							<p><b>Note* :</b> Booking Confirmation Within 24 Hours.</p>
						</div>
					</form>
					
					
				</div>
				</div>
				</div>
				<?php

}

?>
			</div>
		</div>
	</div>
</section>

<!-- //Booking -->




<!-- Footer Start Here -->
<?php include('includes/footer.php') ?>
<!-- Footer End Here -->
