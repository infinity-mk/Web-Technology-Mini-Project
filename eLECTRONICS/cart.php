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
                <p class="lead">CART</p>
                <div class="list-group">
                    <a href="#" class="list-group-item" onclick="goBack()">BACK</a>
                    <a href="" class="list-group-item active"><?php echo $user_check ?></a>
                    <a href="../logout.php" class="list-group-item">LOGOUT</a>
                </div>
            </div>

            <div class="col-md-9">

<?php
$sel=mysql_query("select item from cart where usern='$user_check'");
$prc=0;
$num_rows = mysql_num_rows($sel);
if ($num_rows==0) {
   echo "<center><br><br><img src='cart/empty.jpeg'></center>";
}
else{
 while($arri=mysql_fetch_array($sel))
{
$i=$arri['item'];
$seli=mysql_query("select price,desca from items where itemno='$i'");
 while($arr=mysql_fetch_array($seli))
{

$ip=$arr['price'];
$prc=$prc+$arr['price'];
$dp=$arr['desca'];

echo "
<center>
<fieldset style='width:50%'><table border='0' >";

echo "
<tr>
<td><img src='itempics/$i.jpg' height='100' width='80'></td>
<hr>
<td style='margin-left:5px'>
<b><font face='Comic sans MS' size='+1'>Item No:</b>".$i."
<br><b>Price:</b>Rs&nbsp;".$arr['price']."
<br><b>Product Details:<br></b>".$arr['desca']."
</font>
</td></tr><tr><td></td>
<td>
<a href='cart/cart_del.php?itemno=$i'>REMOVE</a>
</td>
</tr></table></fieldset></center><hr>";
 }
 }

 echo "<center><font size='+1'><b>TOTAL : Rs. ".$prc."</b></font></center>" ;
 echo "<center><a href='orders/index.php?tot=$prc' ><h2>CHECKOUT<h2</a></center>";
 }
?>

</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
