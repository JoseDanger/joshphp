<?php



$server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dusername = "a7vsd5p699o1mif7";
$dpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$conn = new mysqli($server, $dusername, $dpassword, $dbname);

//take input from selected category
if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
    $sql = "select * from PRODUCT where Category =".$_GET["category"];
}else {
    $sql = "select * from PRODUCT";
}

$result = mysqli_query($conn, $sql);

// show my result
while ($row = $result->fetch_assoc()) {
    ?>
    <div id="showProduct">
        <img src="<?php echo $row["image"]; ?>" height="150px" width="150px"border="5">
        <br>
        <h3><?php echo $row["ProductName"]; ?></h3>
        <p><?php echo $row["PricePerUnit"]; ?></p>
        <form action="..." method="post">
            <input name="productID" value="<?php echo $row["ID"];?>" type="hidden">
            <input name="qty" type="number" placeholder="QTY">
            <input type="submit" value="ADD TO CART"
        </form>
    </div>


    <?php

}