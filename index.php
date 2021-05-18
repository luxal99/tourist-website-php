<?php
include "./config/config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "insert into tourist_info(first_name, last_name, email) values ('" . $_POST['firstName'] . "','" . $_POST['lastName'] . "','" . $_POST['email'] . "')";
    /** @var TYPE_NAME $conn */
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niš</title>
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
</head>

<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="assets/img/nis-grb-veliki1.png" width="50px"></a>
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
    <div class="text-center">
        <h1>Dobrodošli u Niš</h1>
        <p>Nadamo se da ćemo ispuniti sva Vaša očekivanja</p>
        <button onclick="location.href='#container'" class="default-btn">Više informacija</button>
    </div>
</div>
<div id="container" class="container main-container">
    <div class="row">
        <div class="col-sm">
            <h1 style="padding-top: 2em">Niška tvrđava</h1>
            <p>Niška tvrđava je gradsko utvrđenje u centru Niša na desnoj obali Nišave, koje ima kontinuitet od oko dva
                milenijuma konstantnog postojanja o čemu svedoče mnogobrojni arheološki nalazi.</p>
            <button class="default-btn">Više o tvrđavi</button>
        </div>
        <div class="col-sm">
            <img src="assets/img/article-37.jpg" class="img-fluid ">
        </div>
    </div>
    <div class="row" style="margin-top: 15em">
        <div class="col-sm">
            <img src="assets/img/119.jpg" class="img-fluid ">
        </div>
        <div class="col-sm text-right">
            <h1 style="padding-top: 2em">Ćele kula</h1>
            <p>Niška tvrđava je gradsko utvrđenje u centru Niša na desnoj obali Nišave, koje ima kontinuitet od oko dva
                milenijuma konstantnog postojanja o čemu svedoče mnogobrojni arheološki nalazi.</p>
            <button class="default-btn">Više o tvrđavi</button>
        </div>
    </div>
    <div class="facts">
        <h1>
            Zanimljive činjenice
        </h1>
        <ul>
            <li>Ime Niš potiče od Rimskog naziva <b>"Nais","Naissus"</b></li>
            <li>Otkrića na praistorijskom lokalitetu<b> Bubanj i Velika humska čuka</b> govore da je tu postojala
                naseobina u
                <b>periodu 5800—5500. godine pre naše ere</b>. Najstariji sloj pripada neolitu ili starčevačkoj
                kulturnoj
                grupi.Ovi lokaliteti pripadaju Bubanj Salkuca Krivodol kompleksu.
            </li>
            <li><b>Naziv grada</b>, najverovatnije, potiče iz doba kada su njime vladali <b>Kelti</b>. Prema najčešće
                navođenoj tezi o
                etimološkom poreklu imena grada, Nišu su ime dali Kelti, Navisos sa značenjem Vilin grad.[4]
            </li>
            <li>Prema istoričaru Edvardu Gibonu ("Decline and Fall of the Roman Empire" Vol. 2, XXV), u Medijani 364.
                godine carevi Valentinijan I i Valens podelili su Rimsko carstvo i potom vladali kao savladari
            </li>
            <li> Niš je bio jedno od sedišta turske vojne i civilne vlasti, a u najdužem periodu nalazio se u
                Smederevskom pašaluku.
            </li>
            <li><b>U prvoj polovini 18. veka je nastalo Kazandžijsko sokače, danas jedini očuvani deo stare niške
                    čaršije.</b>
            </li>
        </ul>
    </div>
    <div class="swiper-container mySwiper" style="margin-top: 10em">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/img/kazandzijsko-sokace-tinkers-alley-1170x521.jpg">
            </div>
            <div class="swiper-slide">
                <img src="assets/img/park-svetog-Save-u-Nisu.jpg">
            </div>
            <div class="swiper-slide">
                <img src="assets/img/Saborna_crkva_u_Nisu3.jpg">
            </div>
            <div class="swiper-slide">
                <img src="assets/img/1280x0_MEDIJANA-MOZAIK-VANJA-KESER-JV14.jpg">
            </div>
            <div class="swiper-slide">
                <img src="assets/img/Delta-Planet-Niš2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="assets/img/NisGradGmaps.jpg">
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="footer">
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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 2,
        spaceBetween: 50,
        loop: true
    });
</script>
</body>

</html>