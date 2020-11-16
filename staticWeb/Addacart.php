<?php
//take the post from any product
$productID = $_POST["productID"];
$qty = $_POST["qty"];
//1. Start a session
@session_start();
//2. get all set session variables
// if i dont have an ordered product list in my session, i will create one.
if (isset($_SESSION["orderedProductIDs"])){
    //if something has been added to our shopping cart
    $orderedProductIDs = ["orderedProductIDs"];
    $orderedProductQtys = ["orderedProductQtys"];
    if (in_array($productID, $orderedProductIDs)){
        $index = array_search($productID, $orderedProductIDs);
        $orderedProductQtys[$index] + $qty;
        else
            //this situation only happens if there is none of the same product in our shopping cart
        array_push($orderedProductIDs, $productID); //add a new product into the array.
        array_push($orderedProductQtys. $qty);
    }


}else{
    // if nothing in our shopping cart yet
    $orderedProductIDs = [];
    $orderedProductQtys = [];
    array_push($orderedproductIDs, $productID);//append one at bottom of the array.
    array_push($orderedproductIDs, $qty);
}
//put the new ordered product lists back to session variable
$_SESSION["orderedProductIDs"] = $orderedProductIDs;
$_SESSION["orderedProductIDs"] = $orderedProductQtys;

