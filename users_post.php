<?php
session_start();
if(empty($_SESSION['user_name'])) {
  header("Location:index.php");
  exit();
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .post-container {
            padding: 20px;
        }

        .post {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title text-center mt-4">
        <h2>Your Posts</h2>
    </div>
    <div class="post-container">
        <?php
        include "connection.php";
      
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $fetch_data = "SELECT * FROM post WHERE post_user=$user_id ";
            $query = $connection->query($fetch_data);

            if ($query) {
                while ($row_data = $query->fetch_assoc()) {
                    echo "<div class='post'>";
                    echo "<h3>" . $row_data['job_title'] . "</h3>";
                    echo "<p>" . $row_data['description'] . "</p>";

                    $user_query = "SELECT name FROM users WHERE user_id = '" . $row_data['post_user'] . "'";
                    $user_result = $connection->query($user_query);
                    $user_data = $user_result->fetch_assoc();
                    echo "<p> Posted by " . $user_data['name'] . "</p>";

                    echo "<form method='POST' action='delete_job.php'>";
                    echo "<input type='hidden' name='delete_id' value='" . $row_data['id'] . "'>";
                 echo '<div class="btn-group" role="group">';
				echo '  <button type="submit" class="btn btn-danger">Delete</button>';
                    echo "</form>";
                    ?>
                    &nbsp;
                    <?php
                    echo "<a href='edit_job.php?edit_id=" . $row_data['id'] . "' class='btn btn-primary'>Edit</a>";

                    echo "</div>";
                }
            } else {
                echo "Error fetching posts: " . $connection->error;
            }
        } else {
            echo "<p class='text-center'>Please login to view your personal posts</p>";
        }
        ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
