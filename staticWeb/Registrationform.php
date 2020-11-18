<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>REGISTER ACCOUNT</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
<center>
<form method="post" action="Registrationform.php">

    <div class="container">
        <br><br>
        <h1><b>REGISTER</b></h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
<br><br>
        <div width="100%" style="text-align: center">
            <img src="images/MainImages/main.jpg" width = 500px border=10 /></div>
<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$phone = $_POST["phone"];
if ($firstname == "" || $lastname==""){
    //1. connect to database
    $server = "klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "t8jnow42fmp1smpt";
    $dbpassword = "fdavedw769oxw5pd";
    $dbname = "k2nfay1osz1i59kc";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

//2. create a query
    $sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `username`, `password`, `address`, `phoneNumber`) 
VALUES (NULL,'$firstname','$lastname','$username','$password','$address','$phone')";

//3. run the query
    if (mysqli_query($conn, $sql)){
        echo "data has been inserted";
    }else{
        echo "data has not been inserted";
    }
}
else{
    echo "there should not be any empty fields";
}


echo "<a href='index.php'>Home</a>";
?>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <br><br> <button type="submit" class="registeration"><b>REGISTER</b></button>
    </div>

    <div class="container signin">
        <p>Already have an account? <br>
            <button<a href="Old Page Design/loginForm.html">SIGN IN</a></button></p>

</center>
</body><br><br><br>
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