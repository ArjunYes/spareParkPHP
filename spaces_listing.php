<style>
    .form {
        width: 100%;
    }

    .header {
        margin: 30px;
    }

    .inp_box {
        padding: 10px;
        width: 100%;
        margin-top: 20px;
        border: 1px solid gray;
        border-radius: 10px;
    }

    .btn {
        padding: 30px;
        width: 100%;
        margin-top: 20px;
        border: 1px solid gray;
        border-radius: 10px;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaces Listing</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="width_wrapper">





        <!-- <center>
            <h1 class="header">EXPLORE ALL SPACES.</h1>
            <form action="" class="form">
                <input class="inp_box" placeholder="Search" type="text" name="">
                <input class="btn" type="submit" value="Search" name="" id="">
            </form>
        </center> -->


        <div class="space_listing">

            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "select * from space ";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_assoc($result)) {
                    $image = $row['image'];
                    $gmap_link = $row['gmap_link'];
                    print "<div class='single_space'>";
                    print "<div class='image'>
                            <img src='uploads/$image' >
                        </div>";



                    echo "<h3 class='detail_margin space_name'>SPACE NAME : ", $row['space_name'], "</h3>";
                    echo "<p class='detail_margin'>Location : ", $row['zip'], "</p>";

                    echo "<a class=detail_margin link' href='$gmap_link' target='_blank'>Click here to visit Google</a>";


                    $space_id = $row['space_id'];


                    echo "<div class='detail_margin star'>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-regular fa-star'></i>
                            <i class='fa-regular fa-star'></i>
                        </div> ";

                    echo "<p class='detail_margin'>Price ", $row['per_hour'], "/ph</p>";
                    echo "     <button onclick=\"window.location.href= '/spareParkPHP/single_space.php?space_id=$space_id'\"
                                class='detail_margin btn_new'>VIEW DETIALS</button> ";
                    echo "     <button onclick=\"window.location.href= '/spareParkPHP/single_space.php?space_id=$space_id'\"
                                class='detail_margin btn_new'>VIEW AVAILABLE DATES</button> ";

               
            
                    print "</div>";


                }







            } else {
                echo "No database available";
            }


            // <div class="single_space">
            //     <div class="image">
            //         <img src="images/10172815_8399 (1).jpg" alt="image_park">
            //     </div>
            //     <h3 class="detail_margin space_name">SPACE AT</h3>
            //     <p class="detail_margin">Location : E138QR</p>
            //     <p class="detail_margin">Check at gmaps</p>
            //     <div class="detail_margin star">
            //         <i class="fa-solid fa-star"></i>
            //         <i class="fa-solid fa-star"></i>
            //         <i class="fa-solid fa-star"></i>
            //         <i class="fa-regular fa-star"></i>
            //         <i class="fa-regular fa-star"></i>
            //     </div>
            //     <p class="detail_margin">Price :11$/ph</p>
            //     <button onclick="window.location.href = '/spareParkPHP/single_space.php'"
            //         class=" detail_margin btn_new">VIEW DETIALS</button>
            
            // </div>
            
            ?>

        </div>

    </div>


</body>

</html>

<script src="index.js"></script>