<?php
include 'connection.php'; // Include the connection file

if (isset($_POST['register'])) {
    // Process form data when the register button is pressed
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    
    // Insert user data into the database
    $query = "INSERT INTO users (user_name,user_email,password,user_type) VALUES ('$user_name','$user_email', '$password', '$type')";
    
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
