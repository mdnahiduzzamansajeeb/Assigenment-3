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
<body>


<?php session_start();

  // print_r($_SESSION);
  // $selectedSlot = $_SESSION['oslot'];
  // echo 'sdasdsa'.$selectedSlot;
?>

<section class="testimonial" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <h1>COMP207 - Register here for a practical slot</h1>
                        <h3>Register only if you know what you are doing.</h3>
                        <ul class="text-justify">
                            <li>Please enter <b>all</b> information and select your desired day. Please enter a correct 'SID' number!</li>
                            <li>Please check the number of available seats before submitting.</li>
                            <li>Register only to on slot.</li>
                            <li>Any problems? Write a message to <a href="" style=" text-decoration: none;  color: #9E2929;">weberb@cse.liv.ac.uk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form action="dbControls/addStudents.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="fName" name="fName" placeholder="First Name" class="form-control" type="text" value="<?php echo (isset($_SESSION['ofName']) ? $_SESSION['ofName'] : '' ) ?>"  required>
                            <?php
                            if(isset($_SESSION['fName']))
                              alerts();
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <input id="lName" name="lName" placeholder="Last Name" class="form-control" type="text" value="<?php echo (isset($_SESSION['olName']) ? $_SESSION['olName'] : '' ) ?>"  required>
                            <?php
                              if(isset($_SESSION['lName']))
                                alerts();
                             ?>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo (isset($_SESSION['oemail']) ? $_SESSION['oemail'] : '' ) ?>" required>
                            <?php
                              if(isset($_SESSION['email']))
                                alerts();
                             ?>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" name="SID" class="form-control" id="inputSID" placeholder="SID" value="<?php echo (isset($_SESSION['oSID']) ? $_SESSION['oSID'] : '' ) ?>" required>
                            <?php
                              if(isset($_SESSION['SID']))
                                alerts();
                             ?>
                            <?php
                              if(isset($_SESSION['invalidSID']))
                              {?>
                              <p style="color:red">
                                Please provide valid SID
                              </p>
                            <?php } ?>
                        </div>
                    </div>

                      <?php
                      require "dbControls/seatCount.php";
                      ?>

                    <div class="form-row">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
  document.getElementById("inputState").value=<?php echo (isset($_SESSION['oslot']) ? $_SESSION['oslot'] : 0); ?>;
</script>

<?php
  function alerts()
  {?>
  <p style="color:red">
    Please fill this field
  </p>
<?php }
  session_destroy(); ?>

</body>
</html>
