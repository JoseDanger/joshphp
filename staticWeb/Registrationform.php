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
            <img src="images/Main Images/main.jpg" width = 500px border=10 /></div>
        <br><br>
        <label for="firstname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required>
       <br><br>
        <label for="lastname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>
        <br><br>
        <label for="phonenumber"><b>PHONE NUMBER</b></label>
        <input type="text" placeholder="Enter Phone Number" name="phonenumber" id="phonenumber" required>
        <br><br>
        <label for="psw"><b>PASSWORD</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <br><br>
        <label for="psw-repeat"><b>REPEAT PASSWORD</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <br><br>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <br><br> <button type="submit" class="registeration">REGISTER</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <br>
            <button<a href="loginForm.html">SIGN IN</a></button></p>

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