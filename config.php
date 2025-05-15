<?php

$host = "localhost"; // Database host
$user = "root"; // Database username
$password = ""; // Database password
$database = "users_db"; // Database name

$conn = mysqli_connect($host, $user, $password, $database); // Create connection

if (!$conn) {
    error_log("Connection failed: " . mysqli_connect_error());
    die("Connection failed: " . $conn->connect_error); // Check connection
}


?>  