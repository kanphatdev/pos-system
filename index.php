<?php
session_start();
if (isset($_SESSION['user_id'])) {
  header('login.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .welcome-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .welcome-heading {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .welcome-text {
        font-size: 1.5rem;
        text-align: center;
        color: #6c757d;
        margin-bottom: 40px;
    }

    .btn-get-started {
        padding: 10px 20px;
        font-size: 1.2rem;
        margin-right: 10px;
    }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1 class="welcome-heading">Welcome to Our Website</h1>
        <p class="welcome-text">
            We're thrilled to have you here! Explore our awesome features and services.
        </p>
        <div>
            <a href="login.php" class="btn btn-primary btn-get-started">Login</a>
            <a href="register.php" class="btn btn-secondary btn-get-started">Register</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>