<?php
  session_start();
  require 'dbConnect.php';
  // print_r($_SESSION['list']);

  echo ' /  '.$fName = $_SESSION['list']['fName'];
  echo ' /  '.$lName = $_SESSION['list']['lName'];
  echo ' /  '.$SID = $_SESSION['list']['SID'];
  echo ' /  '.$email = $_SESSION['list']['email'];
  echo ' /  '.$slot = $_SESSION['list']['slotNo'];
  echo ' /  '.$prevSlot = $_SESSION['list']['prevSlot'];

  $sql = "DELETE FROM slotreg WHERE SID=$SID";
  if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE seatcount SET seatCount = seatCount+1 WHERE id = $prevSlot";
    if ($conn->query($sql) === TRUE) {
      echo "prev reg removed";
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
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


session_destroy();
header('location:../success.php')


 ?>
