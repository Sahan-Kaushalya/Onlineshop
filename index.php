<?php

include "connection.php";

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

<body onload="loadProduct(0);">
    <!-- Nav Bar -->
    <?php include "navBar.php"; ?>
    <!-- Nav Bar -->

    <!-- basic search -->
    <div class="container d-flex justify-content-end mt-5">
        <div class="col-3 mt-3">
            <input type="text" class="form-control" placeholder="Product Name" id="product" onkeyup="searchProduct(0);">
        </div>
        <button class="btn btn-outline-info col-1 ms-2 mt-3" onclick="viewFilter();">Filters</button>
    </div>
    <!-- basic search -->

    <!-- Advanced Search -->
    <div class="d-none" id="filterId">
        <div class="border border-light rounded-4 mt-4 p-5 col-10 offset-1">

            <div class="row col-12">
                <div class="row col-6 ms-auto">
                    <label class="form-label col-3">Color :</label>
                    <select id="color" class="form-select bg-dark col-9">
                        <option value="0">Select Color</option>
                        <?php
                        $rs = Database::search("SELECT * FROM `color`");
                        $num = $rs->num_rows;

                        for ($i=0; $i < $num; $i++) { 
                            $d = $rs->fetch_assoc();
                            ?>
                                <option value="<?php echo $d["color_id"]; ?>"><?php echo $d["color_name"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="row col-6 ms-auto">
                    <label class="form-label col-3">Category :</label>
                    <select id="cat" class="form-select bg-dark col-9">
                        <option value="0">Select Category</option>
                        <<?php
                        $rs2 = Database::search("SELECT * FROM `category`");
                        $num2 = $rs2->num_rows;

                        for ($x=0; $x < $num; $x++) { 
                            $d2 = $rs2->fetch_assoc();
                            ?>
                                <option value="<?php echo $d2["cat_id"]; ?>"><?php echo $d2["cat_name"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row col-12 mt-3 ">
                <div class="row col-6 ms-auto">
                    <label class="form-label col-3">Brand :</label>
                    <select id="brand" class="form-select bg-dark col-9">
                        <option value="0">Select Brand</option>
                        <<?php
                        $rs3 = Database::search("SELECT * FROM `brand`");
                        $num3 = $rs3->num_rows;

                        for ($p=0; $p < $num; $p++) { 
                            $d3 = $rs3->fetch_assoc();
                            ?>
                                <option value="<?php echo $d3["brand_id"]; ?>"><?php echo $d3["brand_name"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="row col-6 ms-auto">
                    <label class="form-label col-3">Size :</label>
                    <select id="size" class="form-select bg-dark col-9">
                        <option value="0">Select Size</option>
                        <<?php
                        $rs4 = Database::search("SELECT * FROM `size`");
                        $num4 = $rs4->num_rows;

                        for ($n=0; $n < $num; $n++) { 
                            $d4 = $rs4->fetch_assoc();
                            ?>
                                <option value="<?php echo $d4["size_id"]; ?>"><?php echo $d4["size_name"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="mt-4 row col-12 m-auto">
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="Min Price" id="min">
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="Max Price" id="max">
                </div>
                <button class="btn btn-outline-light col-2" onclick="advSearchProduct(0);">Search</button>
            </div>

        </div>
    </div>
    <!-- Advanced Search -->

    <!-- load product -->
    <div class="row col-10 offset-1" id="pid">


    </div>
    <!-- load product -->


    <!-- footer -->
    <div class="col-12 mt-3">
        <p class="text-center">&copy; 2024 Online Store.lk || All Right Reserved</p>
    </div>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>