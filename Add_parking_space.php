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





    <div class="reg_form">



        <form class="reg_form_space_owner" enctype="multipart/form-data" method="POST">
            <h2 class="form_head">ADD A <span id="spaceFindertext">NEW SPACE.</span> </h2>
            <p class="margin">Please fill in the detials for the new space</p>
            <input class="text_box" type="text" name="space_name" placeholder="Space Name">
            <input class="text_box" type="number" name="per_hour" placeholder="Price per hour">
            <!-- <input class="text_box" type="image" name="space_contact" placeholder="Phone Number"> -->

            <input class="text_box" type="file" name="image">

            <div class="address">
                <input class="text_box" name="street" type="street" class="form-control" placeholder="Street">
                <input class="text_box" name="city" type="city" class="form-control" placeholder="City">
                <input class="text_box" name="state" type="state" class="form-control" placeholder="State">
                <input class="text_box" name="zip" type="zip" class="form-control" placeholder="Zip">
                <input class="text_box" name="country" type="country" class="form-control" placeholder="Country">
                <input class="text_box" name="gmap_link" class="form-control" placeholder="Gmap Link">
                <input class="text_box" name="area" class="form-control" placeholder="Area in sq cm">
                <textarea class="text_box" rows="4" cols="50" name="about"
                            placeholder="Description"></textarea>
            </div>


            <input class="btn" type="submit" name="upload" value="ADD NEW SPACE">
        </form>



    </div>




</body>

</html>
<script type="text/javascript">

</script>
<?php
include_once 'includes/dbh.inc.php';

// Create database connection
$db = mysqli_connect("localhost", "root", "", "sparepark");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text


    // image file directory
    $target = "uploads/" . basename($image);
    $space_name = $_POST['space_name'];
    $per_hour = $_POST['per_hour'];


    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $gmap_link = $_POST['gmap_link'];
    $area = $_POST['area'];
    $about = $_POST['about'];


    // $sql = "INSERT INTO space (image, `space_name`,`per_hour`,`street`,`city`,`state`,`zip`,`country`,`gmap_link`) 
    //                    VALUES ('$image', '$space_name','$per_hour','$street','$city','$state','$zip','$country',$gmap_link)";

    $sql = "INSERT INTO `space` (`space_name`, `per_hour`, `image`, `street`, `city`, `state`, `zip`, `country`, `gmap_link`, `so_id`, `area`, `about`, `isApproved`) 
    VALUES ('$space_name',' $per_hour' , '$image', '$street', '$city', '$state', '$zip', '$country', '$gmap_link', '10', '$area', '$about', '0')";

    // // execute query
    // mysqli_query($db, $sql);

    if (mysqli_query($conn, $sql)) {

        $message = "Added record ";
        echo "<script> alert('$message'); window.location.href = 'index.php' </script>";
    } else {
        $message = " failed record ";
        echo "<script> alert('$message'); ";
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

        $message = "Image uploaded successfully";
        echo "<script> alert('$message'); ";
    } else {

        $message = "faiol!";
        echo "<script> alert('$message'); ";
    }






}

?>



<!-- <script src="index.js"></script> -->