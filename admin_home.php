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
    <?php
    include 'navbar.php';
    ?>


    <div class="owner_dashboard">
        <h1>
            ADMIN DASHBOARD
        </h1>
        <div class="tiles">
            <div class="tile">
                VIEW ALL SPACES
            </div>

            <div class="tile">
                AUTHORISATIONS
            </div>
        </div>
    </div>



    <?php

    include_once 'includes/dbh.inc.php';

    if (isset($_POST['sf_login'])) {

        $sf_email = $_POST['sf_email'];
        $sf_password = $_POST['sf_password'];

       
        if ($sf_email == 'admin@sparepark.com' && $sf_password == 'admin123'  ) {
            session_start();


            $_SESSION['login'] = true;
            $_SESSION['user_type'] = "admin";


            echo "<script>  window.location.href = 'space_finder_home.php' </script>";
        } else {
            print "<p> <span>Wrong username or password</span></p>";
        }
    }



    ?>



</head>