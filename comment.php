<?php
include "connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $post_id = $_POST['post_id'];
        $comment_text = $_POST['comment'];

        // Perform any necessary data validation or sanitation here

        // Insert the comment into the database
        $insert_comment_query = "INSERT INTO comments (comment_user_id, post_id, comment) VALUES ('$user_id', '$post_id', '$comment_text')";
        if ($connection->query($insert_comment_query) === TRUE) {
            // Comment added successfully
            header("Location: all_posts.php"); // Redirect to the previous page after adding the comment
            exit();
        } else {
            // Error adding the comment
            echo "Error adding comment: " . $connection->error;
        }
    } else {
        // User is not logged in
        header("Location: login.php"); // Redirect to the login page if the user is not logged in
        exit();
    }
} else {
    // Handle cases where the request method is not POST
    echo "Invalid request method.";
}
?>
