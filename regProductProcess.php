<?php

include "connection.php";

$pname = $_POST["pname"];
$brand = $_POST["brand"];
$cat = $_POST["cat"];
$size = $_POST["size"];
$color = $_POST["color"];
$desc = $_POST["desc"];


if (empty($pname)) {
    echo ("Please enter the product name");
} elseif (strlen($pname) > 30) {
    echo("Your product name should be less than 30 characters");
} elseif ($brand == 0) {
    echo ("Please select brand");
} elseif ($cat == 0) {
    echo ("Please select category");
} elseif ($size == 0) {
    echo ("Please select size");
} elseif ($color == 0) {
    echo ("Please select color");
} elseif (empty($desc)) {
    echo ("Please select the Description");
}  elseif (strlen($desc) > 100) {
    echo("Your product description should be less than 100 characters");
} else {

    $rs = Database::search("SELECT * FROM `product` WHERE `name` = '" . $pname . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Product has been already registered!");
    } else {

        if (isset($_FILES["image"])) {

            $image = $_FILES["image"];

            $path = "Resources/productImg/" . uniqid() . ".png";
            move_uploaded_file($image["tmp_name"], $path);
        } else {
            echo ("Please select a product image.");
        }

        Database::iud("INSERT INTO `product`(`name`,`description`,`path`,`brand_id`,`color_color_id`,`category_id`,`size_size_id`)
            VALUES('$pname','$desc','$path','$brand','$color','$cat','$size')");

        echo ("Success");
    }
}
