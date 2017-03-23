<?php
include('../session.php');
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
    <script>
    function goBack() {
        window.history.back();
    }
    </script>


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
                <p class="lead">SPECIFICATIONS -</p>
                <div class="list-group">
                  <a href="#" class="list-group-item" onclick="goBack()">BACK</a>
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

            <div class="col-md-9">


<?php
include("config.php");
$itemno=$_REQUEST['itemno'];

   $sel=mysql_query("select * from items where itemno='$itemno'");
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['itemno'];
      echo "<br><form method='post'>
	  <center><h2><font face='Andale Mono' size='+3' color='#B0171F' style='text-transform: uppercase;'>".$arr['desca']."</font></h2><br><br>
	<fieldset style='width:80%'><table border='0' >";

   echo "<tr>
   <tr>
   <td><img src='itempics/$i.jpg' height='300' width='200'></td>
   <hr>
   <td style='margin-left:5px'>
   <b><font face='Georgia' size='+1'>Item No : </b>".$arr['itemno'].
   "<br><b>Price : </b>Rs&nbsp;".$arr['price'].
   "<br><b>Product Details : <br></b>".$arr['info'].
   " </font><br><br><a href='cart/cart_add.php?itemno=$i'><img src='images/cart.png' width='100' height='80'/></a>  </td>
   </tr></table></fieldset></center><hr>";
    }
	?>

</div>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
