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

<body onload="onLoad()" class="">




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


    <div class="reg_form">
        <div class="user_groups">
            <button onclick="switchUser(event)" id="spaceFinder" value="spaceFinder" class="btn activeUser">SPACE FINDER.</button>
            <button onclick="switchUser(event)" id="spaceOwner" value="spaceOwner" class="btn">SPACE OWNER.</button>

        </div>
        <form class="reg_form_space_owner" action="">
            <input  class="text_box"  type="text" name="name" placeholder="fName">
            <input  class="text_box"  type="text" name="name" placeholder="lName">
            <input  class="text_box"  type="text" name="name" placeholder="emailId">
            <input  class="text_box"  type="text" name="name" placeholder="phoneNumber">
            <input  class="text_box"  type="text" name="name" placeholder="address">
            <input class="btn" type="submit" value="REGISTER">
        </form>
    </div>




    <footer class="footer">
        <p> &copy 2022-2023 All rigths reserved spare park. Version 1.0.0</p>
    </footer>



</body>

</html>


<script src="index.js"></script>