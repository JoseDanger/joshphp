<?php
//start a session
@session_start();
//get session value
$Password = $_SESSION["Password"];
echo "Password".$Password;

