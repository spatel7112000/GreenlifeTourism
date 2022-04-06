
<!DOCTYPE html>
<html lang="en">
<head>
<title>Greenlife Tourism</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	-->
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


<?php
    include 'database/connect.php';
    if(isset($_POST['issue'])) {
        
        $EmailID = mysqli_real_escape_string($conn, $_POST['EmailID']);
        $Issue = mysqli_real_escape_string($conn, $_POST['Issue']);
        $Issue = mysqli_real_escape_string($conn, $_POST['Issue']);
        $Message = mysqli_real_escape_string($conn, $_POST['Message']);

        $insertquery = "insert into tblissue(EmailID,Issue,Message) values('$EmailID','$Issue','$Message')";
        $res = mysqli_query($conn,$insertquery);

        if($res){
            ?>
            <script>alert("Send a Enquiry")</script>
            <?php  
        }else{
            ?>
            <script>alert("Failed To Send a Enquiry")</script>
            <?php
        }

    }

?>

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
				<li class=""><a href="services.php">Services</a></li>
				<li class=""><a href="contact.php">Contact</a></li>
				<?php if (isset($_SESSION['submit'])) : ?>

				<li class="active"><a href="issue.php">Issue</a></li>

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

</body>
</html>

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-3">
			<h2 class="heading text-capitalize text-Left mb-sm-5 mb-4"> Issue Form</h2>

			
			<div class="contact-grids mt-5">
				<div class="row">
					<div class="col-lg-6 col-md-6 contact-left-form">
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
							
							<div class="form-group contact-forms">
							  <input type="email" id="EmailID" class="form-control" placeholder="Email" name="EmailID" required="">
							</div>
							<div class="form-group contact-forms">
							  <select name="Issue">
 								   <option>Select Issue</option>  
 								   <option>Booking Issue</option> 
 								   <option>Cancellation</option> 
 								   <option>Refund </option>  
  								   <option>Other</option>
								</select>  
							</div>
							
							<div class="form-group contact-forms">
							<textarea type="text" id="Message" class="form-control" placeholder="Describe" name="Message" required=""></textarea>
							</div>
							<button class="btn btn-block sent-butnn" name="issue">Submit</button>
						</form>
					</div>
					<!--
					<div class="col-lg-6 col-md-6 contact-right pl-lg-5">
						<h4>Do you have any questions about us? write to us.</h4>
						<p class="mt-md-4 mt-2">Duis nisi sapien, elementum finibus fermentum eget, aliquet et leo. Mauris hendrerit vel ex.
						Quisque vitae luctus massa. Phas ellus sed aliquam leo. Vestibulum ullamcorper massa eut sed fringilla. Integer ultrices finibus sed nisi.
						in convallis felis da bus sit amet  aliquet et leo dolor sit amet aliquet.</p>
						<h5 class="mt-lg-5 mt-3">Office Hours</h5>
						<p class="mt-3">Monday to Friday : 09 am to 06 pm</p>
						<p>Saturday and Sunay : 10 am to 04 pm</p>
					</div>
					-->
				</div>
			</div>
	</div>
</section>
<!-- //Contact -->

<!-- Footer Start Here -->
<?php include('includes/footer.php') ?>
<!-- Footer End Here -->