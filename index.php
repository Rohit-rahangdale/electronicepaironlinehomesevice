<!DOCTYPE html>
<html>
<?php
include("head.php");
?>

<body class="hidden-bar-wrapper">
	<?php
	include("header.php");
	?>



	<!--Banner Section-->
	<section class="banner-section" style="height: 450px;">
		<div class="main-slider-carousel owl-carousel owl-theme">

			<div class="slide" style="padding-top: 80px;">
				<div class="image-layer"><img src="img/slide1.jpg" alt="" title="" style="height: 450px;"></div>
				<div class="auto-container">
					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-boxed">
							<div class="title">Welcome </div>
							<h1>Electronic Repair <br> Online Service Home</h1>
							<div class="btns-box clearfix">
								<?php
								require('db.php');

								$query = "SELECT * from persons where id='1'";
								$result = mysqli_query($con, $query) or die(mysqli_error($con));
								$row = mysqli_fetch_assoc($result);
								?>
								<a href="contact.php" class="theme-btn btn-style-one"><span class="txt"><i class="flaticon-shield-1"></i> get started</span></a>

								<a href="contact.html" class="talk">Talk With Us <?php echo $row['mobile'] ?></a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="slide">
				<!-- <div class="image-layer" style="background-image:url(https://via.placeholder.com/1920x780)"></div> -->
				<div class="image-layer"><img src="img/slide2.jpg" alt="" title=""></div>
				<div class="auto-container">
					<!-- Content Boxed -->
					<div class="content-boxed alternate clearfix">
						<div class="inner-boxed">
							<div class="title">Welcome</div>
							<h1>Electronic Repair<br> Online Service Home</h1>
							<div class="text">Best Home Appliances Repair Services <br>
								Personal assistance for all Electronic home appliances – large or small. ...<br>
								Arrange a visit from a Electronic repair expert online.</div>
							<div class="btns-box clearfix">
								<a href="contact.php" class="theme-btn btn-style-one"><span class="txt"><i class="flaticon-shield-1"></i> get started</span></a>
								<a href="contact.php" class="talk">Talk With Us <?php echo $row['mobile'] ?></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!--End Banner Section-->

	<!-- Featured Section -->
	<section class="featured-section">
		<div class="auto-container">
			<div class="inner-container">

				<div class="clearfix">

					<!-- Featured Block -->
					<div class="featured-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon-box">
									<span><img src="assets/images/ac-icon.png"></span>
								</div>
								<h5><a href="services.php">Air Conditioner Repair Service <br> Balaghat</a></h5>
							</div>
						</div>
					</div>

					<!-- Featured Block -->
					<div class="featured-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon-box">
									<span><img src="assets/images/laptop-icon.png"></span>
								</div>
								<h5><a href="services.php">Laptop Repair Service<br> Balaghat</a></h5>
							</div>
						</div>
					</div>

					<!-- Featured Block -->
					<div class="featured-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="content">
								<div class="icon-box">
									<span><img src="assets/images/washing-machine-icon.png"></span>
								</div>
								<h5><a href="services.php">washing machine Repair Service <br> Balaghat</a></h5>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- End Featured Section -->

	<!-- Security Section -->
	<section class="security-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title"><span class="icon"><img src="assets/images/logo.png" alt="" style="height: 25px; width: 30px;  " /></span> Welcome - Electronic repair</div>
						<h2>Welcome To Electronic Repair Online Service Home </h2>
						<div class="bold-text">Welcome to Electronic Repair Online Service Home! India’s most trusted appliance service and
							repair solutions. With verified professionals who come to your doorstep across India,
							you can repair your Washing Machine, Fridge, Oven, Air Conditioner(AC) and more.Whether it’s a noisy AC,
							leaking fridge or a dead washing machine of any brand or model, we repair them smartly at your convenience. </div>
						<!-- <div class="text">At dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation
							ulamco aliquip ex ea commodo da consequat duis aute irure dolor reprehen derit voluptate
							cillum dolore afugiat nula pariatur vitae sagittis diam facilisis convallis dictumst sed
							ipsum tempore. Excepteur sint occaecat aidatat non proident qu officia deserunt mollit
							anim.</div> -->
						<a href="about.php" class="read-more">Read More about Us <span class="fa fa-angle-right"></span></a>
					</div>
				</div>

				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="assets/images/laptopanddesktop.jpg" alt="" style="width: 555px;; height: 250px;" />
						</div>
						<div class="image">
							<img src="assets/images/home-calculator.jpg" alt="" style="width: 345px;; height: 230px;" />
						</div>
						<div class="image">
							<img src=" assets/images/refregrator.jpg" alt="" style="width: 190px;; height: 170px;" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Security Section -->

	<!-- Premium Section -->
	<section class="premium-section">
		<div class="pattern-layer" style="background-image:url(assets/images/background/pattern-1.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="icon">
					<img src="assets/images/icons/separater.png" alt="" />
				</div>
				<h2> OUR Services</h2>
				<div class="text">Get Home Services by trained professional technicians for your all home appliance repair services. <br>
					Our Services to things is fairly simple. Our home appliance services repair man Perform their <br>
					skills with punctual and dedication. Low cost repairs at your Doorstep in . </div>
			</div>

			<div class="row clearfix">

				<!-- Security Block -->
				<div class="security-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="book.php"><img src="assets/images/Ac service.png" alt="" style="width: 360px; height:260px" /></a>
						</div>
						<div class="lower-content">
							<div class="hover-bg-color"></div>
							<div class="upper-box">
								<div class="icon flaticon-cctv"></div>
								<h5><a href="book.php">AC repair</a></h5>
							</div>
							<div class="text">For this service, you click here and your service requirement.
							</div>
						</div>
					</div>
				</div>

				<!-- Security Block -->
				<div class="security-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="book.php"><img src="assets/images/tv.jpeg" alt="" style="width: 360px; height:260px" /></a>
						</div>
						<div class="lower-content">
							<div class="hover-bg-color"></div>
							<div class="upper-box">
								<div class="icon flaticon-lcd"></div>
								<h5><a href="book.php">TV Repair</a></h5>
							</div>
							<div class="text">For this service, you click here and your service requirement.
							</div>
						</div>
					</div>
				</div>

				<!-- Security Block -->
				<div class="security-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="book.php"><img src="assets/images/geyser repair.jpg" alt="" style="width: 360px; height:260px" /></a>
						</div>
						<div class="lower-content">
							<div class="hover-bg-color"></div>
							<div class="upper-box">
								<div class="icon flaticon-alarm-1"></div>
								<h5><a href="book.php">Geyser Repair</a></h5>
							</div>
							<div class="text">For this service, you click here and your service requirement.
							</div>
						</div>
					</div>
				</div>

				<!-- Security Block -->
				<div class="security-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="book.php"><img src="assets/images/laptop2.jpg" alt="" style="width: 360px; height:260px" /></a>
						</div>
						<div class="lower-content">
							<div class="hover-bg-color"></div>
							<div class="upper-box">
								<div class="icon flaticon-keyboard"></div>
								<h5><a href="book.php">Laptop Repair</a></h5>
							</div>
							<div class="text">For this service, you click here and your service requirement.
							</div>
						</div>
					</div>
				</div>

				<!-- Security Block -->
				<div class="security-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="book.php"><img src="assets/images/RO.jpeg" alt="" style="width: 360px; height:260px" /></a>
						</div>
						<div class="lower-content">
							<div class="hover-bg-color"></div>
							<div class="upper-box">
								<div class="icon flaticon-bell"></div>
								<h5><a href="book.php">RO/Water purifier Repair </a></h5>
							</div>
							<div class="text">For this service, you click here and your service requirement.
							</div>
						</div>
					</div>
				</div>
				<div class="security-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="book.php"><img src="assets/images/washing-machine-service.jpg" alt="" style="width: 360px; height:260px" /></a>
						</div>
						<div class="lower-content">
							<div class="hover-bg-color"></div>
							<div class="upper-box">
								<div class="icon flaticon-bell"></div>
								<h5><a href="book.php">washing machine </a></h5>
							</div>
							<div class="text">For this service, you click here and your service requirement.
							</div>
						</div>

					</div>

				</div>

			</div>


		</div>


		</div>
		<div style=" margin-top:5px; margin-left: 40%;"><a href="services.php">
				<button style="font-size: 30px;  background: linear-gradient(to left, #00ccff 0%, #cc3399 100%);  color:#fff; padding: 10px; border-radius:30px;">
					View All Service </button></a></div>
		</div>

		</div>
	</section>
	<!-- card services -->
	<div id="service">
		<h1>Recommended Services</h1>

		<div id="cd">
			<div class="rd">

				<img src="assets/images/Ac service.png" alt="Avatar" style="width:100%">
				<div class="co">
					<h4><b>AC Repair</b></h4>
					<p>Get nearby ac technicians from our ac service center. We provide Reliable AC repair services that are executed in a Timely manner and widely provided For AC repairs to various customers at the most advantageous price range in the market.We offer Split AC Repair Service to extend the life of these Machines.</p>
					<a href="book.php"> <button style="font-size: 15px; background: linear-gradient(to bottom, #0000ff 0%, #ff66ff 100%); padding: 3px; border-radius:15px;  color:seashell; "> Booking Know </button></a>
				</div>

			</div>
			<div class="rd">
				<img src="assets/images/geyser.jpg" alt="Avatar" style="width:100%">
				<div class="co">
					<h4><b>Geyser Repair</b></h4>
					<p>Is your microwave oven not working and you need a professional microwave oven technician to fix it? We are here to help you. Now you do not need to carry your microwave oven and bring it to us, we will come to your home and repair it. We will give service at your convenience.</p>
					<a href="book.php"> <button style="font-size: 15px; background: linear-gradient(to bottom, #0000ff 0%, #ff66ff 100%); padding: 3px; border-radius:15px;  color:seashell; "> Booking Know </button></a>
				</div>
			</div>
			<div class="rd">
				<img src="assets/images/rowater4jpg.jpg" alt="Avatar" style="width:100%">
				<div class="co">
					<h4><b>RO/Water purifier Repair</b></h4>
					<p>RO/Water purifier and Service by Trained Technician. Instant EROSH Service in 1 Hour. All kind of RO/Water purifier and Repair at home. EROSH Service. Warranty on Parts. 100% Genuine Parts. Service within 1 Hour. Service by Expert Tech.we will come to your home and repair it. We will give service at your convenience.

					</p>
					<a href="book.php"> <button style="font-size: 15px; background: linear-gradient(to bottom, #0000ff 0%, #ff66ff 100%);padding: 3px; border-radius:15px;  color:seashell; "> Booking Know </button></a>
				</div>
			</div>
			<div class="rd">
				<img src="assets/images/refregrator.jpg" alt="Avatar" style="width:100%">
				<div class="co">
					<h4><b>Refrigerator Repair</b></h4>
					<p> Refrigerator Repair Service is reliable and we respond quickly. We offer a single door, double door, and multi-door refrigerator repair services at your Doorstep. We are offering any brand of refrigerator repair services at an affordable prices.we will come to your home and repair it. We will give service at your convenience.

					</p>

					<a href="book.php"> <button style=" font-size: 15px; background: linear-gradient(to bottom, #0000ff 0%, #ff66ff 100%); padding: 3px; border-radius:15px;  color:seashell; "> Booking Know </button></a>

				</div>
			</div>

		</div>




		<!-- End Premium Section -->


		<!-- Call To Action Section -->
		<section class="call-to-action-section">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Title Column -->
					<div class="title-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="phone flaticon-call-3"></div>
							<div class="text"><span>Call us TODAY for a FREE Quote</span> - Your Home <br> Online Electronic Repair Service:
								<span><?php echo $row['mobile'] ?></span>
							</div>
						</div>
					</div>
					<!-- Button Column -->
					<div class="button-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<a href="www.youtub.com" class="theme-btn btn-style-two"><span class="txt"><i class="flaticon-shield-1"></i> free Repair Videos</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Call To Action Section -->

		<!-- End Team Section -->

		<!-- End Testimonial Section -->

		<!-- News Section -->
		<section class="news-section">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="icon">
						<img src="assets/images/icons/separater.png" alt="" />
					</div>
					<h2>To prevent the spread of COVID-19</h2>
					<div class="text">If COVID-19 is spreading in your community, stay safe by taking some simple precautions, such as physical distancing, wearing a mask, keeping rooms well ventilated, avoiding crowds, cleaning your hands, and coughing into a bent elbow or tissue. Check local advice where you live and work </div>
				</div>

				<div class="row clearfix">

					<!-- News Block -->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<h5><a href="blog-single.html">Clean your hands often. Use soap and water.</a></h5>
							<ul class="post-meta">
								<!-- <li><span class="icon flaticon-user"></span>Admin</li> -->
								<!-- <li><span class="icon flaticon-calendar-1"></span>Dec 20, 2019</li> -->
							</ul>
							<div class="text">This eliminates germs including viruses that may be on your hands.</div>
							<a class="read-more" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">Read More <span class="fa fa-angle-right"></span></a>
						</div>
					</div>

					<!-- News Block -->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<h5><a href="blog-single.html">Meet people outside.</a></h5>
							<ul class="post-meta">
								<!-- <li><span class="icon flaticon-user"></span>Admin</li> -->
								<!-- <li><span class="icon flaticon-calendar-1"></span>Dec 20, 2019</li> -->
							</ul>
							<div class="text">Outdoor gatherings are safer than indoor ones, particularly if indoor spaces are small and without outdoor air coming in.</div>
							<a class="read-more" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">Read More <span class="fa fa-angle-right"></span></a>
						</div>
					</div>

					<!-- News Block -->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<h5><a href="blog-single.html">How do we know that COVIDE-19 vACCINES ARE SAFETY </a></h5>
							<ul class="post-meta">
								<!-- <li><span class="icon flaticon-user"></span>Admin</li> -->
								<!-- <li><span class="icon flaticon-calendar-1"></span>Dec 20, 2019</li> -->
							</ul>
							<div class="text">There are strict protections in place to help ensure the safety of all COVID-19 vaccines. </div>
							<a class="read-more" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">Read More <span class="fa fa-angle-right"></span></a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End News Section -->


		<!-- Clients Section -->
		<section class="clients-section">
			<div class="auto-container">

				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/cooler2.png" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/geyser4.png" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/tv6.jpg" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/rowater4jpg.jpg" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/ac5png.png" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/refrigrator4.png" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/laptop6.jpg" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
						<li class="slide-item">
							<figure class="image-box"><a href="services.php"><img src="assets/images/desktop2.jpg" style="width: 240px; height: 115px;" alt=""></a></figure>
						</li>
					</ul>
				</div>

			</div>
		</section>
		<!-- End Clients Section -->
		<?php
		include("footer.php")
		?>


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