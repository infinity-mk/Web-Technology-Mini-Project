<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
echo "Successfully Logged OUT ! ";
header("Refresh: 1.9;url=index.php");

}
?>
