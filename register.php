<?php
if (session_status() == PHP_SESSION_NONE) {
    // echo "console.log('Session start')";
    session_start();
    // $_SESSION["so_id"] = 1;
    // $_SESSION["user_type"] = "space_owner";
}

if (isset($_SESSION["so_id"])) {
    echo "console.log('Session so_id')";
    // session_destroy();
}
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

<body class="register" onload="myFunction()">

    <?php
    include 'navbar.php';


    ?>

    <div class="reg_form">

        <div class="user_groups">
            <button onclick="switchUser(event)" id="spaceFinder" value="spaceFinder" class="btn activeUser">SPACE
                FINDER.</button>
            <button onclick="switchUser(event)" id="spaceOwner" value="spaceOwner" class="btn ">SPACE OWNER.</button>
        </div>

        <form class="reg_form_space_owner" action="" id="spaceOwnerForm" method="POST">
            <div class="basic_detail">
                <h2 class="form_head2">REGISTER AS <span id="spaceOwnertext">SPACE OWNER.</span> </h2>
                <input class="text_box" type="text" name="so_first_name" placeholder="First Name">
                <input class="text_box" type="text" name="so_last_name" placeholder="Last Name">
                <input class="text_box" type="email" name="so_email" placeholder="Email Id">
                <input class="text_box" type="text" name="so_number" placeholder="Phone Number">
                <input class="text_box" type="password" name="so_password" placeholder="Password">
                <input class="text_box" type="password" name="so_re_password" placeholder="Re enter Password">
            </div>
            <p>ADDRESS</p>
            <div class="address">
                <input class="text_box" name="so_street" type="street" class="form-control" placeholder="Street">
                <input class="text_box" name="so_city" type="city" class="form-control" placeholder="City">
                <input class="text_box" name="so_state" type="state" class="form-control" placeholder="State">
                <input class="text_box" name="so_zip" type="zip" class="form-control" placeholder="Zip">
                <input class="text_box" name="so_country" type="country" class="form-control" placeholder="Country">
            </div>

            <input class="btn" type="submit" name="register_so" value="REGISTER AS OWNER">

            <?php

            include_once 'includes/dbh.inc.php';

            if (isset($_POST['register_so'])) {

                $so_fisrt_name = $_POST['so_first_name'];
                $so_last_name = $_POST['so_last_name'];
                $so_email = $_POST['so_email'];
                $so_number = $_POST['so_number'];
                $so_password = $_POST['so_password'];

                $so_street = $_POST['so_street'];
                $so_city = $_POST['so_city'];
                $so_state = $_POST['so_state'];
                $so_zip = $_POST['so_zip'];
                $so_country = $_POST['so_country'];





                $sql2 = "insert into `spacefinder` (`first_name`, `last_name`, `email_id`, `password`, `phone_number`, `street`, `state`, `city`, `zip`, `country`) 
                VALUES ('$so_fisrt_name', '$so_last_name', '$so_email', '$so_password', '$so_number', '$so_street', '$so_city', '$so_state', ' $so_zip', '$so_country')";


                // $sql2 = "INSERT INTO `spacefinder` (`first_name`, `last_name`, `email_id`, `password`, `phone_number`, `street`, `state`, `city`, `zip`, `country`) 
                // VALUES ('hdgh', 'dhgh', 'hdg', 'hdtr', 'hdfg', 'herth', 'herth', 'erth', 'ehrth', 'erth')";
            

                echo "<script> alert('$');console.log('$sql2') </script>";

                if (mysqli_query($conn, $sql2)) {
                    echo "RECORD INSERTED";
                    $message = "Successfully registerd, now please login with credentials";
                    echo "<script> alert('$message'); window.location.href = 'index.php' </script>";
                } else {
                    $message = "Sfasdddddddddddddddd";
                    echo "<script> alert('$message'); </script>";
                    echo "Error inserting";
                }

            }



            ?>

        </form>

        <form class="reg_form_space_owner" action="" id="spaceFinderForm" method="POST">
            <div class="basic_detail">
                <h2 class="form_head2">REGSTER AS <span id="spaceFindertext">SPACE FINDER.</span> </h2>
                <input class="text_box" type="text" name="sf_first_name" placeholder="First Name">
                <input class="text_box" type="text" name="sf_last_name" placeholder="Last Name">
                <input class="text_box" type="email" name="sf_email" placeholder="Email Id">
                <input class="text_box" type="text" name="sf_number" placeholder="Phone Number">
                <input class="text_box" type="password" name="sf_password" placeholder="Password">
                <input class="text_box" type="password" name="sf_re_password" placeholder="Re enter Password">
            </div>
            <p>ADDRESS</p>
            <div class="address">
                <input class="text_box" name="sf_street" type="street" class="form-control" id="autocomplete"
                    placeholder="Street">
                <input class="text_box" name="sf_city" type="city" class="form-control" id="inputCity"
                    placeholder="City">
                <input class="text_box" name="sf_state" type="state" class="form-control" id="inputState"
                    placeholder="State">
                <input class="text_box" name="sf_zip" type="zip" class="form-control" id="inputZip" placeholder="Zip">
                <input class="text_box" name="sf_country" type="country" class="form-control" id="inputCountry"
                    placeholder="Country">
            </div>

            <input class="btn center" type="submit" name="register_sf" value="REGISTER AS FINDER">

            <?php

            include_once 'includes/dbh.inc.php';

            if (isset($_POST['register_sf'])) {

                $sf_fisrt_name = $_POST['sf_first_name'];
                $sf_last_name = $_POST['sf_last_name'];
                $sf_email = $_POST['sf_email'];
                $sf_number = $_POST['sf_number'];
                $sf_password = $_POST['sf_password'];

                $sf_street = $_POST['sf_street'];
                $sf_city = $_POST['sf_city'];
                $sf_state = $_POST['sf_state'];
                $sf_zip = $_POST['sf_zip'];
                $sf_country = $_POST['sf_country'];


                $sql = "insert into `spaceowner` (`first_name`, `last_name`, `email_id`, `password`, `phone_number`, `street`, `state`, `city`, `zip`, `country`) 
                VALUES ('$sf_fisrt_name', '$sf_last_name', '$sf_email', '$sf_password', '$sf_number', '$sf_street', '$sf_city', '$sf_state', ' $sf_zip', '$sf_country')";


                if (mysqli_query($conn, $sql)) {
                    echo "RECORD INSERTED";
                    $message = "Successfully registerd, now please login with credentials";
                    echo "<script> alert('$message'); window.location.href = 'index.php' </script>";
                } else {
                    echo "Error inserting";
                }

            }



            ?>


        </form>
    </div>




</body>

</html>
<script type="text/javascript">
    var userType = "1";
    const spaceOwnerForm = document.getElementById('spaceOwnerForm');
    const spaceFinderForm = document.getElementById('spaceFinderForm');

    const finder = document.getElementById('spaceFinder');
    const owner = document.getElementById('spaceOwner');
    function myFunction() {
        spaceOwnerForm.style.display = "none";
        spaceFinderForm.style.display = "block";
        // console.log("ONLOAD FUNCTION", finderTextreg);
    }

    function switchUser(e) {
        e.preventDefault();
        userType = e.target.value === "spaceOwner" ? 1 : 0
        // console.log("Swith user", e.target.value, userType);

        if (userType == 1) {
            // console.log("First")
            spaceOwnerForm.style.display = "block";
            spaceFinderForm.style.display = "none";
            owner.classList.add("activeUser");
            finder.classList.remove("activeUser");
        } else {
            finder.classList.add("activeUser");
            owner.classList.remove("activeUser");
            spaceOwnerForm.style.display = "none";
            spaceFinderForm.style.display = "block";
        }
    }

</script>




<!-- <script src="index.js"></script> -->