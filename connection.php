<?php
$hostname = "localhost"; // MySQL server hostname default is localhost
$username = "root"; //  MySQL username
$password = ""; //  MySQL password
$database = "job"; // Databse name

// Create a connection
$connection = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
