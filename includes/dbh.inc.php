<?php

// $username="root";
// $password="";
// $host="localhost";
// $db="sparepark";
// $charset= "utf8mb4";

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// $options = [
//   PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//   PDO::ATTR_EMULATE_PREPARES   => false,
// ];

// try {
//   $pdo = new PDO($dsn, $username, $password, $options);
// } catch (\PDOException $e) {
//   throw new \PDOException($e->getMessage(), (int) $e->getCode());
// }


// if($conn){
//   echo " &nbsp";
// }else{
//   echo "DID NOT CONNECT";
// }


?>


<?php
$username = "root";
$password = "";
$host = "localhost";
$db = "sparepark";
$charset = "utf8mb4";
$conn = mysqli_connect($host, $username, $password, $db);
if ($conn) {
  echo " &nbsp";
} else {
  echo "DID NOT CONNECT";
}

?>