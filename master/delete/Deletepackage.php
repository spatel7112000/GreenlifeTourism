
<?php
    include '../database/connect.php';
    $PID = intval($_GET['PID']);
    $deletequery = "delete from tourpackage where PID=$PID";
    $query = mysqli_query($conn,$deletequery);

    header('location:../managepackage.php');



?>