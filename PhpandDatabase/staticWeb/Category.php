<?php
//1. connect to database
$server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
$dusername = "a7vsd5p699o1mif7";
$dpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$conn = new mysqli($server, $dusername, $dpassword, $dbname);

//2. create a query
$sql = "select * from Category";

//3. Run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while($row = $result->fetch_assoc()){
    echo $row["ID"]." ".$row["Name"];
}
