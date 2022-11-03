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

<body>
    <div class="wrapper">
        <div class="page_1">
            <nav class="navbar">
                <div class="logo ">
                    <img class="filter-green" src="images/big-parking-sign-svgrepo-com.svg" alt="">
                    <!-- <h2 >Spare Park</h2> -->
                </div>
                <ul class="navitems">
                    <li><a class="active" href="#home">Home </a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#platforms">Platforms</a></li>
                    <li><a href="#contactus">Contact Us </a></li>
                </ul>
            </nav>

            <div id="home" class="content_wrapper">
                <div class="title_desc">
                    <h1 class="title">SPARE PARK.</h1>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam quis praesentium cum officia cupiditate numquam provident dolores porro assumenda, iusto mollitia exercitationem perferendis officiis explicabo ipsam distinctio, facilis quos!</p>
                    <a class="big-btn " href="#about"> EXPLORE SPACES <i class="fa-solid fa-arrow-down "></i></a>
                </div>

                <div class="form_container">
                    <form class="form" action="" method="post">
                        <h2 class="form_head">LOGIN AS <span>SPACE FINDER.</span> </h2>
                        <div class="user_groups">
                            <button id="spaceFinder" value="spaceFinder" class="btn">SPACE FINDER.</button>
                            <button id="spaceOwner" value="spaceOwner" class="btn">SPACE OWNER.</button>

                        </div>
                        <input class="text_box" type="text" name="" placeholder="Username / email">
                        <input class="text_box" type="text" placeholder="Password">
                        <input class="btn full-width" type="submit" value="Login">
                        <p>Dont have an account ? <span onclick="window.location.href = '/spareParkPHP/register.php'"> Register</span></p>

                    </form>
                </div>
            </div>
        </div>


        <div id="about" class="about">
            <div class="title_desc">
                <h1 class="title">TRAVEL AND PARK AT EASE.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam quis praesentium cum officia cupiditate numquam provident dolores porro assumenda, iusto mollitia exercitationem perferendis officiis explicabo ipsam distinctio, facilis quos!</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rerum maxime dicta sapiente deleniti magni, nam eligendi incidunt placeat quae!</p>
                </div>
                <div class="platform">
                    <i class="small_logo fa fa-thin fa-tablet"></i>
                    <h2>Tablets</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rerum maxime dicta sapiente deleniti magni, nam eligendi incidunt placeat quae!</p>
                </div>
                <div class="platform">
                    <i class="small_logo fa  fa-regular fa-desktop"></i>
                    <h2>Desktop</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rerum maxime dicta sapiente deleniti magni, nam eligendi incidunt placeat quae!</p>
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
                        <input class="text_box_c" type="email" name="" placeholder="Email id">
                        <textarea class="textArea" rows="4" cols="50" placeholder="Type in your msg"></textarea>
                        <input class="btn" type="submit" value="Send">

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
