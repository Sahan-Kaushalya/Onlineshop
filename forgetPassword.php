<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Online Store - Forget Password</title>
</head>

<body class="signIn_Body">

    <!-- Forget Password Box -->
    <div class="signIn_Box" id="signIn_Box">

        <h2 class="text-center">Forget Password</h2>


        <div class="mt-4 mb-4">
            <label for="form-label">Email</label>
            <input type="text" class="form-control" id="email">
        </div>

        <div class="d-none" id="msgDiv2">
            <div class="alert alert-success" id="msg2"></div>
        </div>

        <div class="mt-4">
            <button class="btn btn-secondary col-12" onclick="forgetPassword();">Send Email</button>
        </div>
    </div>
    <!-- Forget Password Box -->

    <script src="script.js"></script>
</body>

</html>