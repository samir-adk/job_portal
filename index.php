<!DOCTYPE html>
<html>
<head>
<title>Job Portal Website</title>
<meta name="description" content="Best Job Portal Website in Sydney">
<meta name="keywords" content="Job Portal">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script type="text/javascript" src="comment_controller.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="./css/custom.css" rel="stylesheet">

<link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="./js/custom.js"></script>

  <?php
   include 'header.php' ;
	session_start();
	if (isset($_SESSION['logged_user'])) {
	    $user_name = $_SESSION['logged_user'];
	    echo "Welcome, $user_name!";
	} else {
	    echo "You are not logged in.";
	}

?>

<main>
   <div class="container my-5 py-5">  <div class="form-outline mb-4">
   <div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</div></div>
 
</main><a href="job_post.php">job post</a>
<a href="login.html">login</a>
<a href="index.php">index</a>

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

  include 'footer.php';

  ?>

</body>

</html>