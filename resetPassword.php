<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Online Store - Reset Password</title>
</head>
<body class="signIn_Body">
    <!-- Reset Password Box -->
    <div class="signIn_Box" id="signIn_Box">

        <h2 class="text-center">Reset Password</h2>

        <div class="d-none">
            <input type="hidden" id="vcode" value="<?php echo ($_GET["vcode"]); ?>">
        </div>

        <div class="mt-4">
            <label for="form-label">Password</label>
            <input type="text" class="form-control" id="np1">
        </div>

        <div class="mt-4 mb-4">
            <label for="form-label">Re-enter Paasword</label>
            <input type="text" class="form-control" id="np2">
        </div>

        <div class="d-none" id="msgDiv2">
            <div class="alert alert-danger" id="msg2"></div>
        </div>

        <div class="mt-4">
            <button class="btn btn-secondary col-12" onclick="resetPassword()">Update</button>
        </div>
    </div>
    <!-- Reset Password Box -->

    <script src="script.js"></script>
</body>
</html>