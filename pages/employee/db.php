<?php
// Database credentials
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "pos"; // Replace with your database name

try {
    // Establish a connection to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Display a success message if connected successfully
    //echo "Connected successfully";
} catch (PDOException $e) {
    // Display an error message if connection fails
    echo "Connection failed: " . $e->getMessage();
}
?>
