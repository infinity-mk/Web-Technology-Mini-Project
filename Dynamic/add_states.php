<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Adding States</title>
</head>

<body>
<form action="add_states.php" method="post" enctype="application/x-www-form-urlencoded">
<table width="100%" border="2" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="col">State ID</th>
    <th scope="col">State NAme</th>
  </tr>
  <tr>
    <td><input type="text" name="sid" id="sid"></td>
    <td><input type="text" name="sname" id="sname"></td>
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
$sname = mysqli_real_escape_string($link, $_POST['sname']);

$sql = "INSERT INTO state (State_id, State_name) VALUES ('$sid', '$sname')";


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