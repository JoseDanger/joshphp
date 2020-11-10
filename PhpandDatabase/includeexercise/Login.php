<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    //create database connection
    $server = "http://fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/";
    $dusername = "a7vsd5p699o1mif7";
    $dpassword = "uu5y3xzmj399r0ua";
    $dbname = "m2bsi2ekjab5fc3a";

    $conn = new mysqli($server, $dusername, $dpassword, $dbname);
    $sql = "select * from users 
    where username ='$username' and password ='$password'";

    //run my query
    $result = mysqli_query($conn, $sql);
//4. show result
    if ($result->num_rows == 1){
        echo"your have right login";
        while ($row =$result->fetch_assoc()){
            echo $row["firstname"];
            //start session
            @session_start();
            //set a session variable
            $_SESSION["userID"] =$row["ID"];
            $_SESSION["firstname"] = $row["firstname"];
        }
    }else{
        echo "wrong username or password";
    }
}
?>
<?php
if (!isset($_SESSION["userID"])){


?>

<form action="<?php $_SESSION["PHP_SELF"]; ?>" method="Post">
    <input name="username" type="text" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <input type="Submit" value="Post">

</form>
<?php
} else{
?>
<a href="logout.php"
<?php
    ?>