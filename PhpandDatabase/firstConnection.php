<?php
//create a database connection
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

// will write a query

$sql = "select * from users";
//execute the query
$result = mysqli_query($conn, $sql);

// show my result
while ($row = $result->fetch_assoc()){
    echo $row["ID"].;
    echo $row["FirstName"].;
    echo $row["lastName"].;
    echo $row["username"].;
    echo $row["Password"].;
    echo $row["address"].;
    echo $row["phoneNumber"].;
}
echo "testing";

?>