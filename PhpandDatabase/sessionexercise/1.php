<?php
//start a session
@session_start();
//get session value
$Username = $_SESSION["Username"];
    echo "Username".$Username;

