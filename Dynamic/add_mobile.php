<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add mobile</title>
</head>

<body>

<form action="add_mobile.php" method="post" enctype="multipart/form-data">

<table width="100%" border="2" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="row">name</th>
    <td><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <th scope="row">brand</th>
    <td><select name="brand" id="brand">
      <option value="Motorola">Motorola</option>
      <option value="Samsung">Samsung</option>
      <option value="Lenovo">Lenovo</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row">color</th>
    <td><input type="text" name="color" id="color"></td>
  </tr>
  <tr>
    <th scope="row">price</th>
    <td><input type="text" name="price" id="price"></td>
  </tr>
  <tr>
    <th scope="row">display</th>
    <td><input type="text" name="display" id="display"></td>
  </tr>
  <tr>
    <th scope="row">resolution</th>
    <td><input type="text" name="resolution" id="resolution"></td>
  </tr>
  <tr>
    <th scope="row">ram</th>
    <td><input type="text" name="ram" id="ram"></td>
  </tr>
  <tr>
    <th scope="row">rom</th>
    <td><input type="text" name="rom" id="rom"></td>
  </tr>
  <tr>
    <th scope="row">primary cam</th>
    <td><input type="text" name="camp" id="camp"></td>
  </tr>
  <tr>
    <th scope="row">secondary cam</th>
    <td><input type="text" name="cams" id="cams"></td>
  </tr>
  <tr>
    <th scope="row">processor</th>
    <td><input type="text" name="processor" id="processor"></td>
  </tr>
  <tr>
    <th scope="row">battery</th>
    <td><input type="text" name="battery" id="battery"></td>
  </tr>
  <tr>
    <th scope="row">operating system</th>
    <td><input type="text" name="os" id="os"></td>
  </tr>
  <tr>
    <th scope="row">img path</th>
    <td><input type="file" name="img_path" id="img_path"></td>
  </tr>
  <tr>
    <th scope="row">sim type</th>
    <td><input type="text" name="sim_type" id="sim_type"></td>
  </tr>
  <tr>
    <th scope="row">model id</th>
    <td><input type="text" name="model_id" id="model_id"></td>
  </tr>
  <tr>
    <th scope="row">note</th>
    <td><textarea name="note" id="note"></textarea></td>
  </tr>
  <tr>
    <th scope="row">type</th>
    <td><select name="type" id="type">
      <option value="Smartphones">Smartphones</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row">discount </th>
    <td><input type="text" name="discount" id="discount"></td>
  </tr>
  <tr>
    <th scope="row">availability</th>
    <td><select name="avail" id="avail">
      <option value="YES">YES</option>
      <option value="NO">NO</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row"></th>
    <td><input name="submit" type="submit"></td>
  </tr>
</table>

</form>

<?php
$link= mysqli_connect("localhost","root","root123","shop");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($link, $_POST['name']);
$brand = mysqli_real_escape_string($link, $_POST['brand']);
$color = mysqli_real_escape_string($link, $_POST['color']);
$price = mysqli_real_escape_string($link, $_POST['price']);
$display = mysqli_real_escape_string($link, $_POST['display']);
$res = mysqli_real_escape_string($link, $_POST['resolution']);
$ram = mysqli_real_escape_string($link, $_POST['ram']);
$rom = mysqli_real_escape_string($link, $_POST['rom']);
$camp = mysqli_real_escape_string($link, $_POST['camp']);
$cams = mysqli_real_escape_string($link, $_POST['cams']);
$process = mysqli_real_escape_string($link, $_POST['processor']);
$battery = mysqli_real_escape_string($link, $_POST['battery']);
$os = mysqli_real_escape_string($link, $_POST['os']);

$simt = mysqli_real_escape_string($link, $_POST['sim_type']);
$mid = mysqli_real_escape_string($link, $_POST['model_id']);
$note = mysqli_real_escape_string($link, $_POST['note']);
$type = mysqli_real_escape_string($link, $_POST['type']);
$disc = mysqli_real_escape_string($link, $_POST['discount']);
$avail = mysqli_real_escape_string($link, $_POST['avail']);

$uploaddir = '../eLECTRONICS/Mobile/images/';
$uploadfile = $uploaddir . basename($_FILES['img_path']['name']);

$filename=$_FILES['img_path']['name'];
$directory='images/';
 $uploadFile = $directory . $filename;
 
 if (move_uploaded_file($_FILES['img_path']['name'],$uploadFile)){
echo "The file is valid and was successfully uploaded.";
}

$sql = "INSERT INTO mobile (name, brand, color, price, display, resolution, ram, rom, camp, cams, processor, battery, os, img_path, sim_type, model_id, note, type, discount, availability)
 VALUES ('$name','$brand','$color','$price','$display','$res','$ram','$rom','$camp','$cams','$process','$battery','$os','{$uploadfile}','$simt','$mid','$note','$type','$disc','$avail')";

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