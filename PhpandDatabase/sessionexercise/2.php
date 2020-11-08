<?php

//start a session
@session_start();
//get session value
$message = $_SESSION["Message"];
echo "Message" .$message;
//$Password = $_SESSION["Password"];
//echo "Password".$Password;

