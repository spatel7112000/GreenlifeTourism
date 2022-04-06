<?php
session_start();
error_reporting(0);
include('database/connect.php');
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

<div class="privacy">
	<div class="container">
<h3>Issues</h3>
		<form name="chngpwd" method="post" onSubmit="return valid();">
		 
	<p>
	<table border="3" width="100%">
<tr align="center">
<th>TicketID</th>
<th>Issue</th>	
<th>Message</th>
<th>Posting Date</th>
<th>Admin Remark</th>
<th>Remark date</th>
</tr>

  <?php
              
              if (isset($_SESSION['submit'])){
   				
               $selectquery = "select * from tblIssue where EmailID='" . $_SESSION['EmailID'] . "'";
               $query = mysqli_query($conn,$selectquery);
               $nums = mysqli_num_rows($query);
   
               while ($res = mysqli_fetch_array($query)){
                   ?>

<tr align="center">
	<td>#TKT-<?php echo $res['TicketID']; ?></td>
	<td><?php echo $res['Issue']; ?></td>
	<td><?php echo $res['Message']; ?></td>
    <td><?php echo $res['PostingDate']; ?></td>
    <td><?php echo $res['ARemark']; ?></td>
    <td><?php echo $res['ARemarkDate']; ?></td>
</tr>


     <?php
   }
             }
   
             ?> 


</table>
</p></form></div></div>            

<!-- Footer Start Here -->
<?php include('includes/footer.php') ?>
<!-- Footer End Here -->
