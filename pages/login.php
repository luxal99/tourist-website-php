<?php
include "../config/config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $sql = "select * from user where username = '" . $_POST['username'] . "' and password= '" . $_POST['password'] . "'";
    $result = $conn->query($sql);
    header("Location: admin.php");

    setcookie('token', 'admin', time() + (86400 * 30), "/");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
        @import "../css/global.css";

        .form {
            -webkit-box-shadow: 10px 10px 39px -23px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 39px -23px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 39px -23px rgba(0, 0, 0, 0.75);
            padding: 5em 3em;
            margin-top: 10em;
        }

        .input-group {
            margin: 1em 0;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="assets/img/nis-grb-veliki1.png">
</head>
<body>
<form method="post">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm-4 form">
                <h1>Login</h1>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Username</span>
                    </div>
                    <input name="username" type="text" class="form-control">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Password</span>
                    </div>
                    <input name="password" type="password" class="form-control">
                </div>
                <button class="default-btn" style="margin-top: 1em;padding: .3em 0" type="submit">Login</button>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
</form>
</body>
</html>
