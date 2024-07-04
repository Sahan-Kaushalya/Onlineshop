<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {

    $rs = Database::search("SELECT * FROM `user` WHERE `id`='" . $user["id"] . "'");
    $d = $rs->fetch_assoc();
?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>Online Store</title>
    </head>

    <body>
        <!-- Nav Bar -->
        <?php include "navBar.php"; ?>
        <!-- Nav Bar -->

        <div class="adminBody">
            <div class="row container mt-5">
                <div class="col-4 d-flex justify-content-center flex-column">
                    <div class="d-flex justify-content-center">
                        <img src="<?php
                                    if (!empty($d["img_path"])) {
                                        echo $d["img_path"];
                                    } else {
                                        echo ("Resources\img\profile.png");
                                    }
                                    ?>" height="150px" id="i">
                    </div>

                    <div class="mt-3">
                        <label for="form-lable">Profile Image</label>
                        <input type="file" class="form-control mt-2" id="imageUploader">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-outline-warning col-12" onclick="uploadImg();">Upload</button>
                    </div>
                </div>

                <div class="col-8">
                    <h2 class="text-center">Profile Details</h2>

                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="form-lable">First Name</label>
                            <input type="text" class="form-control" value="<?php echo $d["fname"]; ?>" id="fname">
                        </div>
                        <div class="col-6">
                            <label for="form-lable">Last Name</label>
                            <input type="text" class="form-control" value="<?php echo $d["lname"]; ?>" id="lname">
                        </div>
                    </div>

                    <div class="mt-2">
                        <label for="form-lable">Email</label>
                        <input type="email" class="form-control" value="<?php echo $d["email"]; ?>" id="email">
                    </div>

                    <div class="mt-2">
                        <label for="form-lable">Mobile</label>
                        <input type="text" class="form-control" value="<?php echo $d["mobile"]; ?>" id="mobile">
                    </div>

                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="form-lable">Username</label>
                            <input type="text" class="form-control" value="<?php echo $d["username"]; ?>" disabled>
                        </div>
                        <div class="col-6">
                            <label for="form-lable">Password</label>
                            <input type="password" class="form-control" value="<?php echo $d["password"]; ?>" id="password">
                        </div>
                    </div>

                    <h5 class="mt-2">Shipping Address</h5>

                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="form-lable">No.</label>
                            <input type="text" class="form-control" id="no" value="<?php echo $d["no"]; ?>">
                        </div>
                        <div class="col-9">
                            <label for="form-lable">Line 01</label>
                            <input type="text" class="form-control" id="line1" value="<?php echo $d["line_1"]; ?>">
                        </div>
                    </div>

                    <div class="mt-2">
                        <label for="form-lable">Line 02</label>
                        <input type="text" class="form-control" id="line2" value="<?php echo $d["line_2"]; ?>">
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-outline-warning col-12" onclick="updateData();">Update</button>
                    </div>

                </div>
            </div>
        </div>

        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>
    </body>

    </html>

<?php
} else {
    header("location :signIn.php");
}

?>