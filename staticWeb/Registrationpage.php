<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FISH</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head><centre>


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
    echo"<a href='index.php'>HOME</a>";
}else{
    echo "data has not been inserted, please try again";
}
echo "<a href='index.php'>HOME</a>";
?>
<br><br><br> <Button><a href="index.php"><b>BACK TO TOP</b></a></Button>
<br>
<br>
<br>
<footer>
    <b><p>Copyright &copy; 2020, ALL RIGHTS RESERVED</p></b>
    <br>
    <b><p>
        <table>
            <tr>
                <ul>
                    Health Food <br>
                    Best Products <br>
                    Pet Food Brands <br>
                    Join Our Team <br>
                    Our Donations <br>
                </ul>
                <ul>
                    Donate To Dogs In Need <br>
                    Re-Home Your Dog <br>
                    Get A Re-Homed Dog (Save A Life) <br>
                    Contact Us <br>
                    Train Your Pet <br>

                </ul>
            </tr>
        </table>
        </p></b>
</footer></center>
