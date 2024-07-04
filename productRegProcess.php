<?php

include "connection.php";

$pname = $_POST['pname'];
$brand = $_POST['brand'];
$desc = $_POST['desc'];
$cat = $_POST['cat'];
$size = $_POST['size'];
$color = $_POST['color'];
$desc = $_POST['desc'];


if (empty($pname)) {
    echo ("Please enter the product name");
} else if (strlen($pname) > 30) {
    echo ("Maximum product name characters should be 30");
} else if (strlen($desc) > 600) {
    echo ("Produc Description should contain less than 600 characters");
} else if ($brand == 0) {
    echo ("Please select a brand");
} else if ($cat == 0) {
    echo ("Please select a category");
} else if ($size == 0) {
    echo ("Please select a size");
} else if ($color == 0) {
    echo ("Please enter the description");
} else {

    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];

        $imageExtension;

        // if($image['type'] == 'image/png'){
        //     $imageExtension = ".png";
        // } else if($image['type'] == 'image/jpg'){
        //     $imageExtension = ".jpg";
        // }

        $path = "Resources/img/Productimg" . uniqid() . ".jpg";
        move_uploaded_file($image["tmp_name"], $path);

        $rs = Database::search("SELECT * FROM `product` WHERE `name` = '".$pname."'");
        $num = $rs->num_rows;

        if($num > 0) {
            echo ("Product has been already registered!");
        } else {

            Database::iud("INSERT INTO `product`(`name`, `description`, `path`, `brand_id`, `color_id`, `category_id`, `size_id`) VALUES ('".$pname."', '".$desc."', '".$path."', '$brand', '$color', '$cat', '$size')");

        }

    } else {
        echo ("Please select a product image");
    }


}
