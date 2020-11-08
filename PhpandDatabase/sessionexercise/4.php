<?php

//start a session
@session_start();
//get session value
$message = $_SESSION["Message"];
echo "Message" .$message;
//$Address = $_SESSION["Address"];
//echo "Address".$Address;

