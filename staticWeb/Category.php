<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//1. connect to database
$server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dusername = "a7vsd5p699o1mif7";
$dpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$conn = new mysqli($server, $dusername, $dpassword, $dbname);

//2. create a query
//take input from selected category
if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
    $sql = "select * from PRODUCT where Category =".$_GET["category"];
}else {
    $sql = "select * from PRODUCT";
}

//3. Run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while($row = $result->fetch_assoc()){
    ?>
    <Button><a href="Dogpage.php"><b><?php echo $row["Name"]; ?></b></a></Button>

<?php
}
