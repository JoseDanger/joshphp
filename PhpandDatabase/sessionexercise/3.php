<?php
//start a session
@session_start();
//get session value
$color = $_SESSION["color"];
echo "color".$color;

