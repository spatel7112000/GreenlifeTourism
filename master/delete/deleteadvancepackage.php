
<?php
    include '../database/connect.php';
    $ID = intval($_GET['ID']);
    $deletequery = "delete from advancepackages where ID=$ID";
    $query = mysqli_query($conn,$deletequery);

    header('location:../advancemanagepackage.php');



?>