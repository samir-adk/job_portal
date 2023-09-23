
<?php
include "connection.php";
session_start();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<style>
body{
    margin-top:20px;
    background:#eee;
}
.blog-page .single_post {
    -webkit-transition: all .4s ease;
    transition: all .4s ease
}

.blog-page .single_post .img-post {
    position: relative;
    overflow: hidden;
    max-height: 500px
}

.blog-page .single_post .img-post>img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
    transition: transform .4s ease, opacity .4s ease;
    max-width: 100%;
    filter: none;
    -webkit-filter: grayscale(0);
    -webkit-transform: scale(1.01)
}

.blog-page .single_post .img-post:hover img {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
    opacity: .7;
    filter: gray;
    -webkit-filter: grayscale(1);
    -webkit-transition: all .8s ease-in-out
}

.blog-page .single_post .img-post:hover .social_share {
    display: block
}

.blog-page .single_post .img-post .social_share {
    position: absolute;
    bottom: 10px;
    left: 10px;
    display: none
}

.blog-page .single_post .meta {
    list-style: none;
    padding: 0;
    margin: 0
}

.blog-page .single_post .meta li {
    display: inline-block;
    margin-right: 15px
}

.blog-page .single_post .meta li a {
    font-style: italic;
    color: #959595;
    text-decoration: none;
    font-size: 12px
}

.blog-page .single_post .meta li a i {
    margin-right: 6px;
    font-size: 12px
}

.blog-page .single_post h3 {
    font-size: 20px;
    line-height: 26px;
    -webkit-transition: color .4s ease;
    transition: color .4s ease
}

.blog-page .single_post h3 a {
    color: #242424;
    text-decoration: none
}

.blog-page .single_post p {
    font-size: 15px
}

.blog-page .single_post .blockquote p {
    margin-top: 0 !important
}

.blog-page .right-box .categories-clouds li {
    display: inline-block;
    margin-bottom: 5px
}

.blog-page .right-box .categories-clouds li a {
    display: block;
    font-size: 14px;
    border: 1px solid #ccc;
    padding: 6px 10px;
    border-radius: 3px;
    color: #242424
}

.blog-page .right-box .instagram-plugin {
    overflow: hidden
}

.blog-page .right-box .instagram-plugin li {
    float: left;
    overflow: hidden;
    border: 1px solid #fff
}

.blog-page .comment-reply li {
    margin-bottom: 15px
}

.blog-page .comment-reply li:last-child {
    margin-bottom: none
}

.blog-page .comment-reply li h5 {
    font-size: 18px
}

.blog-page .comment-reply li p {
    margin-bottom: 0px;
    font-size: 15px;
    color: #777
}

.blog-page .comment-reply .list-inline li {
    display: inline-block;
    margin: 0;
    padding-right: 20px
}

.blog-page .comment-reply .list-inline li a {
    font-size: 13px
}

.page.with-sidebar.right .left-box {
    margin-right: -20px
}

@media (max-width: 414px) {
    .section.blog-page {
        padding: 20px 0
    }
    .blog-page .left-box .single-comment-box>ul>li {
        padding: 25px 0
    }
    .blog-page .left-box .single-comment-box ul li .icon-box {
        display: inline-block
    }
    .blog-page .left-box .single-comment-box ul li .text-box {
        display: block;
        padding-left: 0;
        margin-top: 10px
    }
}
.card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
}

.card .body {
    font-size: 14px;
    color: #424242;
    padding: 20px;
    font-weight: 400;
}
.card .header {
    color: #424242;
    padding: 20px;
    position: relative;
    box-shadow: none;
}
.card .header h2 {
    font-size: 15px;
    color: #757575;
    position: relative;
}
.card .header h2:before {
    background: #a27ce6;
}
.card .header h2::before {
    position: absolute;
    width: 20px;
    height: 1px;
    left: 0;
    top: -20px;
    content: '';
}
.m-b-15 {
    margin-bottom: 15px;
}
    </style>

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
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
              <link rel="stylesheet" href="css/AdminLTE.min.css">
              <script type="text/javascript">
                 
var app = angular.module('jobPortalApp', []);

app.controller('NotificationController', function($scope, $http) {
    // Initialize an empty array to store notifications
    $scope.notifications = [];

    // Fetch notifications data from the server
    $http.get('notification_api.php') // Create a PHP script to fetch data from the "job_title" table
        .then(function(response) {
            // On successful response, populate the notifications array
            $scope.notifications = response.data;
        }, function(error) {
            console.error('Error fetching notifications:', error);
        });
});
</script>
          
  <!-- iCheck -->
