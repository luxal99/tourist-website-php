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
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="../index.php"><img class="img-fluid" src="../assets/img/nis-grb-veliki1.png"
                                                     width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="cv.php">About me</a>
            <a class="nav-item nav-link" href="about-city.php">About city</a>
            <a class="nav-item nav-link" href="gallery.php">Gallery</a>
            <a class="nav-item nav-link" href="form.php">Contact</a>
        </div>
    </div>
</nav>

<div class="content">
    <h1>Gallery</h1>
    <div class="swiper-container swiper text-center" style="margin-top: 5em">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="../assets/img/18159172752_c86c813c16_b.jpg"
                     onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/sarajevo_bascarsija_radman_iric_1.jpg" onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/sarajevo.jpg" onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/Sarajevo-la-mia-citta.jpg" onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/Sarajevo_Kaisermoschee.jpeg" onclick="showBigPicture(event)">
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <h1 class="mt-4">Gallery</h1>

    <div class="swiper-container swiper text-center" style="margin-top: 5em">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="../assets/img/second-gallery/1.jpg" id="first-picture"
                     onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/second-gallery/2.jpg" id="first-picture"
                     onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/second-gallery/3.jpg" id="first-picture"
                     onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/second-gallery/4.jpg" id="first-picture"
                     onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/second-gallery/5.jpg" id="first-picture"
                     onclick="showBigPicture(event)">
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/second-gallery/6.jpg" id="first-picture"
                     onclick="showBigPicture(event)">
            </div>


        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

    let swiper = new Swiper(".swiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 2,
        spaceBetween: 50,
        loop: true
    });

</script>
<script>
    function showBigPicture($event) {
        location.href = `./big-picture.php?q=${$event.target.src}`;
    }
</script>
</body>
</html>
