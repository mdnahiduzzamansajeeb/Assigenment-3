<?php
    session_start();
    require "dbConnect.php";
    require "validation.php";

$sql = "SELECT slotNo FROM slotreg WHERE SID = $SID";
$result = mysqli_query($conn,$sql);
$result = $result->fetch_assoc();
// print_r($result);
$list =[
  'fName' => $fName,
  'lName' => $lName,
  'SID' => $SID,
  'email' => $email,
  'slotNo' => $slot,
  'prevSlot' => $result['slotNo'],
];

if ($result) {
  $_SESSION['list']=$list;
  header("location:prompt.php?list='$list'");
  exit;
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO slotreg ( fName, lName, SID, email, slotNo) VALUES ('$fName','$lName','$SID','$email','$slot')";
if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE seatcount SET seatCount = seatCount-1 WHERE id = $slot";
    if ($conn->query($sql) === TRUE) {
      echo "admission success";
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
session_destroy();
header('location:../success.php');
