<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
<h1><b>LOGIN</b></h1>
    <br>
<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //1. create a database connection
    $server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

    //2. create a query
    $sql = "select * from users 
            where username = '$username' and 
            password = '$password'";

    //3. run the query
    $result = mysqli_query($conn, $sql);

    //4. show result
    if ($result->num_rows == 1) {
        echo "you have login ";
        while ($row = $result->fetch_assoc()) {
            echo $row["firstname"];
            //start a session
            @session_start();
            //set a session variable
            $_SESSION["userID"] = $row["id"];
            $_SESSION["firstname"] = $row["firstname"];
        }
    } else {
        echo "wrong username or password";
    }


}

if (!isset($_SESSION["userID"])) {
    ?>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <centre> <input name="username" type="text" placeholder="Username"></centre><Br><br>
        <centre><input name="password" type="password" placeholder="Password"></centre><Br><br>
        <centre><input type="submit" value=<b>"LOGIN"</centre>b></centre>
    </form>
    <br>
    <?php
}else{

    echo '<a href="logout.php">logout</a>';

}
?>
    <centre>
    <button><b><a href="Login.php"> BACK TO TOP</a> </b></button>
    <Button><b><a href="index.php">HOME PAGE</a></b></Button>
    <br><br><br><br></centre>
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
