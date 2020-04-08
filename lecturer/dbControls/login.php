<?php
  session_start();
  require "dbConnect.php";
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT password FROM lecturers WHERE email= '$email'";
  $Result = $conn->query($sql);
  // $Result = mysqli_query($conn,$sql);
  $result = $Result->fetch_assoc();
  // print_r($result);
  if($result['password']===$password)
  {
    $_SESSION['loged']=$email;
    header('location:../');
  }
  ?>
