<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
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
                    <li><a href="#about">Contact Us </a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">About</a></li>
                </ul>
            </nav>

            <div class="content_wrapper">
                <div class="title_desc">
                    <h1 class="title">SPARE PARK.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam quis praesentium cum officia cupiditate numquam provident dolores porro assumenda, iusto mollitia exercitationem perferendis officiis explicabo ipsam distinctio, facilis quos!</p>
                    <button class="big-btn ">LEARN MORE <i class="fa-solid fa-arrow-down "></i></button>
                </div>

                <div class="form_container">
                    <form class="form" action="" method="post">
                        <h2 class="form_head">LOGIN</h2>
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
                <h1 class="title">SPARE PARK.</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam quis praesentium cum officia cupiditate numquam provident dolores porro assumenda, iusto mollitia exercitationem perferendis officiis explicabo ipsam distinctio, facilis quos!</p>
                <button class="big-btn ">LEARN MORE <i class="fa-solid fa-arrow-down "></i></button>
            </div>
            <div class="image_container">
                <img src="" alt="">
            </div>

        </div>




        <footer class="footer">
            <p> &copy 2022-2023 All rigths reserved spare park.</p>
        </footer>

    </div>
</body>

</html>