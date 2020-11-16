<!DOCTYPE html>
<d lang="en">
<head>
    <meta charset="UTF-8">
    <title>PET FOODS</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
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
$sql = "select * from Category";

//3. Run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while($row = $result->fetch_assoc()){
    ?>


    <Button><a href="Dogpage.php?category=<?php echo $row["ID"];?>"><b><?php echo $row["Name"]; ?></b></a></Button>
<button><b><a href="index.php">HOME PAGE</a> </b></button>
    <div width="100%" style="text-align: center">
        <img src="images/MainImages/main.jpg" width = 500px border=10 /></div>
    <br><br>
<?php
}?>
</html>
