<?php
include 'includes/check_session_so.php';
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
    <?php
    include 'navbar.php';
    ?>


    <div class="owner_dashboard">
        <h1>
            OWNER DASHBOARD
        </h1>
        <div class="tiles">
            <div onclick="window.location.href = '/spareParkPHP/register.php'" class="tile hover">
                VIEW ALL OWNED SPACES
            </div>
            <div onclick="window.location.href = '/spareParkPHP/Add_parking_space.php'" class="tile hover">
                POST A NEW SPACE
            </div>
            <div onclick="window.location.href = '/spareParkPHP/spaces_listing.php'" class="tile hover ">
                <p> VIEW ALL SPACES </p>
            </div>
        </div>
    </div>


</head>

middlesbrough