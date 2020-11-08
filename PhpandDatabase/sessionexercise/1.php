<?php
//start a session
@session_start();
//get session value
$message = $HTTP_SESSION["Message"];
echo "Message" .$message
$Username = $_SESSION["Username"];
    echo "Username".$Username;

