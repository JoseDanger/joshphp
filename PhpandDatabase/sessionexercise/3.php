<?php

//start a session
@session_start();
//get session value
$message = $HTTP_SESSION["Message"];
echo "Message" .$message
$color = $_SESSION["color"];
echo "color".$color;

