<?php
include "../config/config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "insert into tourist_info(first_name, last_name, email) values ('" . $_POST['firstName'] . "','" . $_POST['lastName'] . "','" . $_POST['email'] . "')";
    /** @var TYPE_NAME $conn */
    if ($conn->query($sql) === TRUE) {

        $select_last = "select MAX(id) as 'id' from tourist_info;";
        $result = $conn->query($select_last);
        $row = $result->fetch_assoc();
        $opinion_sql = "insert into opinions(id_tourist,website_opinion,location_opinion) VALUES ('" . $row["id"] . "','" . $_POST["websiteOpinion"] . "','" . $_POST["locationOpinion"] . "')";

        $conn->query($opinion_sql);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                <a class="nav-item nav-link" href="../pages/cv.php">About me</a>
                <a class="nav-item nav-link" href="#">Leave a message</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="white">We would love to hear your opinion</h1>
        <p class="white">If you have visited our city, leave a comment whether it is positive or bad. You can also rate
            our site how
            they would know if we presented the city of Nis in the right way</p>
        <div class="form">
            <form method="post" id="opinionForm">
                <h3>Contact form</h3>
                <div class="row">
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">First name</span>
                            </div>
                            <input pattern="[A-Za-z]{3,}" name="firstName" type="text" placeholder="Marko"
                                   class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Last name</span>
                            </div>
                            <input name="lastName" pattern="[A-Za-z]{3,}" type="text" placeholder="Jankovic"
                                   class="form-control">
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="text"
                           class="form-control" placeholder="mail@example.com"
                           aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Location opinion</label>
                    <textarea name="locationOpinion" class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea2">Website opinion</label>
                    <textarea class="form-control" name="websiteOpinion" id="exampleFormControlTextarea2"
                              rows="3"></textarea>
                </div>
                <div style="margin-top: 3em">
                    <button onclick="getValues()" type="button" data-toggle="modal" data-target="#exampleModal"
                            class="default-btn" style="width: 200px;padding: .3em 0" id="modalBtn">Send
                    </button>
                </div>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you shure?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>First and last name: <b id="firstAndLastName"></b></h5>
                                <h5>Email: <b id="email"></b></h5>
                                <h5>Location opinion: <b id="locationOpinion"></b></h5>
                                <h5>Website opinion: <b id="websiteOpinion"></b></h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="default-btn" onclick="sendData()">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/form.js">

</script>
</body>
</html>
