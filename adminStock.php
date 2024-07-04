<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stock - Admin Panel</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <?php
        include "adminNavBar.php";
        ?>

        <div class="container-fluid" style="margin-top: 80px;">
            <div class="row">
                <div class="col-5 offset-1">

                    <h2 class="text-center">Product Registration</h2>

                    <div class="mb-3">
                        <label class="form-label" for="pname">Product Name</label>
                        <input type="text" class="form-control" id="pname">
                    </div>

                    <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label">Brand</label>
                            <select id="brand" class="form-select">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `brand`");
                                $num = $rs->num_rows;

                                for ($i = 0; $i < $num; $i++) {

                                    $data = $rs->fetch_assoc();

                                ?>
                                    <option value="<?php echo ($data["brand_id"]); ?>"><?php echo ($data["brand_name"]); ?></option>
                                <?php
                                }
                                ?>

                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label">Category</label>
                            <select id="cat" class="form-select">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `category`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();

                                ?>
                                    <option value="<?php echo ($data["cat_id"]); ?>"><?php echo ($data["cat_name"]); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label">Color</label>
                            <select id="color" class="form-select">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `color`");
                                $num = $rs->num_rows;

                                for ($m = 0; $m < $num; $m++) {

                                    $data = $rs->fetch_assoc();

                                ?>
                                    <option value="<?php echo ($data["color_id"]); ?>"><?php echo ($data["color_name"]); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label">Size</label>
                            <select id="size" class="form-select">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `size`");
                                $num = $rs->num_rows;

                                for ($n = 0; $n < $num; $n++) {

                                    $data = $rs->fetch_assoc();

                                ?>
                                    <option value="<?php echo ($data["size_id"]); ?>"><?php echo ($data["size_name"]); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea id="desc" class="form-control" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Image</label>
                        <input id="file" type="file" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-secondary" onclick="regProduct();">Register Product</button>
                    </div>

                </div>

                <!-- stock management -->

                <div class="col-5">

                    <h2 class="text-center">Stock Update</h2>

                    <div class="mt-3 col-10 offset-1">
                        <label class="form-label" for="">Product Name</label>
                        <select class="form-select" id="selectProduct">
                            <option value="0">Select</option>
                            <?php
                            $rs = Database::search("SELECT * FROM `product`");
                            $num = $rs->num_rows;

                            for ($i=0; $i < $num; $i++) { 
                                $d = $rs->fetch_assoc();

                                ?>
                                    <option value="<?php echo $d["id"]; ?>"><?php echo $d["name"]; ?></option>
                                <?php
                            }
                            
                            ?>
                            
                        </select>
                    </div>

                    <div class="mt-3 col-10 offset-1">
                        <label class="form-label" for="">Qty</label>
                        <input type="text" class="form-control" id="qty" required>
                    </div>

                    <div class="mt-3 col-10 offset-1">
                        <label for="" class="form-label">Unit Price</label>
                        <input type="text" class="form-control" id="uprice" required>
                    </div>

                    <div class="mt-2 offset-1 d-grid">
                        <button class="btn btn-secondary" onclick="updateStock();">Update Stock</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- footer -->
        <!-- <div class="fixed-bottom col-12">
            <p class="text-center">&copy; 2024 Online Store.lk || All Right Reserved</p>
        </div> -->
        <!-- footer -->

        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php

} else {
    echo ("You're not an admin.");
}

?>