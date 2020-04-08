<?php
    require 'lecturerTest.php';
    require 'dbControls/dbConnect.php';
    // print_r($_SESSION['loged']);
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" href="images/calendar.png" type="image/x-icon">
     <title>Assignment 3</title>
 </head>
 <body class="bg-light">
   <div class="container py-5">
     <div class="row">
       <div class="col-10">

       </div>
       <div class="col-2">
         <a class="btn btn-danger" href="logout.php">
           Logout
         </a>
       </div>
     </div>

      <div class="card ">
        <div class="card-header bg-success text-center">Student List</div>
        <div class="card-body">

            <div class="bg-light p-2">
                Select a Slot to See The List
            </div>
          <?php require 'dbControls/slots.php' ?>
          <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8 mainList">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">SID</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>


                </tbody>
              </table>
            </div>
          </div>


        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){

      $('#slotTime').change(function(){
        // alert($('#slotTime').val())
        $('.mainList').load('studentList.php',{
          slotNo : $('#slotTime').val()
        });
      });

    });
    </script>
 </body>
</html>
