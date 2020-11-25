<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
<title>PET FOODS</title>

<div width="100%" style="text-align: center">
    <Button><a href="HomePage.php"><b>HOME PAGE</b></a></Button>
    <Button><a href="Cart.php"><b>CART</b></a></Button>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//1. connect to database
$server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "a7vsd5p699o1mif7";
$dbpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";


$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
// take input from selected category;
if (isset($_GET["category"])) {
    $photo = getCategoryPhotoFromCategoryID($_GET["category"]);
    echo "<img src='$photo' width='500px' border = '10px'>";
    $categoryName = getCategoryNameFromCategoryID($_GET["category"]);
    echo "<h1>".$categoryName . "</h1>";

    $sql = "select * from PRODUCT where Category = " . $_GET["category"];
    //echo $sql;
} else {
    $sql = "select * from PRODUCT";
}


//3. run the query on that connection
$result = mysqli_query($conn, $sql);

//4. show result
while ($row = $result->fetch_assoc()) {
    ?>
    <div>
        <p><?php echo $row["ProductName"]; ?></p>

        <p><img src="<?php echo $row["image"]; ?>"</p>
        <p>$<?php echo $row["PricePerUnit"]; ?></p>
        <form action="Addtocart.php" method="post">
            <input name="productID" value="<?php echo $row["ID"]; ?>" type="hidden">
            <input name="qty" type="number" placeholder="QTY" min="0">
            <input type="submit" value="Add to cart">
        </form>
    </div>
    <?php
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
function getCategoryPhotoFromCategoryID($CategoryID)
{
    //1. create a db connection
    $conn = createDatabaseConnection();
    //2. query
    $sql = "select Photo from Category where ID=$CategoryID";

    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row = $result->fetch_assoc()) {
        $Photo = $row["Photo"];
    }
    return $Photo;
}
/**
 * @name getCategoryNameFromCategoryID
 * @param $CategoryID
 * @return $name
 */
function getCategoryNameFromCategoryID($CategoryID)
{
    //1. create a db connection
    $conn = createDatabaseConnection();
    //2. query
    $sql = "select Name from Category where ID=$CategoryID";

    //3. run query
    $result = mysqli_query($conn, $sql);

    //4. show result
    while ($row = $result->fetch_assoc()) {
        $name = $row["Name"];
    }
    return $name;
}
/*
 * @Name trying to put pet food into table
 * @param $
 */
 ?>
<div id="FooterDiv">
    <?php include "footer.php"; ?>
</div>
</html