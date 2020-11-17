<?php
@session_start();


$orderedProductIDs = ["orderedProductIDs"];
$orderedProductQtys = ["orderedProductQtys"];

$i = 0;
    while($i<sizeof($orderedProductIDs)) {
        $orderedProductID = $orderedProductIDs[$i];
        $orderedProductQty = $orderedProductQtys[$i];
        echo "<p>ID: $orderedProductID and Qty: $orderedProductQty</p>";
        $productName = getProductNamebyProductID
    }


    //1. connect to database
    $server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    //2. query
    $sql = "select ProductName from product where ID=$productID";
    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row=$result->fetch_assoc()){
        $name = $row["ProductName"];
    }
    Return $name;
}
/**
 * @name getProductNameByProductID
 * @param $ProductName
 * @return product name
 */

/**@name getProductNamebyProductID ...*/
function getProductNamebyProductID($productID){
    //1. connect to database
    $server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    //2. query
    $sql = "select ProductName from product where ID=$productID";
    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row=$result->fetch_assoc()){
        $name = $row["ProductPriceByUnit"];
    }
    Return $name;
}
/**@name getProductPricePerUnitbyProductID ...*/
function getProductPricePerUnitByProductID($productID){
    //1. connect to database
    $server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    //2. query
    $sql = "select ProductPricePerUnit from product where ID=$productID";
    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row=$result->fetch_assoc()){
        $name = $row["ProductPriceByUnit"];
    }
    Return $name;
}


