<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
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
    $server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = " a7vsd5p699o1mif7";
    $dbpassword = " a7vsd5p699o1mif7";
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
$datetime = date("Y-m-d H:i:s");

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
?><br><br><br>
    <button><b><a href="checkout.php"> BACK TO TOP</a> </b></button>
    <Button><b><a href="index.php">HOME PAGE</a></b></Button>
    <br><br><br><br>
    </body>
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
    </footer></center></div>
</html>