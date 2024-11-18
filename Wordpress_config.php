<?php
// Database Connection Settings
$database_name = "wordpress";
$database_username = "wordpress";
$database_password = "new_password";
$database_host = "localhost";
$table_prefix = "wp_"; 

// Create connection
$conn = new mysqli($database_host, $database_username, $database_password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Page Settings
$site_title = "Laiba khan's blog";
$admin_username = "Admin";
$admin_password = "laibakhan1999"; 
$admin_email = "gr287157@gradia.fi"; 
