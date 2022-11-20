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
    <title>Spare Park</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

</head>

<body class="">




    <nav class="navbar" id="navbar">

        <div onclick="navOpenClose(event)" class="logo ">
            <img class="filter-green" src="images/big-parking-sign-svgrepo-com.svg" alt="">
        </div>
    
        <ul class="navitems" id="navitems">
            <li><a class="" href="#home">Home </a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#platforms">Platforms</a></li>
            <li><a href="#contactus">Contact Us </a></li>
        </ul>

        <i onclick="navOpenClose(event)" class="ham_burger fa fa-thin fa-bars"></i>
    
    </nav>




    <footer class="footer">
        <p> &copy 2022-2023 All rigths reserved spare park. Version 1.0.0</p>
    </footer>



</body>

</html>


<script src="index.js"></script>