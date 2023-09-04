<!DOCTYPE html>
<html>
<head>
<title>Job Portal Website</title>
<meta name="description" content="Best Job Portal Website in Sydney">
<meta name="keywords" content="Job Portal">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script type="text/javascript" src="comment_controller.js"></script>
</head>
<body>

<a href="job_post.php">job post</a><br>
<a href="login.php">login</a><br>
<a href="index.php">index</a><br>
<a href="users_post.php">user posted job</a><br>
<a href="register_page.html">register page</a><br>
<a href="all_posts.php">all posts</a>


<div ng-app="NotificationApp" ng-controller="NotificationController" ng-init="Load()">
<script type="text/javascript" src="notification.js"></script>

</div>
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