<?php
// session_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define Site Constants
define("SITE_NAME", "Car Manufacturing Company");
define("BASE_URL", "http://car-manufacturing-company/"); // Adjust to project URL

// another method

$servername = "sql211.infinityfree.com";
$username = "if0_38523132";  // Change this based on MySQL credentials
$password = "2kgZAV6dPohv9mz";
$dbname = "if0_38523132_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>