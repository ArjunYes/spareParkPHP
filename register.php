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

<body onload="myFunction()">


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


        This

        <i onclick="navOpenClose(event)" class="ham_burger fa fa-thin fa-bars"></i>

    </nav>


    <div class="reg_form">

        <div class="user_groups">
            <button onclick="switchUser(event)" id="spaceFinder" value="spaceFinder" class="btn activeUser">SPACE
                FINDER.</button>
            <button onclick="switchUser(event)" id="spaceOwner" value="spaceOwner" class="btn">SPACE OWNER.</button>

        </div>

        <form class="reg_form_space_owner" action="" id="spaceOwnerForm">
            <h2 class="form_head">LOGIN AS <span id="spaceOwnertext">SPACE OWNER.</span> </h2>
            <input class="text_box" type="text" name="name" placeholder="First Name">
            <input class="text_box" type="text" name="name" placeholder="Last Name">
            <input class="text_box" type="text" name="name" placeholder="Email Id">
            <input class="text_box" type="text" name="name" placeholder="Phone Number">
            <input class="text_box" type="text" name="name" placeholder="Address">
            <input class="btn" type="submit" value="REGISTER AS OWNER">
        </form>

        <form class="reg_form_space_owner" action="" id="spaceFinderForm">
            <h2 class="form_head">LOGIN AS <span id="spaceFindertext">SPACE FINDER.</span> </h2>
            <input class="text_box" type="text" name="name" placeholder="First Name">
            <input class="text_box" type="text" name="name" placeholder="Last Name">
            <input class="text_box" type="text" name="name" placeholder="Email Id">
            <input class="text_box" type="text" name="name" placeholder="Phone Number">
            <input class="text_box" type="text" name="name" placeholder="Address">
            <input class="btn" type="submit" value="REGISTER AS FINDER">
        </form>

    </div>




</body>

</html>
<script type="text/javascript">
    var userType = "1";
    const spaceOwnerForm = document.getElementById('spaceOwnerForm');
    const spaceFinderForm = document.getElementById('spaceFinderForm');
    function myFunction() {
        spaceOwnerForm.style.display = "none";
        spaceFinderForm.style.display = "block";
        console.log("ONLOAD FUNCTION", finderTextreg);
    }

    function switchUser(e) {
        e.preventDefault();
        userType = e.target.value === "spaceOwner" ? 1 : 0
        console.log("Swith user", e.target.value, userType);

        if (userType == 1) {
            spaceOwnerForm.style.display = "block";
            spaceFinderForm.style.display = "none";
        } else {
            spaceOwnerForm.style.display = "none";
            spaceFinderForm.style.display = "block";
        }
    }

</script>




<!-- <script src="index.js"></script> -->