<!DOCTYPE html>
<html>
<head>
    <title>Comments Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Comments Table</h2>
    <table>
        <thead>
            <tr>
                <th>Comment ID</th>
                <th>Comment</th>
                <th>Commented By</th>
                <th>Post Title</th>
                <th>View Post Details</th> <!-- Add this column header -->
            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";
            session_start();

            // Check if the user is logged in and has a user_id in the session
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                $fetch_comments_query = "SELECT comments.comment_id, comments.comment, users.user_name AS comment_username, post.job_title AS post_title, post.id AS post_id
                                        FROM comments
                                        INNER JOIN users ON comments.comment_user_id = users.user_id
                                        INNER JOIN post ON comments.post_id = post.id
                                        WHERE post.post_user = $user_id";

                $comments_result = $connection->query($fetch_comments_query);

                if ($comments_result && $comments_result->num_rows > 0) {
                    while ($comment_row = $comments_result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $comment_row['comment_id'] . "</td>";
                        echo "<td>" . $comment_row['comment'] . "</td>";
                        echo "<td>" . $comment_row['comment_username'] . "</td>";
                        echo "<td>" . $comment_row['post_title'] . "</td>";
                        echo "<td><a href='view_comment_detail_post.php?post_id=" . $comment_row['post_id'] . "'>View Post</a></td>"; // Add the View Post link
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No comments found.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Please log in to view comments.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
