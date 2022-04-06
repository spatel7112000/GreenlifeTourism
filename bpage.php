<?php include('database/connect.php');
session_regenerate_id(true);
if (!isset($_SESSION['submit']) || $_SESSION['submit'] !==true){
   header("location: login.php");
}
?>
<!--- top-header -->
<?php include('includes/topheader.php'); ?>
<!--/top-header ---->

<!-- header Start Here -->
<?php include('includes/header.php') ?>
<!-- header End Here -->



<?php
   
    if(isset($_POST['book'])) {
        
        $PID = mysqli_real_escape_string($conn, $_POST['PID']);
        $PName = mysqli_real_escape_string($conn, $_POST['PName']);
        $FDate = mysqli_real_escape_string($conn, $_POST['FDate']);
        $TDate = mysqli_real_escape_string($conn, $_POST['TDate']);
        $MobileNo = mysqli_real_escape_string($conn, $_POST['MobileNo']);
        $EmailID = mysqli_real_escape_string($conn, $_POST['EmailID']);
        $Message = mysqli_real_escape_string($conn, $_POST['Message']);

        $insertquery = "insert into booking(PID,PName,FDate,TDate,MobileNo,EmailID,Message) values('$PID','$PName','$FDate','$TDate','$MobileNo','$EmailID','$Message')";
        $res = mysqli_query($conn,$insertquery);

        if($res){
            ?>
            <script>alert("Data Inserted")</script>
            <?php  header("location: index.php");
        }else{
            ?>
            <script>alert("Failed To Data Inserted")</script>
            <?php
        }

    }

?>
<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-3">
			<h2 class="heading text-capitalize text-Left mb-sm-5 mb-4"> Booking Info</h2>

			
			<div class="contact-grids mt-5">
				<div class="row">
					<div class="col-lg-6 col-md-6 contact-left-form">
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
							<div class="form-group contact-forms">
							  <input type="text"  class="form-control" placeholder="PID" name="PID" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="text" class="form-control" placeholder="PName" name="PName" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="date" class="form-control" placeholder="date" name="FDate" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="date" class="form-control" placeholder="date" name="TDate" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="text" class="form-control" placeholder="MobileNo" name="MobileNo" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="email" class="form-control" placeholder="Email" name="EmailID" required="">
							</div>
							<div class="form-group contact-forms">
							  <input type="Message" class="form-control" placeholder="Message" name="Message" required=""> 
							</div>
							<button class="btn btn-block sent-butnn" name="book">Good to GO</button>
						</form>
					</div>
					<div class="col-lg-6 col-md-6 contact-right pl-lg-5">
						 <img src="images/c3.jpg" class="img-fluid" alt="user-image">
						
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

