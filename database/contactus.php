<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
 

  // Database connection
  $conn = new mysqli('localhost','root','','tourism');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into contact(Name, Subject, Email, number, Message) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $subject, $email, $number, $message);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
  }
?>