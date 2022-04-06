<?php
  $FullName = $_POST['FullName'];
  $email = $_POST['email'];
  $MobileNo = $_POST['MobileNo'];
  $password = $_POST['password'];
 
  
 

  // Database connection
  $conn = new mysqli('localhost','root','','tourism');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into user(FullName, Password, EmailID, MobileNo) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $FullName, $password, $email, $MobileNo);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
  }
?>