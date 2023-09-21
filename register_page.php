<?php
include 'connection.php'; // Include the connection file

if (isset($_POST['register'])) {
    // Process form data when the register button is pressed
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $user_skills = isset($_POST['user_skills']) ? $_POST['user_skills'] : '';
    $user_qualification = isset($_POST['user_qualification']) ? $_POST['user_qualification'] : '';

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database, including the new fields
    $query = "INSERT INTO users (name, user_name, password, user_type, skills, qualification) 
              VALUES ('$user_name', '$user_email', '$hashed_password', '$type', '$user_skills', '$user_qualification')";

    if ($connection->query($query) === TRUE) {
        echo "Registration successful!";
        header("Location: Login.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
}
?>
