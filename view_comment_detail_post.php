<!DOCTYPE html>
<html>
<head>
    <title>View Post Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .post-details {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .post-details h2 {
            color: #333;
        }
        .post-details p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="post-details">
        <?php
        include "connection.php";

        // Check if the post_id is set in the query string
        if (isset($_GET['post_id'])) {
            $post_id = $_GET['post_id'];

            // Fetch the post details
            $fetch_post_query = "SELECT * FROM post WHERE id = $post_id";
            $post_result = $connection->query($fetch_post_query);

            if ($post_result && $post_result->num_rows > 0) {
                $post_data = $post_result->fetch_assoc();

                echo "<h2>" . $post_data['job_title'] . "</h2>";
                echo "<p><strong>Description:</strong> " . $post_data['description'] . "</p>";
              
                echo "<p><strong>Posted On:</strong> " . $post_data['posted_date'] . "</p>";
                // You can display more post details as needed
            } else {
                echo "<p>Post not found.</p>";
            }
        } else {
            echo "<p>Post ID not specified.</p>";
        }
        ?>
        <p><a href="my_post_comment.php">Back to Comments</a></p>
    </div>
</body>
</html>
