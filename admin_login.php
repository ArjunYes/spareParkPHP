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



        <form class="reg_form_space_owner" action="" id="spaceOwnerForm">
            <h2 class="form_head">LOGIN AS <span id="spaceOwnertext">ADMIN.</span> </h2>
            <input class="text_box" type="text" name="" placeholder="Username / email">
            <input class="text_box" type="text" placeholder="Password">
            <input class="btn full-width" type="submit" value="Login as admin">
        </form>

    </div>




</body>

</html>
<script type="text/javascript">

    function myFunction() {

        console.log("ONLOAD FUNCTION");
    }


</script>