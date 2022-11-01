<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar">
            <div class="logo ">
                <img  src="images/big-parking-sign-svgrepo-com.svg" alt="">
                <!-- <h2 >Spare Park</h2> -->
            </div>
            <ul class="navitems">
                <li><a href="">Contact Us</a></li>
                <li><a href="">About</a></li>
            </ul>
        </nav>

    


        <div class="form_container">
            <form class="form" action="" method="post">
                <h2 class="form_head">LOGIN</h2>
                <input class="text_box" type="text" name="" placeholder="Username/email">
                <input class="text_box" type="text" placeholder="Password">
                <input class="btn" type="submit" value="Login">
                <p>Dont have an account ? <span  onclick="window.location.href = '/spareParkPHP/register.php'" > Register</span></p>

            </form>
        </div>


        <footer class="footer">
            <p> &copy 2022-2023 All rigths reserved</p>
        </footer>

    </div>
</body>

</html>