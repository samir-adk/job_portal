
<?php
include "connection.php";
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    $fetch_data = "SELECT post.*, users.name AS username FROM post JOIN users ON post.post_user = users.user_id";                                     
    $query = $connection->query($fetch_data);

    if ($query) {
        while ($row_data = $query->fetch_assoc()) {
            echo "<div style='background-color:red'>";
            echo "<h3>" . $row_data['job_title'] . "</h3>";
            echo "<p>" . $row_data['description'] . "</p>";
            echo "<p> Posted by " . $row_data['username'] . "</p>";
             echo "<p> Posted by " . $row_data['id'] . "</p>";
          
            echo "<form method='POST' action='like_job.php'>";
            echo "<input type='hidden' name='liked_post_id' value='" . $row_data['id'] . "'>";
            $post_id = $row_data['id'];

            // Total like count for each post
            $count_like = "SELECT COUNT(DISTINCT liked_user) AS total_liked_users FROM likes WHERE liked_post = '$post_id'";
            $likes_count_result = $connection->query($count_like);
            $likes_count_row = $likes_count_result->fetch_assoc();
            $total_liked_users = $likes_count_row['total_liked_users'];
            echo "<br><br> total likes" . $total_liked_users . "&nbsp;";

            $check_liked_not = "SELECT COUNT(*) AS is_liked FROM likes WHERE liked_post = '$post_id' AND liked_user = '$user_id'";
            $check_liked_not_result = $connection->query($check_liked_not);
            $liked_row = $check_liked_not_result->fetch_assoc();
            $is_liked = $liked_row['is_liked'];

            if ($is_liked) {
                echo "<input type='submit' name='unlike' value='unlike'>";
            } else {
                echo "<input type='submit' name='like' value='like'>";
            }

            // Place the form closing tag within the loop
            echo "</form>";
            echo "<form method='POST' action='comment.php'>";
            echo "<input type='hidden' name='post_id' value='" . $row_data['id'] . "'>";
            echo "<textarea name='comment' rows='3' cols='40' placeholder='Add your comment'></textarea>";
            echo "<br>";
            echo "<input type='submit' name='add_comment' value='Add Comment'>";
            echo "</form>";

            echo "</div>";
            ?>
           
           <?php
            echo "</div>";
        }
    } else {
        echo "Error fetching posts: " . $connection->error;
    }
}
?>
</body>