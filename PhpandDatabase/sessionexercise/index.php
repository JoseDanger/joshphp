<?php

//Start a session
@session_start();
//Set values to session variables
//$_SESSION["Username"] = "Josh";
//$_SESSION["Password"] = "Cramond";
//$_SESSION["color"] = "red";
//$_SESSION["Address"] = "123 road road";
if (isset($_POST["message"])){
    echo "<p>I have a post message in this page</p>"
}else{
    echo"<p>Please post a message</p>";
}
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
<form action="<?php $_SESSION["PHP_SELF"]; ?>" method="post" ">
<input name="Message" type="text" placeholder="Message here">
<input type="Submit" value="Post">

</form>

</body>
</html>