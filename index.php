<!DOCTYPE html>
<html>
<head>
<title>Job Portal Website</title>
<meta name="description" content="Best Job Portal Website in Sydney">
<meta name="keywords" content="Job Portal">
<<<<<<< HEAD
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

  <?php
  session_start();
   include 'header.php' ;
   ?>
=======

>>>>>>> 5f0b3b83c0f2fdb2c9f6563ce1566bbe0540b9fa
</head>
<body>
<script src="./js/custom.js"></script>

   <?php
	
	if (isset($_SESSION['logged_user'])) {
	    $user_name = $_SESSION['logged_user'];
	    echo "Welcome, $user_name!";
	} else {
	    echo "You are not logged in.";
	}

?>

<main>

<!-- slider Area Start-->
<div class="slider-area ">
	<!-- Mobile Menu -->
	<div class="slider-active">
		<div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-9 col-md-10">
						<div class="hero__caption">
							<h1>Find the most exciting startup jobs</h1>
						</div>
					</div>
				</div>
				<!-- Search Box -->
				<div class="row">
					<div class="col-xl-8">
						<!-- form -->
						<form action="#" class="search-box">
							<div class="input-form">
								<input type="text" placeholder="Job Tittle or keyword">
							</div>
							<div class="select-form">
								<div class="select-itms">
									<select name="select" id="select1">
										<option value="">Location BD</option>
										<option value="">Location PK</option>
										<option value="">Location US</option>
										<option value="">Location UK</option>
									</select>
								</div>
							</div>
							<div class="search-form">
								<a href="#">Find job</a>
							</div>	
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div></div>
 
</main><a href="job_post.php">job post</a>
<a href="login.php">login</a>
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
 


<!-- slider Area End-->
<!-- Our Services Start -->
<div class="our-services section-pad-t30">
	<div class="container">
		<!-- Section Tittle -->
		<div class="row">
			<div class="col-lg-12">
				<div class="section-tittle text-center">
					<span>FEATURED TOURS Packages</span>
					<h2>Browse Top Categories </h2>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-contnet-center">
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-tour"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Design & Creative</a></h5>
						<span>(653)</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-cms"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Design & Development</a></h5>
						<span>(658)</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-report"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Sales & Marketing</a></h5>
						<span>(658)</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-app"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Mobile Application</a></h5>
						<span>(658)</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-helmet"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Construction</a></h5>
						<span>(658)</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-high-tech"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Information Technology</a></h5>
						<span>(658)</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-real-estate"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Real Estate</a></h5>
						<span>(658)</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-ion">
						<span class="flaticon-content"></span>
					</div>
					<div class="services-cap">
					   <h5><a href="find_a_job.php">Content Writer</a></h5>
						<span>(658)</span>
					</div>
				</div>
			</div>
		</div>
		<!-- More Btn -->
		<!-- Section Button -->
		<div class="row">
			<div class="col-lg-12">
				<div class="browse-btn2 text-center mt-50">
					<a href="find_a_job.php" class="border-btn2">Browse All Sectors</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Our Services End -->
<!-- Online CV Area Start -->
 <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="assets/img/gallery/cv_bg.jpg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="cv-caption text-center">
					<p class="pera1">FEATURED TOURS Packages</p>
					<p class="pera2"> Make a Difference with Your Online Resume!</p>
					<a href="#" class="border-btn2 border-btn4">Upload your cv</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Online CV Area End-->
<!-- Featured_job_start -->
<section class="featured-job-area feature-padding">
	<div class="container">
		<!-- Section Tittle -->
		<div class="row">
			<div class="col-lg-12">
				<div class="section-tittle text-center">
					<span>Recent Job</span>
					<h2>Featured Jobs</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<!-- single-job-content -->
				<div class="single-job-items mb-30">
					<div class="job-items">
						<div class="company-img">
							<a href="job_details.php"><img src="assets/img/icon/job-list1.png" alt=""></a>
						</div>
						<div class="job-tittle">
							<a href="job_details.php"><h4>Digital Marketer</h4></a>
							<ul>
								<li>Creative Agency</li>
								<li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
								<li>$3500 - $4000</li>
							</ul>
						</div>
					</div>
					<div class="items-link f-right">
						<a href="job_details.php">Full Time</a>
						<span>7 hours ago</span>
					</div>
				</div>
				<!-- single-job-content -->
				<div class="single-job-items mb-30">
					<div class="job-items">
						<div class="company-img">
							<a href="job_details.php"><img src="assets/img/icon/job-list2.png" alt=""></a>
						</div>
						<div class="job-tittle">
							<a href="job_details.php"><h4>Digital Marketer</h4></a>
							<ul>
								<li>Creative Agency</li>
								<li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
								<li>$3500 - $4000</li>
							</ul>
						</div>
					</div>
					<div class="items-link f-right">
						<a href="job_details.php">Full Time</a>
						<span>7 hours ago</span>
					</div>
				</div>
				 <!-- single-job-content -->
				<div class="single-job-items mb-30">
					<div class="job-items">
						<div class="company-img">
							<a href="job_details.php"><img src="assets/img/icon/job-list3.png" alt=""></a>
						</div>
						<div class="job-tittle">
							<a href="job_details.php"><h4>Digital Marketer</h4></a>
							<ul>
								<li>Creative Agency</li>
								<li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
								<li>$3500 - $4000</li>
							</ul>
						</div>
					</div>
					<div class="items-link f-right">
						<a href="job_details.php">Full Time</a>
						<span>7 hours ago</span>
					</div>
				</div>
				 <!-- single-job-content -->
				<div class="single-job-items mb-30">
					<div class="job-items">
						<div class="company-img">
							<a href="job_details.php"><img src="assets/img/icon/job-list4.png" alt=""></a>
						</div>
						<div class="job-tittle">
							<a href="job_details.php"><h4>Digital Marketer</h4></a>
							<ul>
								<li>Creative Agency</li>
								<li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
								<li>$3500 - $4000</li>
							</ul>
						</div>
					</div>
					<div class="items-link f-right">
						<a href="job_details.php">Full Time</a>
						<span>7 hours ago</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Featured_job_end -->
