<?php include('dbh-inic.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RentalPlaces</title>  
     <link rel="shortcut icon" href="../public/images/ecological-house.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="../public/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <!-- My custom Css-->
    <link rel="stylesheet" href="../public/css/custom.css" />
    <link rel="stylesheet" href="../public/css/admin.css">
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Kosugi|Merienda|Pacifico|Roboto" rel="stylesheet">
    <!-- Script -->
    <script type="text/javascript" src="../public/js/jquery-3.3.1.min.js"></script>
</head>
<body> 
 <header>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                     <a class="navbar-brand" href="index.php"> <i class="fa fa-home"></i> Rental</a>
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                          </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                     <li class="nav-item dropdown dropdown-menu-admin">
                       <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="../public/images/x.jpg" alt="" width="25px" height="25px" class="src">
                            </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <form action="my-rental.php" method="post">
                          <input type="submit" value="My rental" name="search" class="btn btn-outline-primary btn-sm btn-block" >
                          </form>
                          <a class="dropdown-item" href="profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a>
                          <form action="includes/logout-inic.php" method="POST">
                            <button type="submit" name="submit" class="btn btn-outline-danger btn-sm btn-block">logout</button>
                          </form>
                          </div>
                     </li>
                   </ul>
                 </div>
              </nav>
             </div>
         </div>
     </div>
  
</header>
