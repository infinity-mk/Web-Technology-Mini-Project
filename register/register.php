<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>


<script>
$( function() {
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1975:2010',
        dateFormat : 'y-mm-dd',
        defaultDate: '96-01-01'

    });
});
</script>
<script>
function checkPasswordMatch() {
    var passwordi = $("#password").val();
    var confirmPassword = $("#repassword").val();

		if (passwordi != confirmPassword)
        $("#txt").html("Passwords do not match!");
    else
        $("#txt").html("Passwords match.");
}
$(document).ready(function () {
   $("#password, #repassword").keyup(checkPasswordMatch);
});
</script>
</head>
<body>

      <div  class="form">
    		<form id="contactform" name="contactform" method="post" action="reg.php">
    			<p class="contact"><label for="name">Name</label></p>
    			<input id="name" name="name" placeholder="First and last name" required tabindex="1" type="text" pattern="[a-zA-Z\s]+">

    			<p class="contact"><label for="email">Email</label></p>
    			<input id="email" name="email" placeholder="example@domain.com" required type="email">

                <p class="contact"><label for="username">Create a username</label></p>
    			<input id="username" name="username" placeholder="username" required tabindex="2" type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$">

                <p class="contact"><label for="password">Create a password</label></p>
								<div id="txt"></div><br>
    			<input type="password" id="password" name="password" required pattern="^.{6,20}$" >
                <p class="contact"><label for="repassword">Confirm your password</label></p>
    			<input type="password" id="repassword" name="repassword" required onChange="checkPasswordMatch();" >

               <p class="contact"><label for="dob">When were you born ?</label></p>
    			<input type="text" id="datepicker" required name="datee" />

            <select class="select-style gender" name="gender">
            <option value="select">i am..</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select><br><br>

            <p class="contact"><label for="phone">Mobile phone</label></p>
            <input id="phone" name="phone" placeholder="phone number" required type="text" pattern="^[789]\d{9}$">

            <p class="contact"><label for="add">ADDRESS</label></p>
    			<textarea rows="4" cols="50" name="add"></textarea>
                <br><br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit">
   </form>
</div>
</div>





</body>
</html>
