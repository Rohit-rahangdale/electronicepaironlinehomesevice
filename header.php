<div class="page-wrapper">
<!--Header-Upper-->
  <!-- Preloader -->
  <div class="preloader"></div>
 	
 	<!-- Main Header-->
    <header class="main-header header-style-one">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
					
					<!-- Top Left -->
                    <div class="top-left pull-left">
<?php
require('db.php');
$query = "SELECT * from persons where id='1'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
						<!-- Info List -->
                        <ul class="info-list">
							<li><span class="icon fa fa-phone-square"></span> <a href="#"> Call : <?php echo $row['mobile']?></a></li>
							<li><span class="icon fa fa-envelope"></span> <a href="mailto:support@my-domain.com">Email : <?php echo $row['email']?></a></li>
						</ul>
						
                    </div>
					
					<!-- Top Right -->
					<div class="top-right pull-right">
						<!-- Social Box -->
						<ul class="social-box">
							<li><a href="#" class="fa fa-facebook-f"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							<li><a href="#" class="fa fa-linkedin"></a></li>
						</ul>
					</div>
					
                </div>
            </div>
        </div>
<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container clearfix">

						<div class="pull-left logo-box">

							<a href="index.html"><img src="assets/images/logo.png" alt="" title=""
										style="height: 70px; width: 70px; margin-top: 20px;  ">  </a> 
						</div>

						<div class="nav-outer clearfix">
							<!--Mobile Navigation Toggler-->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->
									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="current"><a href="index.php">Home</a></li>
										<li class="dropdown"><a href="services.php">Service</a>
											<ul>
												<li><a href="services.php">AC Repair</a></li>
												<li><a href="services.php">RO/Water Purifier Repair</a></li>
												<li><a href="services.php">TV Repair</a></li>
												<li><a href="services.php">Geyser Repair</a></li>
												<li><a href="services.php">Laptop Repair</a></li>
												<li><a href="services.php">All Services</a></li>

											</ul>
										</li>
										<!-- <li class="dropdown"><a href="">SignUp</a>
											<ul>
												<li><a href="usersingup.php">costumer signUp</a></li>
												<li><a href="servprosing.php">service privider SignUp</a></li>

											</ul>
										</li> -->
										<li><a href="book.php">Registration & Booking</a></li>
										<li><a href="useradmin/login.php">Login</a></li>
										<li ><a href="about.php">About Us</a>
											<!-- <ul>
												<li><a href="blog-classic.html">About service provider</a></li>
												<li><a href="about.php">About my Company</a></li>

											</ul> -->
										</li>
										<li><a href="contact.php">Contact us</a></li>
										<li><a href="help.php">Help</a></li>
									</ul>
								</div>
							</nav>

							<!-- Main Menu End-->
							<!-- <div class="outer-box clearfix"> -->

								<!-- Search Box -->
								<!-- <div class="search-box-outer">
									<div class="dropdown">
										<div class="search-box-btn"><span class="fa fa-search"></span></div>
									</div>
								</div> -->

								<!-- Quote Btn -->
							

							<!-- </div> -->
						</div>

					</div>

				</div>
			</div>
			<!--End Header Upper-->
			<!-- Sticky Header  -->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="index.html" title=""><img src="assets/images/logo.png" alt="" title="" style="height: 55px; width: 55px;" ></a>
					</div>
					<!--Right Col-->
					<div class="pull-right">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav><!-- Main Menu End-->

					</div>
				</div>
			</div><!-- End Sticky Menu -->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-multiply"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index.html"><img src="https://via.placeholder.com/220x115" alt=""
								title=""></a></div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div><!-- End Mobile Menu -->
</header>
		<!-- End Main Header -->