<?php
include 'connection.php'; // Include the connection file

if (isset($_POST['register'])) {
    // Process form data when the register button is pressed
    $name = isset($_POST['yourname']) ? $_POST['yourname'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    
    // Insert user data into the database
    $query = "INSERT INTO users (name,username,password,user_type) VALUES ('$name','$username', '$password', '$type')";
    
    if ($connection->query($query) === TRUE) {
        header("Location: login.php");
        echo "Registration successful!";
        header("Location:Login.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
}
?>
