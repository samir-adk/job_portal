<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="job_post.php">job post</a><br>
<a href="login.html">login</a><br>
<a href="index.php">index</a><br>
<a href="users_post.php">user posted job</a><br>
<a href="register_page.html">register page</a><br>
<a href="all_posts.php">all posts</a>
    <?php
	session_start();
	if (isset($_SESSION['logged_user'])) {
	    $user_name = $_SESSION['logged_user'];
	    echo "Welcome, $user_name!";
	} else {
	    echo "You are not logged in.";
	}
   ?>


	
</body>
</html>