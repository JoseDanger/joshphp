<?php

//Start a session
@session_start();
//Set values to session variables
$_SESSION["Username"] = "Josh";
$_SESSION["Password"] = "Cramond";
$_SESSION["color"] = "red";
$_SESSION["Address"] = "123 road road";
?>
<html>
<head>Session Exercise</head>
<body>
<ul>
    <li><a href="1.php"> Page 1</a> </li>
    <li><a href="2.php"> Page 2</a> </li>
    <li><a href="3.php"> Page 3</a> </li>
    <li><a href="4.php"> Page 4</a> </li>
    <li><a href="5.php"> Page 5</a> </li>

</ul>


</body>
</html>