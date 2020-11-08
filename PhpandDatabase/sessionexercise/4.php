<?php
//start a session
@session_start();
//get session value
$Address = $_SESSION["Address"];
echo "Address".$Address;

