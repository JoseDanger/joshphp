<?php
$server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dusername = "a7vsd5p699o1mif7";
$dpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$conn = new mysqli($server, $dusername, $dpassword, $dbname);

$sql = "select * from PRODUCT";

$result = mysqli_query($conn, $sql);

// show my result
while ($row = $result->fetch_assoc()) {
    echo $row = ["ID"];
    echo $row = ["ProductName"];
    echo $row = ["PricePerUnit"];
    echo $row = ["Category"];
    echo $row = ["image"]
     }