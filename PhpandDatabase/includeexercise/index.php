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

    <form action="recieve.php" method="get">
    <input name="username" type="text" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <input name="myNumber" type="number" placeholder="Give a number">
    <input name="myColor" type="color" placeholder="Select a color">
    <select name="mySelect">
        <option value="Adult">Adult</option>
        <option value="Child">Child</option>
    </select>
    <input type="submit" value="Sent">
</form>


</div>

<div id="main"> contents 1</div>
<div id="footer">contact information</div>
</body>
</html>