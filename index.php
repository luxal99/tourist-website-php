<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarajevo</title>
    <link rel="stylesheet" href="css/index.css">
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
    <link rel="stylesheet" href="css/global.css">
</head>

<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><h1>S</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="pages/cv.php">About me</a>
                <a class="nav-item nav-link" href="pages/about-city.php">About city</a>
                <a class="nav-item nav-link" href="pages/gallery.php">Gallery</a>
                <a class="nav-item nav-link" href="pages/form.php">Leave a message</a>
                <a class="nav-item nav-link disabled" href="pages/login.php">Login</a>
            </div>
        </div>
    </nav>
    <div class=" header-card">
        <div class="row">
            <div class="col-6 txt-col">
                <h1>Sarajevo</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived </p>
                <button class="default-btn">More</button>
            </div>
            <div class="col-6 background-column"></div>
        </div>
    </div>
</div>
<div class="content">
    <div class="custom-container">
        <div class="row text-center">
            <div class="col-2">
                <h5 class="silver">Lorem ipsum</h5>
            </div>
            <div class="col-2">
                <h5 class="silver">Lorem ipsum</h5>
            </div>
            <div class="col-2">
                <h5 class="silver">Lorem ipsum</h5>
            </div>
            <div class="col-2">
                <h5 class="silver">Lorem ipsum</h5>
            </div>
            <div class="col-2">
                <h5 class="silver">Lorem ipsum</h5>
            </div>
            <div class="col-2">
                <h5 class="silver">Lorem ipsum</h5>
            </div>
        </div>
        <div class="row miljacka-row">
            <div class="col-sm">
                <img class="img-fluid" src="assets/img/18159172752_c86c813c16_b.jpg">
            </div>
            <div class="col-sm right-col">
                <h1>Sarajevo</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived </p>
                <button class="default-btn">More</button>
            </div>
        </div>
        <div class="row miljacka-row">
            <div class="col-sm small-card-col ">
                <h1>Sarajevo</h1>
                <div class="small-card">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="small-card">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="small-card">
                    <h4>Lorem ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-sm">
                <img class="img-fluid" src="assets/img/18159172752_c86c813c16_b.jpg">
            </div>
        </div>
        <div class="swiper-div">
            <h1 class="text-right g-h1">Gallery</h1>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/img/Sarajevo-la-mia-citta.jpg" id="first-picture"
                             onclick="showBigPicture(event)">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/18159172752_c86c813c16_b.jpg" onclick="showBigPicture(event)">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/sarajevo_bascarsija_radman_iric_1.jpg" onclick="showBigPicture(event)">
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="footer">
        <h1>Contact us</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s</p>
        <button class="default-btn">Go to form</button>
    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 3,
        spaceBetween: 50,
        loop: true
    });

    function showBigPicture($event) {
        location.href = `pages/big-picture.php?q=${$event.target.src}`;

    }
</script>
</body>

</html>
