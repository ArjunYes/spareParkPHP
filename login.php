


<style type="text/css">
	
    .Error_msg{
        font-family: 'Abel', sans-serif,bold;
        font-size: 15px;
        color: red;
    
    }
       
    
    .in1{
           margin-top: 2%; 
        outline: 0;
        background: #f2f2f2;
        font-family: 'Abel', sans-serif;
        width: 90%;
        border: 0;
        padding: 10px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
        font-size: 14px;
        margin-left: 5%;
    
    }
    
    .container2{
        width: 23%; 
        left: 0%;
        right: 0%;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        background: rgba(245, 245, 220, 0.32);
       
    }
    
    
    .btn1{
        background: #ff1919;
        width: 90%;
        border: 0;
        font-family: 'Abel', sans-serif,bold;
        font-size: 17px;
        color: #FFFFFF;
        padding: 13px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
        margin-left: 5%;
        margin-top: 3%;
    }
    
    .btn1:hover{
        background: #6A1B9A;
        
    }
    
    
    
    .thumbnail{
        margin: auto;
        background: #E5E8E8;
        width: 150px;
        height: 150px;
        padding: 50px 30px;
        border-top-left-radius: 100%;
        border-top-right-radius: 100%;
        border-bottom-left-radius: 100%;
        border-bottom-right-radius: 100%;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        opacity: 0.9;
        background-image: url("css2/student.gif");
        background-size: 150px 150px;
    }
    
    
    
    </style>
    
    
    
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>HOSPITAL ADDING</title>
        <link rel="stylesheet"  href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>
    <body>
    
    
        <div class="container1"><br><br><br><br><br>
            <center><h1 class="heading">USER LOGIN</h1></center>
            <div class="container2">
            
            
                <br>
            <form action="" method="POST" >
                    
                        <input class="in1" type="text" name="Staff_id" placeholder="USER ID " required=""><br>
                        <input class="in1" type="password" name="password1" placeholder="PASSWORD" required=""><br>
                        <input class="btn1" type="submit" name="btn" value="LOGIN">	
                    
                </form>
            
                <?php
                    
                    include("connection.php");
    
                    if(isset($_POST['btn'])){
    
                        $Staff_id = $_POST['Staff_id'];
                        $password = $_POST['password1'];
    
                        $sql = "select * from user_details where User_ID ='$Staff_id' and Password='$password'";
                        $result = mysqli_query($conn, $sql);
    
    
                        if (mysqli_num_rows($result)>0){
    
                            session_start();
                            $_SESSION['User_id'] = $Staff_id;
                            $_SESSION['login'] = true;
                            $_SESSION['level'] = "l2";
    
    
                              echo "<script>  window.location.href = 'User_home.php' </script>";
                        } 
                        else{
                             print "<center><h1 class= 'Error_msg'>Wrong Password!</h1></center> <br>";
                        }
    
    
    
    
    
    
                    }
    ?>
    
    
            </div>
        </div>
    
    
    
    
    
    
    </body>
    </html>
    
    
    
                
    
    
    
    
    
    