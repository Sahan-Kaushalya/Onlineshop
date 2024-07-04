<?php

session_start();

if (isset($_SESSION["a"])) {

?>

    <!-- Load Page -->
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>Online Store - Admin Dashboard</title>
    </head>

    <body class="adminBody" onload="loadChart();">

        <!-- nav Bar -->
        <?php include "adminNavBar.php"; ?>
        <!-- nav Bar -->

        <!-- Chart -->
        <div style="width: 600px;">
            <h2 class="text-center">Most Sold Product</h2>
            <canvas id="myChart"></canvas>
        </div>
        <!-- Chart -->

        <!-- footer -->
        <div class="fixed-bottom col-12">
            <p class="text-center">&copy; 2024 Online Store.lk || All Right Reserved</p>
        </div>
        <!-- footer -->


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>
    </body>

    </html>

<?php
} else {
    echo ("You are not a Valid Admin.");
}


?>