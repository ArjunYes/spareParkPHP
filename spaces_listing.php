<?php
include_once 'includes/dbh.inc.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaces Listing</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar">
        <div class="logo ">
            <img class="filter-green" src="images/big-parking-sign-svgrepo-com.svg" alt="">
        </div>
        <ul class="navitems">
            <li><a class="" href="#home">Home </a></li>
            <li><a class="" href="#home">Spaces </a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#platforms">Platforms</a></li>
            <li><a href="#contactus">Contact Us </a></li>
        </ul>
    </nav>

    <div class="space_listing">
        <div class="single_space">
            <div class="image">
                <img src="images/10172815_8399 (1).jpg" alt="image_park">
                <h3>SPACE AT</h3>
                <p>Location : E138QR</p>
                <p>Check at gmaps</p>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>Price :11$/ph</p> 
                <button class="btn">VIEW DETIALS</button>
            </div>
        </div>
    </div>


</body>

</html>


<script src="index.js"></script>


<?php




?>