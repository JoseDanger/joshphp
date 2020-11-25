<title>PET FOODS</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
<div width="100%" style="text-align: center">
    <h1><b>CHECKOUT</b></h1><br><br><br>
    <img src="images/MainImages/checkOut.jpg" width = 500px border=10 /><br><br>
<?php
@session_start();
$orderedProductIDs = $_SESSION["orderedProductIDs"];
$orderedProductQtys = $_SESSION["orderedProductQtys"];
$delivery = 15;
$i = 0;
$total = 0;
while ($i<sizeof($orderedProductIDs)){
    $orderedProductID = $orderedProductIDs[$i];
    $orderedProductQty = $orderedProductQtys[$i];
    $productName = getProductNameByProductID($orderedProductID);
    $price=getProductPriceByProductID($orderedProductID);
    echo "<p>Name: $productName Qty: $orderedProductQty Unit Price: $price
    Price: ".($price*$orderedProductQty)."</p>";
    $total = $total + ($price*$orderedProductQty);
    if($price>300);
    echo [$total=$total];
else [($total = $total + $delivery)];

    $i++;


}
echo "<p>Total: $total</p>";
function createDatabaseConnection(){
    //1. connect to database
    $server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "a7vsd5p699o1mif7";
    $dbpassword = "uu5y3xzmj399r0ua";
    $dbname = "m2bsi2ekjab5fc3a";
    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}
/**
 * @name getProductNameByProductID
 * @param $productID
 * @return product name
 */