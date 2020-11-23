<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CATEGORY</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head><div width="100%" style="text-align: center">
    <h1><b>CART</b></h1><br>
    <img src="images/MainImages/Cart.jpg"border=10 width="500px" border=10><br><br><br>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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

?>
    <p>Total: $<?php echo $total; ?></p>
    <?php
//if ($total > ???){
//
//}else{
//
//}(Give Message for Either)
if (isset($_SESSION["userID"])){
?>

<form action="checkout.php" method="post">
    <textarea name="ShippingAddress" rows="10" cols="50"></textarea>
    <input type="submit" value="CheckOut"

</form>



    <?php
}else{
    echo "you need to login";
}

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
function getProductNameByProductID($productID){
    //1. create a db connection
    $conn = createDatabaseConnection();
    //2. query
    $sql = "select ProductName from PRODUCT where ID=$productID";

    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row = $result->fetch_assoc()){
        $name = $row["ProductName"];
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
    $sql = "select PricePerUnit from PRODUCT where ID=$productID";
    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row=$result->fetch_assoc()){
        $price = $row["PricePerUnit"];
    }
    return $price;
}
?><br><br>
        <button><b><a href="Cart.php"> BACK TO TOP</a> </b></button>
    <button><b><a href="Login.php"> LOGIN</a> </b></button>
        <Button><b><a href="HomePage.php">HOME PAGE</a></b></Button>
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