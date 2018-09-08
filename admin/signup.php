<?php  session_start(); ?>
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signup </title>
    <!-- Bootstrap core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public/css/signin.css" rel="stylesheet">
    <!-- Sign up Fields -->
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="includes/signup-inic.php">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <div class="form-group">
      <label for="inputUsername" class="sr-only">User Name</label>
      <input type="text" name="inputUsername" id="inputUsername" class="form-control" placeholder="User Name" required autofocus>
      <label for="inputSurname" class="sr-only">User Surname</label>
      <input type="text" name="inputSurname" id="inputSurname" class="form-control" placeholder="User surname" required>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email" required >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword"id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPhone" class="sr-only">Phone</label>
      <input type="text" name="inputPhone"id="inputPhone" class="form-control" placeholder="Phone Number +34 123456 " required>
      <label for="inputSecondphone" class="sr-only">Phone</label>
      <input type="text" name="inputSecondphone" id="inputSecondphone" class="form-control" placeholder="Secondary Phone Number is optional">
    </div>
     <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="SignUp">
     <br><br>
      <a href="login.php"> <p class="textView">if you already have an account please sign in !!</p></a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>