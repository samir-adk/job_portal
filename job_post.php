<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="job_post.php">job post</a>
<a href="login.html">login</a>
<a href="index.php">index</a>

	<?php 
	include 'connection.php';
	$fetch="SELECT category_id,category_name FROM category";
	$query=$connection->query($fetch);



	?>
<form method="POST" action="job_post.php">
	<input type="text" name="job_title" placeholder="job_title">
    <select name="category" name="category">
    <?php while ($row = $query->fetch_assoc()): ?>
    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
    <?php endwhile; ?>
    	
    </select>
	<input type="text" name="description" placeholder="description">
	<input type="submit" name="post_job">

</form>
</body>
</html>
<?php
session_start();

   if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];

	if (isset($_POST['post_job'])) {
		$title = isset($_POST['job_title']) ? $_POST['job_title'] : '';
		$category = isset($_POST['category']) ? $_POST['category'] : '';
		$description = isset($_POST['description']) ? $_POST['description'] : '';

		$save_data = "INSERT INTO post (job_title, job_category_id, description, post_user) VALUES ('$title', '$category', '$description', '$user_id')";

		if ($connection->query($save_data) === TRUE) {
			echo "Post created successfully!";
			header("Location:job_post.php");
			exit();
		} else {
			echo "Error: " . $save_data . "<br>" . $connection->error;
		}
	}
}
?>
