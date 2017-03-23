<?php
include('info.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pierceman Electronics</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">



</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Pierceman Electronics</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Mobile/index.php">Mobiles</a>
                    </li>
                    <li>
                        <a href="Laptop/index.php">Laptops</a>
                    </li>
                    <li>
                        <a href="ACCESORIES/index.php">Accesories</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">MOBILES</p>
                <div class="list-group">
                    <a href="sam.php" class="list-group-item ">SAMSUNG</a>
                    <a href="moto.php" class="list-group-item">MOTOROLA</a>
                    <a href="len.php" class="list-group-item">LENOVO</a>
                    <a href="" class="list-group-item active"><?php echo $user_check ?></a>
                    <a href="cart.php" class="list-group-item">CART(<b>
                      <?php
                      $result=mysql_query("SELECT count(item) from cart where usern='$user_check'");
                      $num_rows = mysql_num_rows($result);
                      if ($num_rows==0) { echo "EMPTY";}
                      else{
                      $data=mysql_fetch_assoc($result);
                      echo $data['count(item)'];}
                     ?></b>)</a>
                    <a href="../logout.php" class="list-group-item">LOGOUT</a>
                </div>
            </div>
