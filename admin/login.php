<?php 

session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Rental</title>

    <!-- Bootstrap core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="includes/login-inic.php">
       <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
         <label for="inputUsername" class="sr-only">Email address</label>
           <input type="text" name="inputUsername" class="form-control" placeholder="User Name" required autofocus>
             <label for="inputPassword" class="sr-only">Password</label>
               <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
             <label>
                 <input type="checkbox" value="remember-me"> Remember me
             </label>
             
      </div>
      <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign in" name="submit">
      <a href="signup.php" class="btn btn-lg btn-primary btn-block">Sign Up</a>
      <p class="mt-5 mb-3 text-muted">&copy; Created By The Gepettox</p>
    </form>

  </body>
</html>

          
  