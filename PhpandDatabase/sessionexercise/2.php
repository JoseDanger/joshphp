<?php

//start a session
@session_start();
//get session value
$firstname = $_SESSION["firstname"];
echo "User's Firstname" .$firstname;
//$Password = $_SESSION["Password"];
//echo "Password".$Password;

