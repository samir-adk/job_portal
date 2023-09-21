<?php
// Include the database connection
include 'connection.php';

// Check if the delete_id parameter is set in the URL
if (isset($_POST['delete_id'])) {
    // Get the delete_id from the URL
    $delete_id = $_POST['delete_id'];

    // Construct the SQL query to delete the post
    $delete = "DELETE FROM post WHERE id = $delete_id";

    // Execute the query
    if ($connection->query($delete) === TRUE) {
        echo "Post " . $delete_id . " deleted successfully!";
        // Redirect back to the user's posts page
        header("Location: users_post.php");
        exit();
    } else {
        echo "Error deleting post: " . $connection->error;
    }
} else {
    echo "Delete ID not specified.";
}
?>
