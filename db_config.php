<?php
// db_config.php

$host = "localhost"; // Change if your MySQL host is different
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty by default)
$database = "empowered"; // Replace with your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>