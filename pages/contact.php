<?php
include "../config/config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "INSERT INTO contact(full_name,email,message) values ('" . $_POST['fullName'] . "','" . $_POST['email'] . "','" . $_POST['message'] . "')";
    /** @var TYPE_NAME $conn */
    $conn->query($sql);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../css/contact.css">
    <title>Form</title>
</head>
<body>
<div class="footer">
    <div class="form">
        <div class="row">
            <div class="col-sm-7">
                <form method="post" id="contact">
                    <h1>Contact us</h1>
                    <div class="row">
                        <div style="padding-left: 0" class="col-6">
                            <input pattern="[A-Za-z]{3,}" name="fullName" type="text" placeholder="Daris"
                                   class="form-control"/>
                        </div>
                        <div style="padding-right: 0;" class="col-6">
                            <input name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="text"
                                   class="form-control" placeholder="someaddress@example.com"
                                   aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Location opinion</label>
                        <textarea name="message" class="form-control"
                                  placeholder="Comment"
                                  id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <div style="margin-top: 3em">
                        <button onclick="getValues()" type="button" class="default-btn"
                                style="width: 200px;padding: .3em 0" id="submitBtn">Send
                        </button>
                    </div>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                </form>
            </div>
            <div class="col-sm-5">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0LckGmdpuBK8tVlxlMBOBVphOJ3FKLTQ&callback=initMap&libraries=&v=weekly"
        async
></script>
<script>
    function initMap() {
        // The location of Uluru
        const uluru = {lat: 43.8795290, lng: 18.3543955};
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }
</script>
<script src="../js/form.js"></script>
</body>
</html>
