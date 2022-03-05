<!DOCTYPE html>
<html>
<?php
include("head.php");
include("header.php");
?>

<body class="hidden-bar-wrapper">
<!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image: url(https://via.placeholder.com/1920x975); height: 50px; padding-top: 15px; padding-bottom: 125px;">
    	<div class="auto-container">
			<h1>get in touch</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li>Contact us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Contact Page Section -->
    <section class="contact-page-section" style="padding-top: 20px;">
    	<div class="auto-container">
			<!-- Upper Box -->
			<div class="upper-box">
				<div class="clearfix">
				
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="img/slide2.jpg" alt="" style="width: 600px; height: 370px;" />
							</div>
						</div>
					</div>
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h4>Have a question or <br> Need to set up your <br> security system?</h4>
							<div class="text">Give us a call and our experienced and friendly staff would be happy to assist you.</div>
							<ul class="info-list">
								<li><span class="icon flaticon-call-3"></span><a href="tel:1-700-231-0025"><?php echo $row['mobile']?></a></li>
								<li><span class="icon flaticon-email-5"></span><a href="mailto:support@teknik.net">Email: <?php echo $row['email']?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
        	<div class="row clearfix">
            	
				<!-- Contact Box -->
				<div class="contact-box col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<h5>Corporate Office</h5>
						<div class="text"> Basic Computer <br>krashna Dairy Gujri Market Road <br> Balaghat</div>
					</div>
				</div>
				
				<!-- Contact Box -->
				<div class="contact-box col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<h5>Customer Support</h5>
						<ul>
							<li>Monday - Friday <br> 09:00 - 18:00</li>
							<li>Saturday - Sunday <br> 10:00 - 16:00</li>
						</ul>
					</div>
				</div>
				
				<!-- Contact Box -->
				<div class="contact-box col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<h5>Contact us</h5>
						<?php
require('db.php');

$query = "SELECT * from persons where id='1'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
						<a class="phone" href="tel:+1-700-231-0025"><?php echo $row['mobile']?></a>
						<div class="emails">
							<a href="mailto:support@teknik-security.net">support@teknik-security.net</a>
							<a href="mailto:info@domain.com">info@domain.com</a>
						</div>
					</div>
				</div>
				
            </div>
        </div>
    </section>
    <!-- End Contact Page Section -->
	
	<!-- Fluid Section Two -->
    <section class="fluid-section-two">
    	<div class="outer-container clearfix">
        
        	<!--Map Column-->
            <div class="map-column">
                <!--Map Outer-->
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" width="100%" height="800px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        
        	<!--Form Column-->
            <div class="form-column">
                <div class="inner-column">
                	<!-- Sec Title -->
					<div class="sec-title">
						<h2>Send Message & feedback</h2>
						<div class="text">Have a query? Submit to us here.</div>
					</div>
                	<div class="content">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['submit'])){
		$fname = stripslashes($_REQUEST['fname']); // removes backslashes
		$fname = mysqli_real_escape_string($con,$fname); //escapes special characters in a string
		$lname = stripslashes($_REQUEST['lname']); // removes backslashes
		$lname = mysqli_real_escape_string($con,$lname); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$mobile = stripslashes($_REQUEST['mobile']);
		$mobile = mysqli_real_escape_string($con,$mobile);
		$msg = stripslashes($_REQUEST['msg']);
		$msg = mysqli_real_escape_string($con,$msg);

        $query = "INSERT into `feedback` (fname, lname, email, mobile, msg) VALUES ('$fname', '$lname', '$email', '$mobile', '$msg')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Your Information successfully Submitted.";
        }
    }else{
?>
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="">
                                <div class="row clearfix">
                                    
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="fname" placeholder="First Name" required>
                                    </div>
									
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="lname" placeholder="Last Name" required>
                                    </div>
									
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>
									
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="mobile" placeholder="Phone No." required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="msg" placeholder="Question or Request"></textarea>
                                    </div>
                                    
                                    <div class="form-group btn-column col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" name="submit" class="theme-btn submit-btn"><span class="txt">send message <i class="fa fa-angle-right"></i></span></button>
                                    </div>
                                    
                                </div>
                                
                            </form>
                        </div>
                       <?php } ?> 
                    </div>
                </div>
            </div>
            
        </div>
	</section>
    <!-- End Fluid Section One -->
	
	<!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/desktop2.jpg" style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/laptop6.jpg" style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><a href="#"><img src="assets/images/refrigrator4.png" style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><a href="#"><img src="assets/images/ac5png.png" style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/rowater4jpg.jpg"style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><a href="#"><img src="assets/images/tv6.jpg" style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><img src="assets/images/geyser4.png" style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><a href="#"><img src="assets/images/cooler2.png" style="width: 240px; height: 115px;"
										alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!-- End Clients Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="phone flaticon-call-3"></div>
						<div class="text"><span>Call us TODAY for a FREE Quote</span> - Your Home  <br> Online Electronic Ripairing  System : <span><?php echo $row['mobile']?></span></div>
					</div>
				</div>
				<!-- Button Column -->
				<div class="button-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<a href="contact.html" class="theme-btn btn-style-two"><span class="txt"><i class="flaticon-shield-1"></i> free estimate</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Call To Action Section -->
	

<?php
include("footer.php");
?>
<!-- End Header Search -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
<script src="assets/js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>