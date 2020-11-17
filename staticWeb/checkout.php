<?php
@session_start();

$orderedProductIDs = $_SESSION["orderedProductIDs"];
$orderedProductQtys = $_SESSION["orderedProductQtys"];

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
$i++;
}
echo "<p>Total: $total</p>";

function createDatabaseConnection(){
    //1. connect to database
    $server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    return $conn;
}

/**
 * @name getProductNameByProductID
 * @param $productID
 * @return product name
 */
function getProductNameByProductID($productID){
    //1. create a db connection
    $conn = createDatabaseConnection();
    //2. query
    $sql = "select name from products where id=$productID";

    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row = $result->fetch_assoc()){
        $name = $row["name"];
    }
    return $name;
}


/**
 * @name getProductPriceByProductID
 * @param $productID
 * @return product price
 */
function getProductPriceByProductID($productID){
    //1. create a db connection
    $conn = createDatabaseConnection();
    //2. query
    $sql = "select price from products where id=$productID";
    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row=$result->fetch_assoc()){
        $price = $row["price"];
    }
    return $price;
}
$userID = $_SESSION["userID"];
$shippingAddress = $_POST["shippingAddress"];
$datetime = date("Y-m-d h:i:sa");

function createAnOrder($userID,$shippingAddress,$datetime){
//1.connection
    $conn = createDatabaseConnection();
    //2.query
    $sql = "INSERT INTO `Orders`(`orderID`, `userID`, `shipAddress`, `orderDate`) 
    VALUES ([Null],'$userID','$shippingAddress','$datetime')";
    //3. run query
    mysqli_query($conn, $sql);
    // i need my orderID
    $orderID = mysqli_insert_id($conn);
    return $orderID;
}
function insertProductToOrderedTable($orderID, $productID,$qty){
    //1. connection
    $conn = createDatabaseConnection();
    //2 Query
    $sql = "INSERT INTO `OrderedProducts`(`orderedProductsID`, `orderID`, `productID`, `qty`) 
    VALUES (Null, $orderID,$productID,$qty)";
}

//create my order
$orderID = createAnOrder($userID, $shippingAddress, $datetime);
$i = 0;
    while ($i < sizeof($orderedProductIDs));
    $productID = $orderedProductIDs;
    $qty = $orderedProductQtys;
    insertProductToOrderedTable($orderID, $productID, $qty);
    $i++;

    //clear my shopping cart
$_SESSION["orderedProductIDs"] = [];
$_SESSION["orderedProductQtys"] = [];