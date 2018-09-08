 <?php include_once('dbh-inic.php'); //This database connection file ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Places</title>
    <!-- Page Head icon  -->
    <link rel="shortcut icon" href="public/images/ecological-house.png" type="image/x-icon">
    <!-- Bootstrap Sources Css and js files -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css" />
    <!-- Font Awesome Icon path -->
    <link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!-- My custom Css-->
    <link rel="stylesheet" href="public/css/custom.css" />
    <link rel="stylesheet" href="public/css/admin.css" />
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Kosugi|Merienda|Pacifico|Roboto" rel="stylesheet" />
</head>
<body>
    <header> <!-- Header  navbar area and a jumbotron -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-light bg-light">
                     <a class="navbar-brand" href="index.php">
                        <i class="fa fa-home"></i> Rental Places
                     </a>
                    <ul class="navbar-nav">
                        <li class="nav-item pull-right">
                            <a href="admin/login.php" class="nav-link"> Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>