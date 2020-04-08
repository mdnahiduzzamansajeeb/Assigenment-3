<?php
  session_start();
  // print_r($_SESSION['list']);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" href="images/calendar.png" type="image/x-icon">
     <title>Assignment 3</title>
 </head>
 <body class="bg-dark">
   <div class="container py-5 text-center">
      <div class="card ">
        <div class="card-header ">You are already registered in a class.Regestering to a new class will remove your previous regestration.Do you wish to continue?</div>
        <div class="card-body">
          <a class="btn btn-danger mx-5 text-white" href="secondReg.php">
            YES
          </a>
          <a class="btn btn-success mx-5 text-white" href="../">
            NO
          </a>
        </div>
      </div>
    </div>
 </body>
</html>
