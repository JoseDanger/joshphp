<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CATEGORY</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <div width="100%" style="text-align: center">
</head>
<?php


//1. connect to database
$server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "a7vsd5p699o1mif7";
$dbpassword = "uu5y3xzmj399r0ua";
$dbname = "m2bsi2ekjab5fc3a";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
$sql = "select * from Category";

//3. Run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while($row = $result->fetch_assoc()){
    ?>


    <Button><a href="Products.php?category=<?php echo $row["ID"];?>"><b><?php echo $row["Name"]; ?></b></a></Button>

<?php
}?><br><br>
<button><b><a href="category.php"> BACK TO TOP</a> </b></button>
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