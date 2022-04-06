<?php
session_start();
include('include/config.php');
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
                    <li class="active"><a href="dashboard.php"><i class="ti-home"></i> Dashboard</a>
                        
                    </li>
                         <li><a class="sidebar-sub-toggle"><i class="ti-direction-alt"></i>  Tour Packages  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="createpackage.php">Create</a></li>
                                <li><a href="Managepackage.php">Manage</a></li>
                                <li><a href="extra/chartjs.html">Chart</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-direction"></i>  Advance Packages  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="AdvanceCreatePackage.php">Create</a></li>
                                <li><a href="AdvanceManagePackage.php">Manage</a></li>
                                <li><a href="updatepackage.php">Update</a></li>
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
                        <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>  Admin  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
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
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">

                        <!-- /# PHPDASHBOARD_USER -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><a href="user.php"><i class="ti-user color-primary border-primary"></i></a>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><a href="user.php"> User</a></div>


                                        <!-- /# PHPDASHBOARD_CONNECTION -->
                                        <?php $sql = "SELECT UserID from user";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=$query->rowCount();
					                    ?>
                                        <!-- /# PHPDASHBOARD_CONNECTION -->

                                        <div class="stat-digit"><?php echo htmlentities($cnt);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# PHPDASHBOARD_USER -->

                        <!-- /# PHPDASHBOARD_ENQUIRIY -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><a href="enquiries.php"><i class="ti-alert color-success border-success"></i></a></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><a href="enquiries.php">Enquiries</a></div>

                                        <!-- /# PHPDASHBOARD_CONNECTION -->
                                        <?php $sql = "SELECT TicketID from enquiry";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=$query->rowCount();
					                    ?>	
                                        <!-- /# PHPDASHBOARD_CONNECTION -->

                                        <div class="stat-digit"><?php echo htmlentities($cnt);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# PHPDASHBOARD_ENQUIRIY -->

                        <!-- /# PHPDASHBOARD_BOOKING -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><a href="bookings.php"><i class="ti-world color-primary border-primary"></i></a></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><a href="bookings.php">Bookings</a></div>

                                        <!-- /# PHPDASHBOARD_CONNECTION -->
                                        <?php $sql = "SELECT UserID from user";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=$query->rowCount();
					                    ?>	
                                        <!-- /# PHPDASHBOARD_CONNECTION -->

                                        <div class="stat-digit"><?php echo htmlentities($cnt);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- /# PHPDASHBOARD_BOOKING -->
                        
                         <!-- /# PHPDASHBOARD_ISSUES -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><a href="issue.php"><i class="ti-help-alt color-danger border-danger"></i></a>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><a href="issue.php">Issues Riaised</a></div>
                                        
                                        <!-- /# PHPDASHBOARD_CONNECTION -->
                                        <?php $sql = "SELECT UserID from user";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=$query->rowCount();
					                    ?>
                                        <!-- /# PHPDASHBOARD_CONNECTION -->

                                        <div class="stat-digit"><?php echo htmlentities($cnt);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# PHPDASHBOARD_ISSUES -->

                        <!-- /# PHPDASHBOARD_ACTIVEPACKAGE -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><a href="createpackage.php"><i class="ti-direction-alt color-success border-success"></i></a></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><a href="createpackage.php">Active Package</a></div>

                                        <!-- /# PHPDASHBOARD_CONNECTION -->
                                        <?php $sql = "SELECT PID from tourpackage";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=$query->rowCount();
					                    ?>
                                        <!-- /# PHPDASHBOARD_CONNECTION -->

                                        <div class="stat-digit"><?php echo htmlentities($cnt);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# PHPDASHBOARD_ACTIVEPACKAGE -->

                        <!-- /# PHPDASHBOARD_ADVANCEPACKAGE -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><a href="AdvanceCreatePackage.php"><i class="ti-direction color-primary border-primary"></i></a></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><a href="AdvanceCreatePackage.php">Advance Package</a></div>

                                        <!-- /# PHPDASHBOARD_CONNECTION -->
                                        <?php $sql = "SELECT ID from Advancepackages";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=$query->rowCount();
                                        ?>
                                        <!-- /# PHPDASHBOARD_CONNECTION -->

                                        <div class="stat-digit"><?php echo htmlentities($cnt);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# PHPDASHBOARD_ADVANCEPACKAGE -->

                        <!-- /# PHPDASHBOARD_DATABASE -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><a href="http://localhost/phpmyadmin/dashboard.php?route=/database/structure&server=1&db=tourism"><i class="ti-server color-success border-success"></i></a>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><a href="http://localhost/phpmyadmin/dashboard.php?route=/database/structure&server=1&db=tourism">Database</a></div>
                                        <div class="stat-digit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# PHPDASHBOARD_DATABASE -->

                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    
                    
                       


<!--copy rights start here-->
<?php include('include/footer.php');?>
<!--COPY rights end here-->     
                       