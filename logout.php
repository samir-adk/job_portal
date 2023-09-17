<?php
session_start(); // Start the session (if it's not already started)

// Check if the user is logged in
if (isset($_SESSION['logged_user'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect the user to the login page or any other page you prefer
    header("Location: login.php");
    exit();
} else {
    // If the user is not logged in, simply redirect to the login page
    header("Location: login.php");
    exit();
}
?>
