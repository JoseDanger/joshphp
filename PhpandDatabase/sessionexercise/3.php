<?php

//start a session
@session_start();
//get session value
$message = $_SESSION["Message"];
echo "Message" .$message;
//$color = $_SESSION["color"];
//echo "color".$color;

