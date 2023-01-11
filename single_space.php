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







        <div class="space_image">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM `space` WHERE space_id = $space_id";
            $result = mysqli_query($conn, $sql);



            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $gmap_link = $row['gmap_link'];
                    $per_hour = $row['per_hour'];
                    $space_name = $row['space_name'];
                    $image = $row['image'];
                    $street = $row['street'];
                    $state = $row['state'];
                    $zip = $row['zip'];
                    $country = $row['country'];
                    $gmap_link = $row['gmap_link'];
                    $so_id = $row['so_id'];
                    $area = $row['area'];
                    $about = $row['about'];
                    // $so_id = $row['gmap_link'];
            
                }

            } else {
                echo "No database available";
            }



            ?>

            <?php echo " <img src='uploads/$image' alt=''> "; ?>
            <!-- <button class="nav_btn nav_left"><i class="fa-solid fa-arrow-left-long"></i> </button> -->
            <!-- <button class="nav_btn nav_right"><i class="fa-solid fa-arrow-right-long"></i></button> -->
        </div>
        <div class="space_detail">
            <h1 class="space_title detail_margin">
                <?php echo "$space_name" ?>
            </h1>

            <p class="detail_margin">Location :<?php echo "$zip" ?></p>
            <p class="detail_margin">Street :<?php echo "$street" ?></p>
            <p class="detail_margin">State :<?php echo "$state" ?></p>
            <p class="detail_margin">Country :<?php echo "$country" ?></p>
            <p class="detail_margin">Price per hour :<?php echo "$ $per_hour/h" ?></p>
            <p class="detail_margin">Area :<?php echo "$area sqft" ?></p>
            <?php
            echo "<p class='detail_margin gmaps' href='$gmap_link' target='_blank'><i class='fa fa-thin fa-location-dot'></i> Click here to visit gmap location</p>";
            ?>


            <div class="detail_margin star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p class="desc">
                <?php echo "$about" ?>
            </p>
            <!-- <button class="btn_new extra_pad">CHECK AVAILABILITY & BOOK SPACE</button> -->
            <?php
            echo "     <button onclick=\"window.location.href= '/spareParkPHP/no_of_days.php?space_id=$space_id'\"
     class='btn_new extra_pad'>VIEW DETIALS</button> ";
            ?>


        </div>
    </div>






</body>

</html>


<script src="index.js"></script>


<?php




?>