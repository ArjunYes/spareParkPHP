<?php
$username = "root"; 
$password = "";
$db = "sunshine";
$host = "localhost";

$conn = mysqli_connect($host, $username, $password, $db);
if($conn){
	echo " &nbsp";
}else{
	echo "DID NOT CONNECT";
}

?>