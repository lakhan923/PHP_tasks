<?php
$servername = "localhost";
$username = "root";
$password = "new_password";
$database = "mydatabase";

// Creating connection
$conn = new mysqli($servername, $username, $password, $database);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Adding my own data to asiakastaulu
$sql = "INSERT INTO `asiakastaulu` (`etunimi`, `sukunimi`, `email`, `osoite`, `postinumero`, `paikkakunta`) 
        VALUES ('Laiba', 'khan', 'laaaibah@gmail.com', 'Emännäntie 10 k', 40740, 'Jyväskylä')";

if ($conn->query($sql) === TRUE) 
{
    $customerId = $conn->insert_id; // Get the ID of the last inserted customer
    echo "Test customer added successfully.\n";
} else 
{
    echo "Error adding test customer: " . $conn->error;
}

// Making an order under my own name in tilaustaulu

$sql = "INSERT INTO `tilaustaulu` (`asiakas_id`, `pvm`) 
        VALUES ($customerId, NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Order added successfully.\n";
} else {
    echo "Error adding order: " . $conn->error;
}


// Closing connection
$conn->close();
