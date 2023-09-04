<?php
include "connection.php";

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw JSON data from the request body
    $json_data = file_get_contents("php://input");

    // Decode the JSON data
    $data = json_decode($json_data, true);

    // Check if the required fields are present in the JSON data
    if(isset($data['user_id']) && isset($data['post_id']) && isset($data['comment'])) {
        $user_id = $data['user_id'];
        $post_id = $data['post_id'];
        $comment = $data['comment'];
        
        // Perform any necessary data validation or sanitation here
        
        $query = "INSERT INTO comments (comment, comment_user_id, post_id) VALUES ('$comment', '$user_id', '$post_id')";
        
        if ($connection->query($query) === TRUE) {
            $response = ['status' => 'success', 'message' => 'Comment added'];
            echo json_encode($response); // Output the JSON response
        } else {
            $error_response = ['status' => 'error', 'message' => 'Error adding comment'];
            echo json_encode($error_response); // Output the JSON error response
        }
    } else {
        $error_response = ['status' => 'error', 'message' => 'Comment not received!'];
        echo json_encode($error_response); // Output the JSON error response
    }
}
?>
