<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../css/history.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../assets/img/nis-grb-veliki1.png">
    <title>About City</title>
</head>
<body>
<div class="header">
    <?php
    include './navbar.php'
    ?>
    <div class="text-center">
        <h1 class="header-h1">History of Sarajevo</h1>
        <p>Get information about history of Sarajevo</p>
        <button onclick="location.href='#container'" class="secondary-btn">More information</button>
    </div>
</div>
<div class="container" id="container">
    <div class="card">
        <h1>About city</h1>
        <div class="divider"></div>
        <p>Sarajevo is the capital city and largest city of Bosnia and Hercegovina.Sarajevo is the political, financial,
            social and cultural center of Bosnia and Herzegovina and a prominent center of culture in the Balkans, with
            region-wide influence in entertainment, media, fashion and the arts.The name Sarajevo derives from the
            Turkish
            noun saray, meaning "palace" or "mansion" (from Persian sarāy, سرای, of the same meaning); academia is split
            on
            the origin of the evo attached to the end. In Slavic languages, the addition of "evo" may indicate a
            posessive
            noun, thereby making the name of Sarajevo, 'city of the palace."</p>
    </div>
    <div class="card">
        <h1>History during years</h1>
        <div class="divider"></div>
        <p><b>1914</b>: Assassination of Austro-Hungarian Empire’s Archduke Franz Ferdinand sparks World War I. <br><br>

            <b>1918</b>: Austro-Hungarian Empire collapses. Bosnia-Herzegovina becomes a part of the Kingdom of Serbs,
            Croats
            and Slovenes, later known as the Kingdom of Yugoslavia.<br><br>

            <b>1939-1945</b>: World War II. Nazis occupy Sarajevo, then place it under control of pro-Hitler Croatian
            fascists,
            who send thousands of Serbs, Jews and Roma (then commonly called Gypsies) to death camps. The city’s Jewish
            population, once near 10,000, falls to less than 1,000.<br><br>

            <b>1945</b>: Liberated by partisans led by Marshal Josip Broz Tito, Sarajevo and Bosnia-Herzegovina become
            part of
            the Socialist Federal Republic of Yugoslavia.<br><br>

            <b>1984</b>: Sarajevo hosts Winter Olympics.<br><br>

            <b>1992</b>: As Yugoslavia crumbles, Bosnian Muslims and Bosnian Croats (mostly Catholic) vote for
            Bosnia-Herzegovina independence. But Bosnian Serbs, mostly Orthodox and backed by Serbia, want Sarajevo and
            other Bosnian territories to be part of a greater Serbia.<br><br>

            <b>1992</b>: Bosnian Serbs besiege Sarajevo, ignoring U.N. protests.<br><br>

            <b>1995</b>: Dayton Accords end the siege and war by creating a many-layered government that includes a
            federation
            of Bosnian Muslims and Bosnian Croats that shares power with a republic of Bosnian Serbs. Most of Sarajevo’s
            territory and more than 90% of its residents fall within the federation of Bosnian Muslims and Croats.</p>
    </div>
    <div class="card">
        <h1>Ottoman Era</h1>
        <div class="divider"></div>
        <p>Sarajevo as it is known today was founded by the Ottoman Empire in the 1450s upon conquering the region, with
            1461 typically used as the city's founding date. The first known Ottoman governor of Bosnia, Isa-Beg
            Ishaković, chose the tiny local village of Brodac as a good space for a new city. He exchanged land with its
            residents, giving them today's Hrasnica neighborhood in Ilidža), and soon began building his provincial
            capital as he envisioned it. He quickly built a number of key objects, including a mosque, a closed
            marketplace, a public bath, a bridge, a hostel, and the governor's castle ("Saray") which gave the city its
            present name <br><br>

            The late Ottoman era, from 1697 to 1878, saw the decline of the empire, the city, and a number of disasters
            The beginning of the late Ottoman era in Sarajevo's history begins with the end of the Austro-Ottoman War.
            Following the failure at the Battle of Vienna in 1683, the western reaches of the empire were subject to
            numerous raids. It was the raid of 1697.
            If the city was no longer what it used to be structure wise, its intellectualism didn't suffer the
            slightest. In fact, the 18th century held many of Sarajevo's great thinkers, such as Mehmed Mejlija Guranij
            and Mula Mustafa Bašeskija. Significant libraries, schools, and mosques were built, as well as significant
            new fortifications.
        </p>
    </div>
    <?php
    include "./contact.php"

    ?>
</div>

</body>
</html>
