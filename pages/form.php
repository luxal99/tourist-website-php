<?php
include "../config/config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "insert into tourist_info(first_name, last_name, email) values ('" . $_POST['firstName'] . "','" . $_POST['lastName'] . "','" . $_POST['email'] . "')";
    /** @var TYPE_NAME $conn */
    if ($conn->query($sql) === TRUE) {
        $select_last = "select MAX(id) from tourist_info";
        $result = $conn->query($select_last);
        $row = $result->fetch_assoc();

        echo $row[0];

    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../assets/img/nis-grb-veliki1.png">
    <title>Form</title>
</head>
<body>
<div class="footer">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="../index.php"><img class="img-fluid" src="../assets/img/nis-grb-veliki1.png"
                                                         width="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="pages/cv.php">About me</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="white">Nas zanima Vaše mišljenje</h1>
        <p class="white">Ukoliko si posetio naš grad, ostavi komentar bio on pozitivan ili loš. Takođe možeš oceniti i
            naš sajt kako
            bi znali da li smo na pravilan način predstavili grad Niš</p>
        <div class="form">
            <form method="post">
                <h3>Kontakt forma</h3>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Ime</span>
                    </div>
                    <input name="firstName" type="text" placeholder="Marko" class="form-control">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Prezime</span>
                    </div>
                    <input name="lastName" type="text" placeholder="Jankovic" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input name="email" type="text" class="form-control" placeholder="mail@example.com"
                           aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div style="margin-top: 3em">
                    <button type="submit" class="default-btn" style="width: 200px;padding: .3em 0">Pošalji</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
