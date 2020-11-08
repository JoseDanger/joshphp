<?php

//start a session
@session_start();
//get session value
$message = $HTTP_SESSION["Message"];
echo "Message" .$message
$Password = $_SESSION["Password"];
echo "Password".$Password;

