<!--/top-header-->
<?php if (isset($_SESSION['submit'])) : ?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="cpass.php">Change Password</a></li>
			<li class="prnt"><a href="mytourhistory.php">My Tour History</a></li>
			<li class="prnt"><a href="issueticket.php">Issue Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Welcome :</li>				
			<li class="sig"><?php echo $_SESSION['EmailID'] ?></li> 
			<li class="sigi"><a href="../Greenlife Tourism/logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>

<?php else : ?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="master/adminlogin.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="sig"><a href="../Greenlife Tourism/signup.php" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="../Greenlife Tourism/login.php" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php endif; ?>



<!--/top-header-->