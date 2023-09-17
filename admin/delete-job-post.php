<?php
include "../connection.php";
session_start();

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Manually delete associated likes records
    $sql_delete_likes = "DELETE FROM likes WHERE liked_post = '$post_id'";
    if ($connection->query($sql_delete_likes)) {
        // Proceed to delete the post after likes are deleted
        $sql_delete_post = "DELETE FROM post WHERE id = '$post_id'";
        if ($connection->query($sql_delete_post)) {
            // Successful deletion
            header("Location: active-jobs.php");
            exit();
        } else {
            echo "Error deleting post: " . $connection->error;
        }
    } else {
        echo "Error deleting likes: " . $connection->error;
    }
} else {
    echo "Invalid request.";
}
?>
