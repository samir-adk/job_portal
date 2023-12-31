<?php
session_start();

if(empty($_SESSION['user_name'])) {
  header("Location:index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your CSS and other meta tags here -->
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="slider-area" style="margin-left:  50px;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52887.31101663001!2d-118.16010861550998!3d34.057799018392046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2d071ead0ae9f%3A0xec7b5ef82544d465!2sRosemead%2C%20CA%2091770%2C%20USA!5e0!3m2!1sen!2sau!4v1694932860286!5m2!1sen!2sau" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <br><br>
    </div>

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <!-- Contact information section -->
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <!-- Your contact information goes here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
