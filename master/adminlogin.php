
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
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php

    include 'database/connect.php';
    
    if (isset($_POST['submit'])) {
        $AdminName = $_POST['AdminName'];
        $password = $_POST['Password'];

        $email_search = "select * from admin where AdminName='$AdminName' ";
        $query = mysqli_query($conn,$email_search);

        $email_count = mysqli_num_rows($query);
        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['Password'];
            $pass_decode = password_verify($password, $db_pass);
            if ($pass_decode) {
                $_SESSION['AdminName'] = $AdminName;
                $_SESSION['Password'] = $password;
                $_SESSION['submit'] = true;
                header('location:dashboard.php');
            } else {
                ?>  <script>alert("Incorrect Password");</script>
            <?php
            }
            } else {
                ?>  <script>alert("Incorrect AdminName");</script>
            <?php
            }

        }
    

    ?>


 <section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Log In to Admin Panel</h2>

              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                <div class="form-outline mb-4">
                  <input type="text" name="AdminName" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your AdminID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="Password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Here You Go</button>
                </div>
<div class="back">
          <a href="../index.php"><br>Back to home</a>
        </div>

              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                    
                    
                       

</body></html>