<?php
include 'header_admin.php';

?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">User Panel </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="admin_panel.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="users_post.php">
      <i class="fas fa-fw fa-briefcase"></i>
      <span>My post</span>
    </a>
      <li class="nav-item active">
    <a class="nav-link" href="my_post_comment.php">
      <i class="fas fa-fw fa-briefcase"></i>
      <span>My post comments</span>
    </a>
  </li>
  </li>
   <li class="nav-item active">
    <a class="nav-link" href="all_posts.php">
      <i class="fas fa-fw fa-briefcase"></i>
      <span>All post</span>
    </a>
  </li>
  
  <li class="nav-item active">
    <a class="nav-link" href="../logout.php">
      <i class="fas fa-fw fa-arrow-circle-o-right"></i>
      <span>Logout</span>
    </a>
  </li>
</ul>

            <!-- Divider -->
            <hr class="sidebar-divider">

           
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>


         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" ng-app="jobPortalApp" ng-controller="NotificationController">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1 ">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">Notifications</h6>
                        <a class="dropdown-item" ng-repeat="notification in notifications" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="text-truncate">{{ notification.job_title }}</div>
                                <div class="small text-gray-500">{{ notification.posted_date }}</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Notifications</a>
                    </div>

                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    $fetch_data = "SELECT post.*, users.name AS username FROM post JOIN users ON post.post_user = users.user_id";                                     
    $query = $connection->query($fetch_data);

    if ($query) {
        while ($row_data = $query->fetch_assoc()) {
            ?>
        <div class="col-lg-4 col-md-12">
            <div class="card single_post">
                <div class="body">
                    <?php
            echo " <h3 class='m-t-0 m-b-5'>" . $row_data['job_title'] . "</h3>";
            echo "<ul class='meta'>
            <li><i class='zmdi zmdi-account col-blue'></i> Posted By:". $row_data['username'] ."</li>
            <li><i class='zmdi zmdi-account col-blue'></i> Post ID:". $row_data['id'] ."</li>
        </ul>"; ?>
                    <div class="img-post m-b-15">
                        <img src="./image/avatar5.png" alt="Post avatar">
                        <div class="social_share">
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                        </div>
                    </div>
                    <?php
                    echo "<p>".$row_data['description']."</p>";
          ?>
                </div>
       
                <?php
            echo "<form method='POST' action='like_job.php'>";
            echo "<input type='hidden' name='liked_post_id' value='" . $row_data['id'] . "'>";
            $post_id = $row_data['id'];

            // Total like count for each post
            $count_like = "SELECT COUNT(DISTINCT liked_user) AS total_liked_users FROM likes WHERE liked_post = '$post_id'";
            $likes_count_result = $connection->query($count_like);
            $likes_count_row = $likes_count_result->fetch_assoc();
            $total_liked_users = $likes_count_row['total_liked_users'];
            echo "<br><br> Total likes =" . $total_liked_users . "&nbsp;";

            $check_liked_not = "SELECT COUNT(*) AS is_liked FROM likes WHERE liked_post = '$post_id' AND liked_user = '$user_id'";
            $check_liked_not_result = $connection->query($check_liked_not);
            $liked_row = $check_liked_not_result->fetch_assoc();
            $is_liked = $liked_row['is_liked'];

            if ($is_liked) {
                echo "<button style='background-color:blue;' type='submit' name='unlike' value='unlike'><i class='zmdi zmdi-favorite-outline'></i> Unlike</button>";
            } else {
                echo "<button style ='background-color:blue;'type='submit' name='like' value='like'><i class='zmdi zmdi-favorite'></i> Like</button>";
            }

            // Place the form closing tag within the loop
            echo "</form>";
            echo "<form method='POST' action='comment.php'>";
            echo "<input type='hidden' name='post_id' value='" . $row_data['id'] . "'>";
            echo "<textarea name='comment' rows='3' cols='40' placeholder='Add your comment'></textarea>";
            echo "<br>";
            echo "<input type='submit' name='add_comment' value='Add Comment'>";
            echo "</form>";

            echo "</div>";
            ?>
           
           <?php
            echo "</div>";
           
        }
    } else {
        echo "Error fetching posts: " . $connection->error;
    }
}
?>
</body>
