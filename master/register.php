
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
   
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
  
    <link href="assets/css/formstyle.css" rel="stylesheet">
</head>

<body>

<?php 

include 'database/connect.php' ;

if(isset($_POST['submit'])){
    $FullName = mysqli_real_escape_string($conn, $_POST['FullName']) ;
    $MobileNo = mysqli_real_escape_string($conn, $_POST['MobileNo']) ;
    $EmailID = mysqli_real_escape_string($conn, $_POST['EmailID']) ;
    $password = mysqli_real_escape_string($conn, $_POST['password']) ;
    $Cpassword = mysqli_real_escape_string($conn, $_POST['Cpassword']) ;

    $pass = password_hash($password, PASSWORD_BCRYPT);
        $Cpass = password_hash($Cpassword, PASSWORD_BCRYPT);

        $emailquery = "select * from user where EmailID='$EmailID' ";
        $query = mysqli_query($conn,$emailquery);

        $emailcount = mysqli_num_rows($query);
        if($emailcount>0){
          echo "email already exists";
        } else {
          if ($password === $Cpassword) {
              $insertquery = "insert into user(FullName, MobileNo, EmailID, password, Cpassword) values('$FullName','$MobileNo','$EmailID','$pass','$Cpass')" ;
              $iquery = mysqli_query($conn, $insertquery) ;

              if ($iquery) {
                ?>
                <script>alert("connection successful");</script>
                
                <?php 
              }else{
                  ?>
                <script>alert("connection unsuccessful");</script>
                <?php
              }
          }else{
            echo "password not matched";
          }
        }



}

?>

 <section class="vh-100 bg-image" style="background-image: url('https://images.pexels.com/photos/853199/pexels-photo-853199.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                <div class="form-outline mb-4">
                  <input type="text" name="FullName" id="form3Example1cg" class="form-control form-control-lg" placeholder="Full Name" />
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="MobileNo" id="form3Example1cg" class="form-control form-control-lg" placeholder="MobileNo" />
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="EmailID" id="form3Example3cg" class="form-control form-control-lg" placeholder="EmailID" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Password" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="Cpassword" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Repeat your password" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                    
                    
                       



                
          
   
</body>

</html>