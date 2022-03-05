	<!-- Main Footer -->
    <footer class="main-footer">
			<div class="auto-container">
				<!-- Upper Box -->
				<div class="upper-box">
					<div class="row clearfix">
						<!-- Column -->
						<div class="text-column col-lg-4 col-md-12 col-sm-12">
							<div class="text">Visit Our Office : Basic Computer <br> Krashna Dairy Balaghat(MP) in India
							</div>
						</div>
						<!-- Column -->
						<div class="info-column col-lg-8 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Contact Info Box -->
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<ul class="contact-info-box">
										<li>
	<?php
require('db.php');

$query = "SELECT * from persons where id='1'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
											<span class="icon flaticon-call-3"></span>
											Any Questions?
											<strong><?php echo $row['mobile']?></strong>
										</li>
									</ul>
								</div>

								<!-- Contact Info Box -->
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<ul class="contact-info-box">
										<li>
											<span class="icon flaticon-email-5"></span>
											Send Email
											<strong><?php echo $row['email']?></strong>
										</li>
									</ul>
								</div>

								<!-- Contact Info Box -->
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<ul class="contact-info-box">
										<li>
											<span class="icon flaticon-in-time"></span>
											Monday - Friday
											<strong>9:00am - 6:00pm</strong>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!--Footer Column-->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="logo">
											<a href="index.html"><img src="assets/images/logo.png" style=" width: 100px; height:100px;"
													alt="" /></a>
										</div>
										<div class="text">ELECTRONIC REPAIR ONLINE SERVICE HOME IN BALAGHAT </div>
										<div class="social-links">
											<a href="#" class="fa fa-facebook"></a>
											<a href="#" class="fa fa-twitter"></a>
											<a href="#" class="fa fa-google"></a>
											<a href="#" class="fa fa-linkedin"></a>
										</div>
										<div class="copyright">
											© 2020 Electronic Repair Online Service Home<br>
											<a href="contact.php">Contact</a>  | <a href="help.php">Help</a>
										</div>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h5>Our Repair Services</h5>
										<ul class="list-link">
											<li><a href="services.php">AC Repair Service</a></li>
											<li><a href="services.php">RO/Water Repair Service</a></li>
											<li><a href="services.php">Geyser Repair Service</a></li>
											<li><a href="services.php">Laptop & Desktop Repair Service</a></li>
											<li><a href="services.php">TV Repair service</a></li>
											<li><a href="services.php">Refrigerator Repair Service</a></li>
											<li><a href="services.php">Cooler Repair Service</a></li>
											<li><a href="services.php">View All Service</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h5>My Services</h5>
										<ul class="list-link">
											<li><a href="index.php">Home</a></li>
											<li><a href="services.php">Service</a></li>
											<li><a href="useradmin/login.php">Login</a></li>
									
											<li><a href="about.php">About</a></li>
											<li><a href="help.php">Help</a></li>
											<li><a href="book.php"> registration & Booking</a></li>
											<li><a href="contact.php">Contact Us</a></li>
										</ul>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget location-widget">
										<h5>Our Locations</h5>
										<div class="form-group">
											<select class="custom-select-box">
												<option>Balaghat</option>
												
											</select>
										</div>

										<!-- Map Boxed -->
										<div class="map-boxed">
											<!--Map Outer-->
											<div class="map-outer">
											<div class="map-canvas"
												data-zoom="12"
												data-lat="-37.817085"
												data-lng="144.955631"
												data-type="roadmap"
												data-hue="#ffc400"
												data-title="Envato"
												data-icon-path="assets/images/icons/map-marker.png"
												data-content="balaghat vlc 3000, india <br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- End Main Footer -->

	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

	<!-- Header Search -->
	<div class="search-popup">
		<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
		<button class="close-search"><span class="flaticon-up-arrow"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Services" required="">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>
	<!-- End Header Search -->