<?php
 include('../../session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobiles</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->
<style>
#bt {
  background: #00497a;
  background-image: -webkit-linear-gradient(top, #00497a, #665066);
  background-image: -moz-linear-gradient(top, #00497a, #665066);
  background-image: -ms-linear-gradient(top, #00497a, #665066);
  background-image: -o-linear-gradient(top, #00497a, #665066);
  background-image: linear-gradient(to bottom, #00497a, #665066);
  -webkit-border-radius: 29;
  -moz-border-radius: 29;
  border-radius: 29px;
  text-shadow: 4px 2px 0px #666666;
  -webkit-box-shadow: 7px 5px 3px #666666;
  -moz-box-shadow: 7px 5px 3px #666666;
  box-shadow: 7px 5px 3px #666666;
  font-family: Georgia;
  color: #ffffff;
  font-size: 26px;
  padding: 12px 24px 10px 20px;
  border: solid #361436 2px;
  text-decoration: none;
  width: 180px;
}

#bt:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
</head>

<body>


        <!-- /.container -->


    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('1.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('2.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('3.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <hr>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
              <a href="../sam.php">
                <button type="button" class="btn btn-primary btn-lg center-block" id="bt">Get Started !</button>
              </a>
                </div>
        </div>


<br>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
