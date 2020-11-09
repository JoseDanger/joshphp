<?php
//start a session
@session_start();
//get session value
$firstname = $_SESSION["firstname"];
echo "User's Firstname" .$firstname;
//$Username = $_SESSION["Username"];
//    echo "Username".$Username;

