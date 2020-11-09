<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    //create database connection
    $server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
    $dusername = "a7vsd5p699o1mif7";
    $dpassword = "uu5y3xzmj399r0ua";
    $dbname = "m2bsi2ekjab5fc3a";

    $conn = new mysqli($server, $dusername, $dpassword, $dbname);
    $sql = "select * from users 
    where username ='$username' and password ='$password'";
}
?>

<form action="<?php $_SESSION["PHP_SELF"]; ?>" method="Post">
    <input name="Username" type="text" placeholder="Username">
    <input name="Password" type="text" placeholder="Password">
    <input type="Submit" value="Post">

</form>

