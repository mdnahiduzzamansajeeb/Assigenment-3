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
<body class="bg-light">
  <div class="container py-5 text-center">
     <div class="row">
       <div class="col-2">

       </div>
       <div class="col-8">
         <div class="card ">
           <div class="card-header bg-success">Login</div>
           <div class="card-body">
<!-- form start -->
             <form action="dbControls/login.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address(user1@gmail.com)</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password(1234)</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
           </div>
         </div>
       </div>
     </div>
   </div>
</body>
</html>
