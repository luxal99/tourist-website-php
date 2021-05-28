<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
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
    <link rel="icon" href="../assets/img/nis-grb-veliki1.png">
    <link rel="stylesheet" href="../css/gallery.css">
</head>
<body>
<?php
include "./navbar.php"
?>

<div class="content">
    <h1 class="huge-h1 text-center">Gallery</h1>
    <div class="row">
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/18159172752_c86c813c16_b.jpg"
                 onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4"><img class="gallery-img" src="../assets/img/sarajevo_bascarsija_radman_iric_1.jpg"
                                   onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/sarajevo.jpg" onclick="showBigPicture(event)">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/Sarajevo-la-mia-citta.jpg"
                 onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4"><img class="gallery-img" src="../assets/img/Sarajevo_Kaisermoschee.jpeg"
                                   onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/7.jpg" onclick=" showBigPicture(event)">
        </div>
    </div>
    <h1 class="mt-4 huge-h1 text-center">Gallery</h1>
    <div class="row">
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/gallery2/1.jpg"
                 onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/gallery2/2.jpg"
                 onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/gallery2/3.jpg"
                 onclick="showBigPicture(event)">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/gallery2/4.jpg"
                 onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/gallery2/5.png"
                 onclick="showBigPicture(event)">
        </div>
        <div class="col-sm-4">
            <img class="gallery-img" src="../assets/img/gallery2/6.jpg"
                 onclick="showBigPicture(event)">
        </div>
    </div>
</div>
<script>
    function showBigPicture($event) {
        location.href = `picture.php?q=${$event.target.src}`;
    }
</script>
</body>
</html>
