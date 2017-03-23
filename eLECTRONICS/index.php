<?php
include('info.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Electronics</title>

<link href="CSS/main.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include('../header1.php');?>

<div id="menu">
<table width="100%" border="2" cellspacing="10" cellpadding="6">

  <tr>

    <td><a href="Mobile/index.php">
    <div style="height:100%;width:100%">MOBILES</div></a></td>
  </tr>



  <tr>
    <td><a href="Laptop/index.php">
    <div style="height:100%;width:100%">LAPTOPS</div></a></td>
  </tr>


  <tr>
    <td><a href="ACCESORIES/index.php">
    <div style="height:100%;width:100%">ACCESORIES</div></a></td>
  </tr>

  <tr>
    <td>
    <div style="height:100%;width:100%;"><?php echo $user_check ?></div></a></td>
  </tr>

  <tr>
    <td><a href="../logout.php">
    <div style="height:100%;width:100%">LOGOUT</div></a></td>
  </tr>

</table>
</div>

<div id="main">
  <a href="Mobile/index.php">
<div id="box0">
<p>MOBILES</p>
</div>
</a>

  <a href="Laptop/index.php">
<div id="box1">
<p>LAPTOPS</p>
</div>
</a>

<a href="ACCESORIES/index.php">
<div id="box2">
  <p>ACCESORIES</p>
</div>
</a>
</div>


<?php include('../footer.php');?>
</body>
</html>
