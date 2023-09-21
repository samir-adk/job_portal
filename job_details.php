<?php
session_start();
include 'header.php';
?>
<main>
    <!-- Hero Area Start-->
    <div class="slider-area">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Welcome</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <?php
            include 'connection.php';
           

            if (isset($_SESSION['user_name'])) {
                $user_id = $_SESSION['user_name'];

                // Check if job_id is provided in the URL
                if (isset($_GET['job_id'])) {
                    $job_id = $_GET['job_id'];

                    // SQL query to retrieve job details based on job_id
                    $query = "SELECT * FROM post WHERE id = $job_id";

                    // Execute the query
                    $result = mysqli_query($connection, $query);

                    // Check if the query was successful
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Retrieve job details
                                $job_title = $row['job_title'];
                                $description = $row['description'];
                                $company_name = $row['company_name'];
                                $salary_range = $row['salary_range'];
                                $location = $row['location'];
                                $posted_date = $row['posted_date'];
                                $id = $row['id'];

                                // Output the job details within your HTML structure
                                echo '<div class="row justify-content-between">
                                    <!-- Left Content -->
                                    <div class="col-xl-7 col-lg-8">
                                        <!-- job single -->
                                        <div class="single-job-items mb-50">
                                            <div class="job-items">
                                                <div class="company-img company-img-details">
                                                    <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="#">
                                                        <h4>' . $job_title . '</h4>
                                                    </a>
                                                    <ul>
                                                        <li>' . $company_name . '</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>' . $location . '</li>
                                                        <li>' . $salary_range . '</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- job single End -->
                                        <div class="job-post-details">
                                            <div class="post-details1 mb-50">
                                                <!-- Small Section Tittle -->
                                                <div class="small-section-tittle">
                                                    <h4>Job Description</h4>
                                                </div>
                                                <p>' . $description . '</p>
                                            </div>
                                            <!-- Add more job details sections here -->
                                        </div>
                                    </div>
                                    <!-- Right Content -->
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="post-details3 mb-50">
                                            <!-- Small Section Tittle -->
                                            <div class="small-section-tittle">
                                                <h4>Job Overview</h4>
                                            </div>
                                            <ul>
                                                <li>Posted date : <span>' . $posted_date . '</span></li>
                                                <li>Location : <span>' . $location . '</span></li>
                                                <!-- Add more job overview details here -->
                                            </ul>
                                            <div class="apply-btn2">
                                                <a href="#" class="btn">Apply Now</a>
                                            </div>
                                        </div>
                                        <div class="post-details4 mb-50">
                                            <!-- Small Section Tittle -->
                                            <div class="small-section-tittle">
                                                <h4>Company Information</h4>
                                            </div>
                                            <span>' . $company_name . '</span>
                                            <!-- Add more company information details here -->
                                        </div>
                                        
                                        <form method="POST" action="like_job.php">
                                            <input type="hidden" name="liked_post_id" value="' . $job_id . '">';
                                            
                                            // Check if the user has already liked this post
                                            $check_liked_not = "SELECT COUNT(*) AS is_liked FROM likes WHERE liked_post = '$id' AND liked_user = '$user_id'";
                                            $check_liked_not_result = $connection->query($check_liked_not);
                                            $liked_row = $check_liked_not_result->fetch_assoc();
                                            $is_liked = $liked_row['is_liked'];
                                            
                                            if ($is_liked) {
                                                echo '<input type="submit" name="unlike" value="unlike">';
                                            } else {
                                                echo '<input type="submit" name="like" value="like">';
                                            }
                                            
                                            echo '</form>
                                    </div>
                                </div>';
                            }
                        } else {
                            echo '<p>No job details found for the given job ID.</p>';
                        }

                        mysqli_free_result($result);
                    } else {
                        echo "Error: " . mysqli_error($connection);
                    }
                }
            }
            ?>
        </div>
    </div>
    <!-- job post company End -->
</main>
<?php
include 'footer.php';
?>
