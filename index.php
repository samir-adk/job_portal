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