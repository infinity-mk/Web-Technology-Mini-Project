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
                <a class="navbar-brand" href="../Menu/aboutus.php">Pierceman Electronics</a>
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
                <p class="lead">ACCESORIES</p>
                <div class="list-group">
                    <a href="pow.php" class="list-group-item">POWER BANKS</a>
                    <a href="head.php" class="list-group-item">HEADPHONES</a>
                    <a href="spk.php" class="list-group-item">SPEKAERS</a>

                </div>
            </div>

            <div class="col-md-9">






              <div><br/><center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Lenovo</font></h2></center></div>
              <div style="width:100%;float:left" >
              <?php

              include("config.php");

              $catg=1;
              $subcatg="len";


                 $sel=mysql_query("select * from items where catg='$catg' and subcatg='$subcatg'");
                 echo"<form method='post'><table border='0' align='center'><tr>";
                 $n=1;
                  while($arr=mysql_fetch_array($sel))
                 {
                 $i=$arr['itemno'];
                  if($n%4==0)
              	{
              	echo "<tr>";
              	}
                 echo "
                 <td height='300' width='280' align='center' >
                 <img src='admin/itempics/$i.jpg' height='200' width='130'><br/>

               <b>Item No:</b>".$arr['itemno'].
                 "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
                 "<br><b>Description:</b>".$arr['desca'].
                 "<br><br><a href='index.php?con=12 & itemno=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>
                    <a href='index.php?con=14 & itemno=$i'><img src='images/view7.jpg' width='70' height='20'/></a>
                 </td>";
                $n++;

                 }
                 	  echo "</tr></table>
                     </form>";
              	?>
                <div><br>
              <marquee behavior="scroll"  dir="ltr" align="absbottom">
                <img src="usepics/logo5.jpg" width="100" height="70"/>
              <img src="usepics/logo11.jpg" width="100" height="70"/>
              <img src="usepics/logo12.jpg" width="100" height="70"/>
              <img src="usepics/logo8.jpg" width="100" height="70"/>
              <img src="usepics/logo6.jpg" width="100" height="70"/>
              <img src="usepics/logo4.jpg" width="100" height="70"/>
              <img src="usepics/logo3.jpg" width="100" height="70"/>

              <img src="usepics/logo13.jpg" width="100" height="70"/>
               <img src="usepics/logo15.jpg" width="100" height="70"/>
              <img src="usepics/logo1.jpg" width="100" height="70"/>
              <img src="usepics/logo2.jpg" width="100" height="70"/>
              <img src="usepics/logo14.jpg" width="100" height="70"/>
              <img src="usepics/logo9.jpg" width="100" height="70"/>
              </marquee>
              </div>
              </div>





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
