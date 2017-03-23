<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root123", "online");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$user = mysqli_real_escape_string($link, $_POST['username']);
$pass = mysqli_real_escape_string($link, $_POST['password']);
$datee = mysqli_real_escape_string($link, $_POST['datee']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$add = mysqli_real_escape_string($link, $_POST['add']);



// attempt insert query execution
$sql = "INSERT INTO register (name, email, username, pass, dob, gen, phone, addr) VALUES ('$name', '$email', '$user', '$pass', '$datee', '$gender', '$phone', '$add')";
if(mysqli_query($link, $sql)){
    echo "Registerd successfully.";
header("Refresh: 1; url=../eLECTRONICS/mailer/index.php?email=$email");

} else{
    echo "ERROR: Retry, Unsuccesful registration. " . mysqli_error($link);
$link_address="register.php";
echo "<br><br><a href='".$link_address."'>REGISTER</a>";
}



// close connection
mysqli_close($link);
?>
