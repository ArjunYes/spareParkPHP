<style>

</style>

<?php
$space_id = $_GET['space_id'];
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
    <title>Single space</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    include 'navbar.php';
    ?>



    <div class="space_info">


        <?php
        include_once 'includes/dbh.inc.php';

        $sql = "SELECT * FROM `space` WHERE space_id = $space_id";
        $result = mysqli_query($conn, $sql);



        if (mysqli_num_rows($result) > 0) {


            while ($row = mysqli_fetch_assoc($result)) {

                $gmap_link = $row['gmap_link'];
                $per_hour = $row['per_hour'];
                $space_name = $row['space_name'];
                $image = $row['gmap_link'];
                $street = $row['gmap_link'];
                $state = $row['gmap_link'];
                $zip = $row['gmap_link'];
                $country = $row['gmap_link'];
                $gmap_link = $row['gmap_link'];
                $so_id = $row['gmap_link'];
                $area = $row['gmap_link'];
                $about = $row['gmap_link'];
                // $so_id = $row['gmap_link'];
              


            }







        } else {
            echo "No database available";
        }



        ?>

    </div>




    <!-- <div class="space_image">
            <img src="images/10172815_8399 (1).jpg" alt="">
            <button class="nav_btn nav_left"><i class="fa-solid fa-arrow-left-long"></i> </button>
            <button class="nav_btn nav_right"><i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
        <div class="space_detail">
            <h1 class="space_title detail_margin">CRYSTAL AURAS</h1>
            
            <p class="detail_margin">Location : E138QR</p>
            <p onclick="window.location.href = 'https://www.google.com/maps/place/Covent+Garden,+London/@51.5121138,-0.1283617,16z/data=!3m1!4b1!4m5!3m4!1s0x487604cb878e81b3:0x91f10fa364452046!8m2!3d51.5116538!4d-0.1240468'"
                class="detail_margin gmaps"><i class="fa fa-thin fa-location-dot"></i> Check at gmaps </p>

            <div class="detail_margin star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus officia, incidunt quas
                voluptatibus velit, at aliquam magni modi possimus, optio maxime eum quisquam tempora explicabo tempore
                odit autem eveniet molestias?</p>
            <button class="btn_new extra_pad">CHECK AVAILABILITY & BOOK SPACE</button>
        </div> -->

</body>

</html>


<script src="index.js"></script>


<?php




?>