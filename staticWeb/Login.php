<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAT FOOD</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body><?php
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
where username =".$username."and password =".$password;

//run my query
$result = mysqli_query($conn, $sql);
}?>
</body>
