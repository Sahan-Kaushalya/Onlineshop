<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$password = $_POST["pw"];
$no = $_POST["no"];
$line1 = $_POST["l1"];
$line2 = $_POST["l2"];
// echo($no);

if (empty($fname)) {
    echo ("Please Enter Your First Name.");
} elseif (strlen($fname) > 20) {
    echo ("Your First Name should be less than 20 Characters.");
} elseif (empty($lname)) {
    echo ("Please Enter Your Last Name.");
} elseif (strlen($lname) > 20) {
    echo ("Your Last Name should be less than 20 Characters.");
} elseif (empty($email)) {
    echo ("Please Enter Your Email Address.");
} elseif (strlen($email) > 100) {
    echo ("Your Email Address should be less than 100 Characters.");
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Your Email Address in Invalid.");
} elseif (empty($mobile)) {
    echo ("Please Enter Your Mobile Number.");
} elseif (strlen($mobile) != 10) {
    echo ("Your Mobile Number must contain 10 Characters.");
} elseif (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile)) {
    echo ("Your Mobile Number in Invalid.");
} elseif (empty($password)) {
    echo ("Please Enter Your Password.");
} elseif (strlen($password) < 5 || strlen($password) > 45) {
    echo ("Your Password must contain 5 - 45 Characters.");
} elseif (empty($no)) {
    echo ("Please Enter Your Address No.");
} elseif (strlen($no) > 10) {
    echo ("Your Address No should be less than 10 Characters.");
} elseif (empty($line1)) {
    echo ("Please Enter Your Address line 01.");
} elseif (strlen($line1) > 50) {
    echo ("Your Address line 01 should be less than 50 Characters.");
} elseif (empty($line2)) {
    echo ("Please Enter Your Address line 02.");
} elseif (strlen($line1) > 50) {
    echo ("Your Address line 02 should be less than 50 Characters.");
} else {
    //Update Query

    Database::iud("UPDATE `user` SET `fname`='" . $fname . "', `lname`='" . $lname . "', `email`='" . $email . "',
    `mobile`='" . $mobile . "', `password`='" . $password . "', `no`='" . $no . "', `line_1`='" . $line1 . "', `line_2`='" . $line2 . "' 
    WHERE `id`='" . $user["id"] . "'");

    $rs = Database::search("SELECT * FROM `user` WHERE `id`='" . $user["id"] . "'");
    $d = $rs->fetch_assoc();
    $_SESSION["u"] = $d;

    echo ("Update Successfully");
}
