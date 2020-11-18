<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CAT FOOD</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
<center
<ul>
    <li><button><b><a href="Old Page Design/loginForm.html">LOG IN</a>
            </b></button> </li> <br>
    <li><button><b></b><a href="AboutUs.html">ABOUT US</a></b></button> </li><br>
    <li><button><b><a href="Old Page Design/phpForm_Post.html">REGISTER ACCOUNT</a></b></button> </li>
    <br><li><button><b></b><a href="">YOUR ACCOUNT</a></b></button> </li><br>
    <li><button><b></b><a href="Cart.php">CART</a></b></button> </li><br>
    <li><button><b></b><a href="">WISHLIST</a></b></button> </li><br>
    <?php
          if (isset($_SESSION["userID"])){
        ?>
    <li><button><b></b><a href="">MY ORDERS</a></b></button> </li><br>
    <?php
    }
    ?>

</ul>
</centre>
<button><b><a href="Menu.php"> BACK TO TOP</a> </b></button>
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
</footer></center>
</html>