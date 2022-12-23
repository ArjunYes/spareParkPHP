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

<body class="register">


    <?php
    include 'navbar.php';
    ?>


    <div class="reg_form">



        <form class="reg_form_space_owner" action="">
            <h2 class="form_head">ADD A <span id="spaceFindertext">NEW SPACE.</span> </h2>
            <p class="margin">Please fill in the detials for the new space</p>
            <input class="text_box" type="text" name="name" placeholder="Space Name">
            <input class="text_box" type="number" name="name" placeholder="Price per hour">
            <input class="text_box" type="image" name="name" placeholder="Phone Number">

            <div class="address">
                <input class="text_box" name="so_street" type="street" class="form-control" placeholder="Street">
                <input class="text_box" name="so_city" type="city" class="form-control" placeholder="City">
                <input class="text_box" name="so_state" type="state" class="form-control" placeholder="State">
                <input class="text_box" name="so_zip" type="zip" class="form-control" placeholder="Zip">
                <input class="text_box" name="so_country" type="country" class="form-control" placeholder="Country">
                <input class="text_box" name="so_country" type="country" class="form-control" placeholder="Gmap Link">
            </div>


            <input class="btn" type="submit" value="ADD NEW SPACE">
        </form>

    </div>




</body>

</html>
<script type="text/javascript">

</script>




<!-- <script src="index.js"></script> -->