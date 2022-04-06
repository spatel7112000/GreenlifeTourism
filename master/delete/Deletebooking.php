
<?php
    include '../database/connect.php';
    $BID = intval($_GET['BID']);
    $deletequery = "delete from booking where BID=$BID";
    $query = mysqli_query($conn,$deletequery);

    header('location:../managebookings.php');



?>