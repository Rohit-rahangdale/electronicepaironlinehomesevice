<!DOCTYPE html>
<html>
<?php
include("head.php");

?>

<body class="hidden-bar-wrapper">
<?php
include("header.php");

?>

	
	<!-- Page Title -->
    <section class="page-title" style="background-image: url('assets/images/help.jpg') " >
    	<div class="auto-container">
			<h1>Read Help</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li>Help</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Faq's Page Section -->
	<section class="faq-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Read Help</h2>
				<div class="text">The objective of this project is to electrical device repairing service provide to customer in the form of service notifications from electrical repairing online home service website. The user can login using E-mail Id and 
Pass word provided by admin.  
 <br> After login the user can make changes in the 
settings if needed and select the type of notifications needed in the user profile page.</div>
			</div>
			
			<!-- faq Form -->
            <div class="faq-search-box">
                <form method="post" action="service.php">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search Your Answer" required style="color: black;">
                        <button type="submit"><span class="icon fa fa-search"></span></button>
                    </div>
                </form>
            </div>
			
			<div class="row clearfix">
                
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!--Accordian Box-->
                    <ul class="accordion-box faq">
                        
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>From our website you can get your electronic items like laptop air conditioner refrigerator etc. repaired.
First user will visit our website</div>
                          
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>Then users can choose the service according to their requirement.</div>
                           
                        </li>
                        
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>After that the user will click on his service and the user will make the booking.</div>
                           
                        </li>
                        
                 
                      
				
						
                    </ul>
                    
                </div>
                
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    
                    <!--Accordian Box-->
                    <ul class="accordion-box faq">
                        
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>After booking, the login page will open and the user will login.</div>
                           
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>After logging in, the user dashboard will open so that users can update their profile.</div>
                           
                        </li>
                        
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>After this, the user's problem will go to the service provider and the service provider will solve the user's problem.</div>
                           
                        </li>
                        
                      
						
					
                       
                    
                    </ul>
                    
                </div>
            </div>
			
		</div>
	</section>
	<!-- End Faq's Page Section -->
		
	<!-- Call To Action Section -->
	<section class="call-to-action-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="phone flaticon-call-3"></div>
                        <?php
require('db.php');
$query = "SELECT * from persons where id='1'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
						<div class="text"><span>Call us TODAY for a FREE Quote</span> - Your Home or <br> Commercial Security System : <span> <?php echo $row['mobile']?></span></div>
					</div>
				</div>
				<!-- Button Column -->
				<div class="button-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<a href="contact.php" class="theme-btn btn-style-two"><span class="txt"><i class="flaticon-shield-1"></i> Call Now</span></a>
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