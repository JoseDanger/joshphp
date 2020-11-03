<?php
//create a database connection
$server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
$dusername = "a7vsd5p699o1mif7";
$dpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$con = new mysqli($server, $dbusername, $dbpassword $dbdomain);

if ($con->error){
    echo $conn->error;
}else {
    echo "Connected"
}

// will write a query

$sql = "select * from users";
//execute the query
$result = mysqli_query($conn, $sql);

// show my result
while ($row = $result->fetch_assoc()){
    echo $row["id"];
}


?>
