<?php
$username = $_POST["username"];
$password = $_POST["password"];

    echo "username:".$username;
    echo "password:".$password;

    //create database connection
$server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
$dusername = "a7vsd5p699o1mif7";
$dpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$conn = new mysqli($server, $dusername, $dpassword, $dbname);

if ($conn->error){
    echo $conn->error;
}else {
    echo "Connected";
}
//create a query
$sql = "select * from users 
where username ='".$username."' and password ='".$password."'";

//run my query
$result = mysqli_query($conn, $sql);

if ($result->num_rows == 1){
    echo"your have wrong login";
    while ($row =$result->fetch_assoc()){
        echo $row["firstname"];
        @session_start();
        $_SESSION["firstname"] = $row["firstname"];
    }
}else{
    echo "wrong username or password";
}