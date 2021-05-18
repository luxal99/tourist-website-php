<?php
include "../config/config.php";
if (!$_COOKIE['token']) {
    header("Location: login.php");
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
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../assets/img/nis-grb-veliki1.png">
    <title>Admin</title>

    <style>
    </style>
</head>
<body>
<div class="container">
    <?php
    $result = $conn->query("select opinions.id, ti.first_name, ti.last_name, ti.email, location_opinion, website_opinion,created_date from opinions join tourist_info ti on ti.id = opinions.id_tourist ");

    while ($row = $result->fetch_assoc()) {
        echo "<div class='opinion-card'>
          <div class='row'>
          <div class='col-sm'>
            <h1>" . $row["first_name"] . " " . $row["last_name"] . "</h1>
</div>
          <div class='col-sm text-right'>
          <h6><b>" . $row["created_date"] . "</b></h6>
</div>
</div>
            <h5><b>Location opionion</b></h5>
                   <p>" . $row["location_opinion"] . "</p>
                     <h5><b>Website opionion</b></h5>
                   <p>" . $row["website_opinion"] . "</p>
                </div>";
    }

    ?>

</div>
</body>
</html>
