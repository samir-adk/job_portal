<?php
include 'connection.php';

if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];

    $delete = "DELETE FROM post WHERE id='$delete_id'";
    
    if ($connection->query($delete) === TRUE) {
        echo "Post " . $delete_id . " deleted successfully!";
        header("Location: users_post.php");
        exit();
    } else {
        echo "Error deleting post: " . $connection->error;
    }
}
?>
