<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="title">
		<h2>All posts</h2>
	</div>
	<div class="post">
		<?php
		include "connection.php";
		$fetch_data = "SELECT post.*, users.name AS username 
		               FROM post
		               JOIN users ON post.post_user = users.user_id";
		$query = $connection->query($fetch_data);

			if ($query) {
				while ($row_data = $query->fetch_assoc()) {
					echo "<div style='background-color:red'>";
					echo "<h3>" . $row_data['job_title'] . "</h3>";
					echo "<p>" . $row_data['description'] . "</p>";
					echo "<p> Posted by " . $row_data['username'] . "</p>";
					echo "</div>";
				}
			} else {
				echo "Error fetching posts: " . $connection->error;
			}
		
		?>
	</div>
</div>
</body>
</html>
