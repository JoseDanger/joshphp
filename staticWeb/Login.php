<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <div width="100%" style="text-align: center">
<h1><b>LOGIN</b></h1>
    <br><br>
        <div width="100%" style="text-align: center"><img src="images/MainImages/OtherPetsReal.bmp"width = 500px border=10 /></div>
<br><br>
        <?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //1. create a database connection
    $server = "fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "a7vsd5p699o1mif7";
    $dbpassword = "uu5y3xzmj399r0ua";
    $dbname = "m2bsi2ekjab5fc3a";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

    //2. create a query
    $sql = "select * from users 
            where username = '$username' and 
            password = '$password'";

    //3. run the query
    $result = mysqli_query($conn, $sql);

    //4. show result
    if ($result->num_rows == 1) {
        echo "you have loged in ";
        while ($row = $result->fetch_assoc()) {
            echo $row["FirstName"];
            //start a session
            @session_start();
            //set a session variable
            $_SESSION["ID"] = $row["ID"];
            $_SESSION["FirstName"] = $row["FirstName"];
        }
    } else {
        echo "wrong username or password";
    }


}

if (!isset($_SESSION["userID"])) {
    ?>
  <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
         <input name="username" type="text" placeholder="Username"><Br><br>
        <input name="password" type="password" placeholder="Password">
        <Br><br>
     <input type="submit" value="LOGIN">
    </form>
    <br>
    <?php
}else{

    echo '<button><b><a href="Logout.php">logout</a></b></button>';

}
?><br><br>
    <Button><b><a href="HomePage.php">HOME PAGE</a></b></Button>
    <br><br><br><br>
    </body>
   </center></div>
</html>
