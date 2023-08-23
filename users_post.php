<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="title">
		<h2>Your Posts</h2>
	</div>
	<div class="post">
		<?php
		include "connection.php";
		session_start();
		if (isset($_SESSION['user_id'])) {
			$user_id = $_SESSION['user_id'];
			$fetch_data = "SELECT * FROM post WHERE post_user='$user_id'";
			$query = $connection->query($fetch_data);

			if ($query) {
				while ($row_data = $query->fetch_assoc()) {
					echo "<div style='background-color:red'>";
					echo "<h3>" . $row_data['job_title'] . "</h3>";
					echo "<p>" . $row_data['description'] . "</p>";

					// echo "<p> posted by ".$row_data['post_user']."</p>";
					// Retrieve user's name based on post_user
					$user_query = "SELECT name FROM users WHERE user_id = '" . $row_data['post_user'] . "'";
					$user_result = $connection->query($user_query);
					$user_data = $user_result->fetch_assoc();
					echo "<p> Posted by " . $user_data['name'] . "</p>";
                    //delete form
				  	echo "<form method='POST' action='delete_job.php'>";
					echo "<input type='hidden' name='delete_id' value='" . $row_data['id'] . "'>";
					echo "<input type='submit' name='delete' value='Delete'>";
					echo "</form>";
					//edit link
					// echo "<a href='edit_job.php?edit_id=" . $row_data['id'] . "'>Edit</a>";


					echo "</div>";

					
				}
			} else {
				echo "Error fetching posts: " . $connection->error;
			}
		}
		?>
	</div>
</div>
</body>
</html>
