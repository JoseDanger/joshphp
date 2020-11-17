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
    $orderedProductID = ["orderedProductIDs"];
    $orderedProductQty = ["orderedProductQtys"];
    if (in_array($productID, $orderedProductID)){
        $index = array_search($productID, $orderedProductID);
        $orderedProductQty[$index] + $qty;
        else
            //this situation only happens if there is none of the same product in our shopping cart
        array_push($orderedProductID, $productID); //add a new product into the array.
        array_push($orderedProductQty. $qty);
    }


}else{
    // if nothing in our shopping cart yet
    $orderedProductID = [];
    $orderedProductQty = [];
    array_push($orderedproductID, $productID);//append one at bottom of the array.
    array_push($orderedproductID, $qty);
}
//put the new ordered product lists back to session variable
$_SESSION["orderedProductIDs"] = $orderedProductID;
$_SESSION["orderedProductIDs"] = $orderedProductQty;

//Go back to previous page.
header( 'Location:' . $_SERVER['HTTP_REFERER']);

