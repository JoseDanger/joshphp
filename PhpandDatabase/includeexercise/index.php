<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="header">
    <?php
    include "Menu.php";
    ?>
    <?php include "page3.php";?>
<?php include "Image.php"; ?>

    <form action="<?php $_SESSION["PHP_SELF"]; ?>" method="Post">
        <input name="Message" type="text" placeholder="Message here">
        <input name="Username" type="text" placeholder="username">
        <input name="password" type="text" placeholder="password">
        <input type="Submit" value="submit">

    </form>


</div>

<div id="main"> contents 1</div>
<div id="footer">contact information</div>
</body>
</html>