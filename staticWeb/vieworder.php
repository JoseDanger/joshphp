<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>PET FOODS</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
<div width="100%" style="text-align: center">
    <?php
    @session_start();
    $userID = $_SESSION["userID"];
    function createDatabaseConnection(){
        //1. connect to database
        $server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbusername = "a7vsd5p699o1mif7";
        $dbpassword = "uu5y3xzmj399r0ua";
        $dbname = "m2bsi2ekjab5fc3a";

        $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
        return $conn;
    }

    //1. connect to database
    $conn = createDatabaseConnection();
    //2 first query
    $sql = "select * from orderedProducts where userID = $userID";

    //3
    $result = mysqli_query($conn,$sql);

    //4
    while ($row = $result->fetch_assoc()) {
        echo "<h3>Order Number:"  .$row["orderID"] . "<h3>";
        echo "<h3>Shipping Address:"  .$row["shipAddress"] . "<h3>";
        echo "<h3> Time: ".$row["orderDate"] . "<h3>";

//second query
        $sql2 = "select * from orderedProducts where orderID = ".$row["orderedProductsID"];
// run querry second time
        $result2 = mysqli_query($conn, $sql2);
        while ($row2 = $result2->fetch_assoc()){
            echo "<p>ID: ".$row2["productID"]." Qty: ".$row2["qty"]."</p>";
        }

    }?>
    <button><b><a href="vieworder.php"> BACK TO TOP</a> </b></button>
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