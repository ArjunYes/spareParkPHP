<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="navbaree">
        <label class="navbar-toggle" id="js-navbar-toggle" for="chkToggle">
            <i class="fa fa-bars"></i>
        </label>
        <img class="filter-green" src="images/big-parking-sign-svgrepo-com.svg" alt="">
        <input type="checkbox" id="chkToggle"></input>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="#" class="nav-links">Home</a>
            </li>
            <li>
                <a href="#" class="nav-links">Products</a>
            </li>
            <li>
                <a href="#" class="nav-links">About Us</a>
            </li>
            <li>
                <a href="#" class="nav-links">Contact Us</a>
            </li>
            <li>
                <a href="#" class="nav-links">Blog</a>
            </li>
        </ul>
    </div>
</body>

</html>


<style>
    /* 
    *{
        color: black;
    } */

    .navbaree {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        width: 85%;
        padding-bottom: 10px;
        color: black;
        /* border: 1px solid black; */
    }

    .main-nav {
        list-style-type: none;
        display: none;
    }

    .nav-links,
    .logoxx {
        text-decoration: none;
        color: #6d6d6d;
    }


    .main-nav li {
        text-align: center;
        margin: 15px auto;
    }

    .logoxx {
        display: inline-block;
        font-size: 22px;
        margin-top: 20px;
        margin-left: 20px;
    }

    .filter-green {
        height: 55px;
        width: 50px;
        margin: 20px;
    }

    .navbar-toggle {
        position: absolute;
        top: 38px;
        right: 20px;
        cursor: pointer;
        color: black;
        font-size: 24px;
    }

    #chkToggle {
        display: none;
    }

    #chkToggle:checked+ul.main-nav {
        display: block;
    }

    @media screen and (min-width: 768px) {
        .navbaree {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;

            height: 100px;
            align-items: center;
            border: none;
        }

        .filter-green {
            height: 50px;
            width: 50px;
            margin: 20px;
        }

        #chkToggle:checked+ul.main-nav {
            display: flex;
        }

        .main-nav {
            display: flex;
            margin-right: 30px;
            flex-direction: row;
            justify-content: flex-end;
        }

        .main-nav li {
            margin: 0;
        }

        .nav-links {
            margin-left: 40px;
        }

        .logoxx {
            margin-top: 0;
        }

        .navbar-toggle {
            display: none;
        }

        .logoxx:hover,
        .nav-links:hover {
            color: red;
        }


    }
</style>