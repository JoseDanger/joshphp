<?php

//start a session
@session_start();
//get session value
$message = $HTTP_SESSION["Message"];
echo "Message" .$message
$Address = $_SESSION["Address"];
echo "Address".$Address;

