<!DOCTYPE html>
<html>
<head>
<title>Job Portal Website</title>
<meta name="description" content="Best Job Portal Website in Sydney">
<meta name="keywords" content="Job Portal">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="./css/custom.css" rel="stylesheet">

<link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="./js/custom.js"></script>
  <?php
include 'header.php' ;
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
 
</main>
	<!-- <a href="job_post.php">job post</a>
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
   ?>  -->


	<?php
  include 'footer.php';
  ?>
</body>

</html>