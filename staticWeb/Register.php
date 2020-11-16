<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FISH</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
<center>
<form action="action_page.php">
    <div class="container">
        <br><br>
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
<br><br>
        <div width="100%" style="text-align: center">
            <img src="images/Main Images/main.jpg" width = 500px border=10 /></div>
        <br><br>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
        <br><br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <br><br>
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <br><br>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <br><br> <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
</center>
</body>