<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (isset($_SESSION["user_type"])) {
        if ($_SESSION["user_type"] === 'sf_login') {
            echo $_SESSION["user_type"];
            echo $_SESSION["user_type"];
            echo $_SESSION["last_name"];
            echo $_SESSION["first_name"];

            echo "<script>  window.location.href = 'space_finder_home.php' </script>";
        } else if ($_SESSION["user_type"] === 'so_login') {
            echo "<script>  window.location.href = 'space_owner_home.php' </script>";
        }

        // session_destroy();
    }

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

<body class="">

    <div id="dialogue" class="dialogue">
        <button onclick="closePopup()" class="close"><i class="fa-solid fa-x"></i></button>
        <h1>Message sent</h1>
        <p>Your message has been sent to the admin.</p>
        <button onclick="closePopup()" class="dialogue_btn">OK</button>
    </div>

    <div id="body_content" class="body_content">


        <div class="wrapper">
            <div class="page_1">

                <?php
                include 'navbar.php';
                ?>

                <div id="home" class="content_wrapper">
                    <div class="title_desc">
                        <h1 class="title">WELCOME TO <span class="active">SPARE PARK.</span> </h1>

                        <p>Spare Park is an online platform that connects drivers in need of parking with homeowners who
                            have extra spaces.
                            Easily find and book parking in your city. Rent out your own spare parking space and earn
                            extra money.
                            A simple and effective solution to parking issues.</p>
                        <a class="big-btn " href="#spaces"> EXPLORE SPACES <i class="fa-solid fa-arrow-down "></i></a>
                    </div>

                    <div class="form_container">
                        <form class="form" action="" method="POST" role="form">
                            <h2 class="form_head">LOGIN AS <span id="spaceFindertext">SPACE FINDER.</span> <span
                                    id="spaceOwnertext">SPACE OWNER.</span> </h2>

                            <div class="user_groups">
                                <button onclick="switchUser(event)" id="spaceFinder" value="spaceFinder"
                                    class="btn activeUser">SPACE FINDER.</button>
                                <button onclick="switchUser(event)" id="spaceOwner" value="spaceOwner" class="btn">SPACE
                                    OWNER.</button>

                            </div>

                            <div id="spaceFinderForm">
                                <input required class="text_box" type="text" name="sf_email" placeholder="Email id">
                                <input required class="text_box" type="password" name="sf_password"
                                    placeholder="Password">
                                <input class="btn full-width" type="submit" name="sf_login"
                                    value="Login as sapce finder">
                            </div>


                            <div id="spaceOwnerForm">
                                <input class="text_box" type="text" name="so_email" placeholder="Email id">
                                <input class="text_box" type="password" name="so_password" placeholder="Password">
                                <input class="btn full-width" type="submit" name="so_login"
                                    value="Login as space owner">
                            </div>



                            <?php

                            include_once 'includes/dbh.inc.php';

                            if (isset($_POST['sf_login'])) {

                                $sf_email = $_POST['sf_email'];
                                $sf_password = $_POST['sf_password'];

                                $sql = "select * from spacefinder where email_id ='$sf_email' and password='$sf_password'";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    session_start();

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $first_name = $row['first_name'];
                                        $last_name = $row['last_name'];
                                        $User_id = $row['sf_id'];
                                        $_SESSION['first_name'] = $first_name;
                                        $_SESSION['last_name'] = $last_name;
                                        $_SESSION['User_id'] = $User_id;

                                    }


                                    $_SESSION['login'] = true;
                                    $_SESSION['user_type'] = "sf_login";


                                    echo "<script>  window.location.href = 'space_finder_home.php' </script>";
                                } else {
                                    print "<p> <span>Wrong username or password</span></p>";
                                }
                            }



                            if (isset($_POST['so_login'])) {

                                $sf_email = $_POST['so_email'];
                                $sf_password = $_POST['so_password'];

                                $sql = "select * from spaceowner where email_id ='$sf_email' and password='$sf_password'";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    session_start();

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $first_name = $row['first_name'];
                                        $last_name = $row['last_name'];
                                        $so_id = $row['so_id'];
                                        $User_id = $row['so_id'];
                                        $_SESSION['first_name'] = $first_name;
                                        $_SESSION['last_name'] = "$last_name";
                                        $_SESSION['so_id'] = "$so_id";
                                        $_SESSION['User_type'] = "$User_id";


                                    }

                                    $_SESSION['login'] = true;
                                    $_SESSION['user_type'] = "so_login";


                                    echo "<script>  window.location.href = 'space_owner_home.php' </script>";
                                } else {
                                    print "<p> <span>Wrong username or password</span></p>";
                                }


                            }
                            ?>



                            <p>Dont have an account ? <span
                                    onclick="window.location.href = '/spareParkPHP/register.php'"> Register</span></p>
                            <p>Click here to read about our <span class="privacy_policy"
                                    onclick="window.location.href = '/spareParkPHP/privacy_policy.php'"> Privacy policy.
                                </span></p>

                        </form>
                    </div>
                </div>
            </div>


            <!-- <div id="spaces" class="spaces">
                <h1 class="heading">SPACES</h1>
                <div class="spaceWrapper">

                    <div class="space">
                        <div class="imageWrapper">
                            <img src="images/user_images/pexels-photo-1004409.jpeg" alt="">
                        </div>
                        <p>Location : <span> E15,2RQ </span> </p>
                        <p>Rate : <span> $10/h </span> </p>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="btn">EXPLORE</button>
                    </div>

                    <div class="space">
                        <div class="imageWrapper">
                            <img src="images/user_images/pexels-photo-1004409.jpeg" alt="">
                        </div>
                        <p>Location : <span> E15,2RQ </span> </p>
                        <p>Rate : <span> $10/h </span> </p>

                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="btn">EXPLORE</button>

                    </div>
                    <div class="space">
                        <div class="imageWrapper">
                            <img src="images/user_images/pexels-photo-1004409.jpeg" alt="">
                        </div>
                        <p>Location : <span> E15,2RQ </span> </p>
                        <p>Rate : <span> $10/h </span> </p>

                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="btn">EXPLORE</button>

                    </div>
                    <div class="space">
                        <div class="imageWrapper">
                            <img src="images/user_images/pexels-photo-9585534.jpeg" alt="">
                        </div>
                        <p>Location : <span> E15,2RQ </span> </p>
                        <p>Rate : <span> $10/h </span> </p>

                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <button class="btn">EXPLORE</button>

                    </div> -->

                </div>
                <h2 class="link" onclick="window.location.href = '/spareParkPHP/spaces_listing.php'">MORE SPACES TO
                    EXPLORE <i class="fa-solid fa-arrow-right-long"></i></h2>


            </div>
        </div>


        <div id="about" class="about">
            <div class="title_desc">
                <h1 class="title">TRAVEL AND PARK AT EASE.</h1>
                <p>Spare Park is an online platform that connects individuals who have extra parking spaces with drivers
                    who are seeking a place to park their vehicles. This service is particularly useful in crowded urban
                    areas like London, where it can be difficult for drivers to find parking. By renting out their
                    unused parking spaces, homeowners can earn extra money, while drivers can reserve a spot in advance,
                    eliminating the stress of trying to find parking when they arrive at their destination. Spare Park
                    is a user-friendly website that allows drivers to find parking spaces easily using an interactive
                    map, search by postcode and filter by price, duration and distance. Moreover, it is an affordable
                    way for renters to get an extra space to park their vehicle.</p>
            </div>
            <div class="image_container">
                <img src="images/10172815_8399 (1).jpg" alt="">
            </div>
        </div>


        <div id="platforms" class="platforms">
            <h1>Platforms.</h1>
            <div class="categories">
                <div class="platform">
                    <i class="small_logo fa fa-regular fa-mobile"></i>
                    <h2>Mobile</h2>
                    <p>Spare Park offers mobile support through a dedicated iOS and Android application, allowing users
                        to easily find and book parking spaces on-the-go.</p>
                </div>
                <div class="platform">
                    <i class="small_logo fa fa-thin fa-tablet"></i>
                    <h2>Tablets</h2>
                    <p>Spare Park also supports tablet devices through a responsive web design, providing users with a
                        seamless experience while searching and booking parking on larger screens.</p>
                </div>
                <div class="platform">
                    <i class="small_logo fa  fa-regular fa-desktop"></i>
                    <h2>Desktop</h2>
                    <p>Spare Park offers full desktop support through a responsive web design, providing users with a
                        seamless experience while searching and booking parking on their desktops.</p>
                </div>
            </div>

        </div>


        <div class="contactus" id="contactus">

            <h1>GET IN TOUCH.</h1>
            <div class="contact_outer_wrapper">
                <div class="git">
                    <div class="contact_info">
                        <h3>ADDRESS</h3>
                        21 Lian street <br>
                        Opp Essex Mall <br>
                        E12 34U
                        <br> <br>
                        21 Lian street <br>
                        Opp Essex Mall <br>
                        E12 34U
                    </div>
                    <div class="contact_info">
                        <h3>PHONE</h3>
                        +44 7845874587 <br>
                        +44 8745896852
                        <br> <br>
                    </div>

                    <div class="contact_info">
                        <h3>EMAIL</h3>
                        contact@sparepark@gmail.com
                        <br> <br>
                        help@sparepark@gmail.com
                    </div>
                </div>

                <div class="gitform">

                    <form class="form" action="" method="post">
                        <h2 class="">MESSAGE US</h2>
                        <input class="text_box_c" type="email" name="email_id" placeholder="Email id">
                        <textarea class="textArea" rows="4" cols="50" name="message"
                            placeholder="Type in your msg"></textarea>
                        <input name="sendMsg" onclick="sendMessgae(event,true)" class="btn" type="submit" value="Send">

                    </form>

                </div>
            </div>


        </div>




        <footer class="footer">
            <p> &copy 2022-2023 All rigths reserved spare park. Version 1.0.0</p>
        </footer>

    </div>


</body>

</html>


<script src="index.js"></script>



<?php



if (isset($_POST['sendMsg'])) {
    echo " <script> debugger </script> ";
}


?>