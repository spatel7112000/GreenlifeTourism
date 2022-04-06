
<?php
    include '../database/connect.php';
    $AdminID = intval($_GET['AdminID']);
    $deletequery = "delete from admin where AdminID=$AdminID";
    $query = mysqli_query($conn,$deletequery);

    header('location:../manageadmin.php');



?>