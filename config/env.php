<?php

// Database credentials
$servername = getenv("DB_SERVERNAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");
$database = getenv("DB_DATABASE");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
?>
