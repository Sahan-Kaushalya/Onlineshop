<?php

include "connection.php";

$pname = $_POST["p"];
$qty = $_POST["q"];
$uprice = $_POST["up"];

// echo($pname);

if ($pname == 0) {
    echo ("Please select the product name");
} elseif (empty($qty)) {
    echo ("Please enter the product quantity");
} elseif (!is_numeric($qty)) {
    echo ("Only number can be entered for quantity");
} elseif (strlen($qty) > 10) {
    echo ("your quantity should be less than 10 characters.");
} elseif (empty($uprice)) {
    echo ("Please enter the product unit price");
} elseif (!is_numeric($uprice)) {
    echo ("Only number can be entered for quantity");
} elseif (strlen($qty) > 10) {
    echo ("your quantity should be less than 10 characters.");
} else {
    // echo("Success");

    $rs = Database::search("SELECT * FROM `stock` WHERE `product_id`='" . $pname . "' AND `price`='" . $uprice . "'");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if ($num == 1) {
        //Update Query
        $newQty =  $d["qty"] +  $qty;
        Database::iud("UPDATE `stock` SET `qty`='" . $newQty . "' WHERE `stock_id`='" . $d["stock_id"] . "'");
        echo("Stock Updated Successfully");
    } else {
        //Insert Query
        Database::iud("INSERT INTO `stock`(`price`,`qty`,`product_id`) 
         VALUES('" . $uprice . "','" . $qty . "','" . $pname . "')");
         echo("New Stock Added Successfully");
    }
}
