<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$phone = $_POST["phonenumber"];


//1. connect to database
$server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dusername = "a7vsd5p699o1mif7";
$dpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$conn = new mysqli($server, $dusername, $dpassword, $dbname);

//create a query

$sql="INSERT INTO `users`(`ID`, `FirstName`, `lastName`, `username`, `password`, `address`, `phoneNumber`) 
VALUES (NULL ,'$firstname','$lastname','$username','$password','$address','$phone')";

//3. run the query
if (mysqli_query($conn, $sql)) {
    ;

    echo "data has been inserted";
    echo "<a href='index.php'>HOME</a>";
}else{
    echo "data has not been inserted, please try again"
}
echo "<a href='index.php'>HOME</a>";
?>

</form>
