
<?php



//1. connect to database
$server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
$dbusername = "t8jnow42fmp1smpt";
$dbpassword = "fdavedw769oxw5pd";
$dbname = "k2nfay1osz1i59kc";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
// take input from selected category;
if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
    $sql = "select * from products where category = ".$_GET["category"];
}else{
    $sql = "select * from products";
}


//3. run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while ($row = $result->fetch_assoc()){
    ?>
    <div>
        <p><?php echo $row["name"]; ?></p>
        <p><?php echo $row["price"]; ?></p>
        <p><img src="<?php echo $row["image"]; ?>"</p>
        <form action="Addtocart.php" method="post">
            <input name="productID" value="<?php echo $row["id"]; ?>" type="hidden">
            <input name="qty" type="number" placeholder="QTY" min="0">
            <input type="submit" value="Add to cart">
        </form>
    </div>
    <?php
}?>
<button><b><a href="Products.php"> BACK TO TOP</a> </b></button>
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
</footer></center>
</html>
