<?php
@session_start();


$orderedProductIDs = ["orderedProductIDs"];
$orderedProductQtys = ["orderedProductQtys"];

$i = 0;
    while($i<sizeof($orderedProductIDs)){
    $orderedProductID = $orderedProductIDs[$i];
    $orderedProductQty = $orderedProductQtys[$i];
    echo "<p>ID: $orderedProductID and Qty: $orderedProductQty</p>";
    $i++;
    }