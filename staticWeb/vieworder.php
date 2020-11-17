<?php
@session_start();
$userID = $_SESSION["userID"];
function createDatabaseConnection(){
    //1. connect to database
    $server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}

//1. connect to database
$conn = createDatabaseConnection();
//2 first query
$sql = "select * from orderedProducts where userID = $userID";

//3
$result = mysqli_query($conn,$sql);

//4
while ($row = $result->fetch_assoc()) {
    echo "<h3>Order Number:"  .$row["orderID"] . "<h3>";
     echo "<h3>Shipping Address:"  .$row["shipAddress"] . "<h3>";
     echo "<h3> Time: ".$row["orderDate"] . "<h3>";

//second query
$sql2 = "select * from orderedProducts where orderID = ".$row["orderedProductsID"];
// run querry second time
    $result2 = mysqli_query($conn, $sql2);
    while ($row2 = $result2->fetch_assoc()){
    echo "<p>ID: ".$row2["productID"]." Qty: ".$row2["qty"]."</p>";
    }

}
