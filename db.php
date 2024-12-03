<?php

$host = "localhost";  
$username = "root";   
$password = "";       
$dbname = "shop_db"; 


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("filed sucsufel" . $conn->connect_error);
}
?>
