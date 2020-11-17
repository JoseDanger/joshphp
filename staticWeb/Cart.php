<?php
@session_start();


$orderedProductIDs = ["orderedProductIDs"];
$orderedProductQtys = ["orderedProductQtys"];

$i = 0;
    while($i<sizeof($orderedProductIDs)){
    $orderedProductIDs = $orderedProductIDs[$i];
    $orderedProductQtys = $orderedProductQtys[$i];
    echo "<p>ID: $orderedProductIDs and Qty: $orderedProductQtys</p>";
    $i++;
    }