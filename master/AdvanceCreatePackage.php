<?php
session_start();

session_regenerate_id(true);
if (!isset($_SESSION['submit']) || $_SESSION['submit'] !==true){
    header("location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="dashboard.php">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>Greenlife Tourism</span></a></div>
                    <li class="label">Main</li>
                    <li><a href="dashboard.php"><i class="ti-home"></i> Dashboard</a>
                        
                    </li>
                         <li><a class="sidebar-sub-toggle"><i class="ti-direction-alt"></i>  Tour Packages  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="createpackage.php">Create</a></li>
                                <li><a href="managepackage.php">Manage</a></li>
                            </ul>
                        </li>
                        <li class="active"><a class="sidebar-sub-toggle"><i class="ti-direction"></i>  Advance Packages  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="AdvanceCreatePackage.php">Create</a></li>
                                <li><a href="AdvanceManagePackage.php">Manage</a></li>
                                <li><a href="extra/chartjs.html">Chart</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-direction-alt"></i>  Theme  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="addcategory.php">Add</a></li>
                                <li><a href="Managepackage.php">Manage</a></li>
                            </ul>
                        </li>
                        <li><a href="user.php"><i class="ti-user"></i> User</a></li>
                        <li><a href="managebookings.php"><i class="ti-world"></i> Bookings</a></li>
                        <li><a href="issue.php"><i class="ti-help-alt"></i> Issues</a></li>
                        <li><a href="enquiries.php"><i class="ti-alert"></i> Enquiries</a></li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-direction-alt"></i>  Admin  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="addadmin.php">Add</a></li>
                                <li><a href="Manageadmin.php">Manage</a></li>
                            </ul>
                        </li>
                     <li><a href="logout.php"><i class="ti-close"></i> logout</a></li>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <!--navbar start here-->
<?php include('include/navbar.php');?>
    <!--navbar end here-->


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                               <h1>Hello, <span>Welcome <?php echo $_SESSION['AdminName'] ?></span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item">Advance Packages</li>
                                    <li class="breadcrumb-item">Create</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Advance Create Package </h4>
                                    
                                </div><br>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <h6>Package Duration</h6>
                                                <input type="text" name="Duration" class="col-sm-4 form-control input-focus" placeholder="Duration" required="">
                                            </div>
                                            <div class="form-group">
                                                <h6>Package Location</h6>
                                                <input type="text" name="Location" class="col-sm-4 form-control input-focus" placeholder="Location" required="">
                                            </div>
                                            <div class="form-group">
                                                <h6>Package Price</h6>
                                                <input type="text" name="Price" class="col-sm-4 form-control input-focus" placeholder="Price" required="">
                                            </div>
                                            <div class="form-group">
                                                <h6>Package Dot</h6>
                                                <input type="text" name="Dot" class="col-sm-4 form-control input-focus" placeholder="Dot" required="">
                                            </div>
                                            <div class="form-group">
                                                <h6>Package Detail</h6>
                                                <input type="text" name="Detail" class="col-sm-4 form-control input-focus" placeholder="Detail" required="">
                                            </div>
                                            <div class="form-group">
                                                <h6>Package Image</h6>
                                                <input type="file" name="Image" placeholder="packageimage" required="">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button type="submit" name="submit" class="btn-primary btn">Create</button>
                                    
                                                    <button type="reset" class="btn-inverse btn">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
<!--copy rights start here-->
<?php include('include/footer.php');?>
<!--COPY rights end here-->                
                    
                       
<?php
    include 'database/connect.php';
    if(isset($_POST['submit'])) {
        
        $Duration = $_POST['Duration'];
        $Location = $_POST['Location'];
        $Price = $_POST['Price'];
        $Dot = $_POST['Dot'];
        $Detail = $_POST['Detail'];
        $Image = $_FILES["Image"]["name"];
        move_uploaded_file($_FILES["Image"]["tmp_name"], "Images/AdvancePackage/". $_FILES["Image"]["name"]);
       

        $insertquery = "insert into advancepackages(Duration,Location,Price,Dot,Detail,Image) values('$Duration','$Location','$Price','$Dot','$Detail','$Image')";
        $res = mysqli_query($conn,$insertquery);

        if($res){
            ?>
            <script>alert("Data Inserted")</script>
            <?php  
        }else{
            ?>
            <script>alert("Failed To Data Inserted")</script>
            <?php
        }

    }

?>                

                    