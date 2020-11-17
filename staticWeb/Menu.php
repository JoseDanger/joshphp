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


<br><br>
</body>