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

        <form class="reg_form_space_owner" action="" id="spaceOwnerForm">
            <h2 class="form_head">REGISTER AS <span id="spaceOwnertext">SPACE OWNER.</span> </h2>
            <input class="text_box" type="text" name="name" placeholder="First Name">
            <input class="text_box" type="text" name="name" placeholder="Last Name">
            <input class="text_box" type="text" name="name" placeholder="Email Id">
            <input class="text_box" type="text" name="name" placeholder="Phone Number">
            <input class="text_box" type="text" name="name" placeholder="Address">
            <input class="btn" type="submit" value="REGISTER AS OWNER">
        </form>

        <form class="reg_form_space_owner" action="" id="spaceFinderForm">
            <div class="basic_detail">
                <h2 class="form_head">REGSTER AS <span id="spaceFindertext">SPACE FINDER.</span> </h2>
                <input class="text_box" type="text" name="name" placeholder="First Name">
                <input class="text_box" type="text" name="name" placeholder="Last Name">
                <input class="text_box" type="text" name="name" placeholder="Email Id">
                <input class="text_box" type="text" name="name" placeholder="Phone Number">
                <!-- <input class="text_box" type="text" name="name" placeholder="Address"> -->
            </div>
            ADDRESS
            <div class="address">
                <input class="text_box" type="street" class="form-control" id="autocomplete" placeholder="Street">
                <input class="text_box" type="city" class="form-control" id="inputCity" placeholder="City">
                <input class="text_box" type="state" class="form-control" id="inputState" placeholder="State">
                <input class="text_box" type="zip" class="form-control" id="inputZip" placeholder="Zip">
                <input class="text_box" type="country" class="form-control" id="inputCountry" placeholder="Country">
            </div>



            <input class="btn" type="submit" value="REGISTER AS FINDER">
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