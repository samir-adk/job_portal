<?php
include 'connection.php'; // Include the connection file

if (isset($_POST['register'])) {
    // Process form data when the register button is pressed
    
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    
    // Insert user data into the database
    $query = "INSERT INTO users (name, password, user_type) VALUES ('$username', '$password', '$type')";
    
    if ($connection->query($query) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
}
?>