<!-- How  Apply Process Start-->
<div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
	<div class="container">
		<!-- Section Tittle -->
		<div class="row">
			<div class="col-lg-12">
				<div class="section-tittle white-text text-center">
					<span>Apply process</span>
					<h2> How it works</h2>
				</div>
			</div>
		</div>
		<!-- Apply Process Caption -->
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-process text-center mb-30">
					<div class="process-ion">
						<span class="flaticon-search"></span>
					</div>
					<div class="process-cap">
					   <h5>1. Search a job</h5>
					   <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-process text-center mb-30">
					<div class="process-ion">
						<span class="flaticon-curriculum-vitae"></span>
					</div>
					<div class="process-cap">
					   <h5>2. Apply for job</h5>
					   <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-process text-center mb-30">
					<div class="process-ion">
						<span class="flaticon-tour"></span>
					</div>
					<div class="process-cap">
					   <h5>3. Get your job</h5>
					   <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
					</div>
				</div>
			</div>
		</div>
	 </div>
</div>
<!-- How  Apply Process End-->
<!-- Testimonial Start -->
<div class="testimonial-area testimonial-padding">
	<div class="container">
		<!-- Testimonial contents -->
		<div class="row d-flex justify-content-center">
			<div class="col-xl-8 col-lg-8 col-md-10">
				<div class="h1-testimonial-active dot-style">
					<!-- Single Testimonial -->
					<div class="single-testimonial text-center">
						<!-- Testimonial Content -->
						<div class="testimonial-caption ">
							<!-- founder -->
							<div class="testimonial-founder  ">
								<div class="founder-img mb-30">
									<img src="assets/img/testmonial/testimonial-founder.png" alt="">
									<span>Margaret Lawson</span>
									<p>Creative Director</p>
								</div>
							</div>
							<div class="testimonial-top-cap">
								<p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
							</div>
						</div>
					</div>
					<!-- Single Testimonial -->
					<div class="single-testimonial text-center">
						<!-- Testimonial Content -->
						<div class="testimonial-caption ">
							<!-- founder -->
							<div class="testimonial-founder  ">
								<div class="founder-img mb-30">
									<img src="assets/img/testmonial/testimonial-founder.png" alt="">
									<span>Margaret Lawson</span>
									<p>Creative Director</p>
								</div>
							</div>
							<div class="testimonial-top-cap">
								<p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
							</div>
						</div>
					</div>
					<!-- Single Testimonial -->
					<div class="single-testimonial text-center">
						<!-- Testimonial Content -->
						<div class="testimonial-caption ">
							<!-- founder -->
							<div class="testimonial-founder  ">
								<div class="founder-img mb-30">
									<img src="assets/img/testmonial/testimonial-founder.png" alt="">
									<span>Margaret Lawson</span>
									<p>Creative Director</p>
								</div>
							</div>
							<div class="testimonial-top-cap">
								<p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonial End -->
 <!-- Support Company Start-->
 <div class="support-company-area support-padding fix">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6">
				<div class="right-caption">
					<!-- Section Tittle -->
					<div class="section-tittle section-tittle2">
						<span>What we are doing</span>
						<h2>24k Talented people are getting Jobs</h2>
					</div>
					<div class="support-caption">
						<p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
						<p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
						<a href="about.html" class="btn post-btn">Post a job</a>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6">
				<div class="support-location-img">
					<img src="assets/img/service/support-img.jpg" alt="">
					<div class="support-img-cap text-center">
						<p>Since</p>
						<span>1994</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Support Company End-->
<!-- Blog Area Start -->
<div class="home-blog-area blog-h-padding">
	<div class="container">
		<!-- Section Tittle -->
		<div class="row">
			<div class="col-lg-12">
				<div class="section-tittle text-center">
					<span>Our latest blog</span>
					<h2>Our recent news</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="home-blog-single mb-30">
					<div class="blog-img-cap">
						<div class="blog-img">
							<img src="assets/img/blog/home-blog1.jpg" alt="">
							<!-- Blog date -->
							<div class="blog-date text-center">
								<span>24</span>
								<p>Now</p>
							</div>
						</div>
						<div class="blog-cap">
							<p>|   Properties</p>
							<h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
							<a href="#" class="more-btn">Read more »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="home-blog-single mb-30">
					<div class="blog-img-cap">
						<div class="blog-img">
							<img src="assets/img/blog/home-blog2.jpg" alt="">
							<!-- Blog date -->
							<div class="blog-date text-center">
								<span>24</span>
								<p>Now</p>
							</div>
						</div>
						<div class="blog-cap">
							<p>|   Properties</p>
							<h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
							<a href="#" class="more-btn">Read more »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog Area End -->

</main>
	<!-- <a href="job_post.php">job post</a>
<a href="login.html">login</a>
<a href="index.php">index</a> -->


    

	<?php

  include 'footer.php';

  ?>
<<<<<<< HEAD



   <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
=======
  
>>>>>>> 5f0b3b83c0f2fdb2c9f6563ce1566bbe0540b9fa
</body>

</html>