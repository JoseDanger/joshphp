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
<?php include "Image.php"; ?>

    <form action="<?php $_SESSION["PHP_SELF"]; ?>" method="Post">
        <input name="Message" type="text" placeholder="Message here">
        <input type="Submit" value="Post">

    </form>


</div>

<div id="main"> contents 1</div>
<div id="footer">contact information</div>
</body>
</html>