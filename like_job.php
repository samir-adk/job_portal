<?php
include 'connection.php';
session_start();
if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
  if (isset($_POST['like']))
{
	$liked_id=$_POST['liked_post_id'];

      $query = "INSERT INTO likes (liked_user, liked_post) VALUES ('$user_id', '$liked_id')";
      if ($connection->query($query) === TRUE)
      {
          header("Location:all_posts.php");
          exit();
      }
      else
      {
      	echo "some thing gets wrong in liking";
      }
       
	
}
else 
{
	$liked_id=$_POST['liked_post_id'];
	$query = "DELETE FROM likes WHERE liked_user='$user_id' AND liked_post='$liked_id'";

	if($connection->query($query)===True)
	{
		header("Location:all_posts.php");
		exit();
	}
}
}
  


?>