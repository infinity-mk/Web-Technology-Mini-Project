<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>City add</title>
</head>


<body>
<form action="add_states.php" method="post" enctype="application/x-www-form-urlencoded">
<table width="100%" border="2" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="col">State ID</th>
    <th scope="col">City NAme</th>
  </tr>
  <tr>
    <td><input type="text" name="sid" id="sid"></td>
    <td><input type="text" name="cname" id="cname"></td>
  </tr>
  <tr>
    <td></td>
    <td><input name="" type="submit" value="Submit"></td>
   </tr>
</table>
</form>
<?php
$link= mysqli_connect("localhost","root","root123","shop");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sid = mysqli_real_escape_string($link, $_POST['sid']);
$cname = mysqli_real_escape_string($link, $_POST['cname']);

$sql = "INSERT INTO city (State_id, City_name) VALUES ('$sid', '$cname')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>





</body>
</html>
</body>
</html>