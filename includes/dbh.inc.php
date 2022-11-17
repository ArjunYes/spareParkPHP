<?php

    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "spare_park";


    $conn = mysqli_connect($dbServerName,$dbUsername,$dbPassword,$dbName);

?>



<!-- // $sql = "SELECT * FROM contact_info;";
// $result = mysqli_query($conn, $sql);
// $resultCheck = mysqli_num_rows($result);

// if ($resultCheck > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         // echo $row['email_id'];
//         // echo " <script> console.log('DARKKKKE') </script> ";
//     }
// } else {
//     echo " <script> console.log('DARKKKKE') </script> ";
// }


// $sql = "INSERT INTO contact_info (email_id,message) VALUES ('temp','fdfdfd')";
// mysqli_query($conn,$sql); -->
