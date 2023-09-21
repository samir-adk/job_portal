<?php
// Include the database connection file
include 'connection.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize input
    $name = mysqli_real_escape_string($connection, $_POST["name"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $subject = mysqli_real_escape_string($connection, $_POST["subject"]);
    $message = mysqli_real_escape_string($connection, $_POST["message"]);

    // SQL query to insert data into the "contact" table
    $insert_query = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    // Execute the query and check if it was successful
    if (mysqli_query($connection, $insert_query)) {
        // Data inserted successfully
        header('Location:contact.php');
        echo "Message sent successfully!";
    } else {
        // Error occurred
        echo "Error: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
