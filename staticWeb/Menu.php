<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAT FOOD</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script></head>
<body>
<div width="100%" style="text-align: center">
    <h1><b>MENU</b></h1><br><Br>
<img src="images/MainImages/Kitten.jpg"border=10 width="500px" border=10> </div>
<button><b><a href=Login.php">LOG IN</a>
            </b></button>  <br>
    <button><b><a href="AboutUs.html">ABOUT US</a></b></button> <br>
    <button><b><a href="Registrationform.php">REGISTER ACCOUNT</a></b></button>
    <br><button><b><a href="Registrationpage.php">YOUR ACCOUNT</a></b></button> <br>
    <button><b><a href="Cart.php">CART</a></b></button> <br>

    <?php
          if (isset($_SESSION["userID"])){
        ?>
    <li><button><b></b><a href="">MY ORDERS</a></b></button> </li><br>
    <?php
    }
    ?>


<button><b><a href="Menu.php"> BACK TO TOP</a> </b></button>
<Button><b><a href="index.php">HOME PAGE</a></b></Button>
<br><br><br><br>
</body></center>
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