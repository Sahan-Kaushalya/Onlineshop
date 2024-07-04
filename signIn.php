<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Online Store</title>
</head>

<body class="signIn_Body">

    <!-- Sign In Box -->
    <div class="signIn_Box" id="signIn_Box">

        <h2 class="text-center">Sign In</h2>

        <?php
        
        $username = "";
        $password = "";

        if (isset($_COOKIE["username"])) {
            $username = $_COOKIE["username"];
        }

        if (isset($_COOKIE["password"])) {
            $password = $_COOKIE["password"];
        }
        
        ?>

        <div class="mt-2">
            <label for="form-label">Username:</label>
            <input type="text" class="form-control" id="un" value="<?php echo $username ?>">
        </div>

        <div class="mt-2">
            <label for="form-label">Password:</label>
            <input type="password" class="form-control" id="pw" value="<?php echo $password ?>">
        </div>

        <div class="mt-2 mb-2">
            <input type="checkbox" class="form-chech-input" id="rm">
            <label for="form-label">Remember me</label>
        </div>

        <div class="d-none" id="msgDiv2">
            <div class="alert alert-danger" id="msg2"></div>
        </div>

        <div class="mt-2">
            <button class="btn btn-secondary col-12" onclick="SignIn();">Sign In</button>
        </div>
        <div class="mt-2">
            <a href="forgetPassword.php">
            <button class="btn btn-outline-info btn-sm col-12">Forget Password?</button>
            </a>
        </div>
        <div class="mt-2">
            <button class="btn btn-outline-secondary col-12" onclick="changeView();">New to Online Store? Please Sign Up</button>
        </div>
    </div>
    <!-- Sign In Box -->

    <!-- Sign Up Box -->
    <div class="signUp_Box d-none" id="signUp_Box">
        <h2 class="text-center">Sign Up</h2>

        <div class="row">
            <div class="mt-3 col-6">
                <label for="from-label">First Name</label>
                <input type="text" class="form-control" id="fname">
            </div>

            <div class="mt-3 col-6">
                <label for="from-label">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div>
        </div>

        <div class="mt-3">
            <label for="from-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>

        <div class="mt-3">
            <label for="from-label">Mobile</label>
            <input type="text" class="form-control" id="mobile">
        </div>

        <div class="mt-3">
            <label for="from-label">Username</label>
            <input type="text" class="form-control" id="username">
        </div>

        <div class="mt-3 mb-3">
            <label for="from-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>

        <div class=" d-none" id="msgDiv1">
            <div class="alert alert-danger" id="msg1"></div>
        </div>

        <div class="mt-2">
            <button class="btn btn-secondary col-12" onclick="signUp();">Sign Up</button>
        </div>

        <div class="mt-2">
            <button class="btn btn-outline-secondary col-12" onclick="changeView();">Already Have an Account? Sign In</button>
        </div>

    </div>
    <!-- Sign Up Box -->

    <script src="script.js"></script>
</body>

</html>