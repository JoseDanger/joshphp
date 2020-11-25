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

    <h2>If you're purchase is over $300 DELIVERY IS FREE!</h2>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
    if ($total > 300){ $total = $total;

    }else{ $total =$total + $delivery;};


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
