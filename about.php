<?php
include("head.php");
include("header.php");
?>
<!-- Page Title -->
<section class="page-title" style="background-image: url('assets/images/about.jpg')">
    <div class="auto-container">
        <h1>About Us</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>About</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- About Section -->
<div class="about-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title"><span class="icon"><img src="assets/images/icons/separater.png" alt="" /></span> ELECTRONIC REPAIR - Online Home Service</div>
                    <h2>We’re electronic repair online service provider since 2021</h2>
                    <div class="text">
                        <p>Home electronic equipment is repaired in our website, our repair team is from Balaghat, through this website we are giving you 12 types of</p>
                        <p>Which is given to you in our service page And the service you want, click on the service and make a booking</p>
                    </div>
                    <?php
require('db.php');

$query = "SELECT * from persons where id='1'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
                    <div class="question">Call to ask any question <a href="contact.php"><?php echo $row['mobile']?></a></div>
                    <!-- <div class="signature">Bores Johnson</div>
                    <div class="designation">Expert Security Advisor</div> -->
                </div>
            </div>

            <!-- Images Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <div class="image">
                        <img src="assets/images/home-calculator.jpg" alt="" style="width: 515px; height: 450px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Section -->

<!-- Featured Section Two -->

<!-- End Featured Section -->
<!-- Faq's Page Section -->
<section class="faq-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>About Us </h2>
            <div class="text">Dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ulamco aliquip ex ea commo <br> day consequat duis aute irure dolor reprehen derit voluptate cillum dolore afugiat nula.</div>
        </div>

        <!-- faq Form -->

        <div class="row clearfix">

            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!--Accordian Box-->
                <ul class="accordion-box faq">

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>Electronic Repair Online Home services is a one stop solution to sort all your home appliances repairing services .
                        </div>
                        <!-- <div class="acc-content">
                            <div class="content">
                                <div class="text">At dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ula co aliquip exd ea comod da consequat duis aute irure dolor reprehenderit volup tate cillum dolore afugiat nula pariatur vitae sagittis diam.</div>
                            </div>
                        </div> -->
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn active">
                            <div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div> It is a new and simple way to schedule professional service such as AC Repair, Refrigerator, Washing Machine, RO Service & other appliances repair .
                        </div>
                        <!-- <div class="acc-content current">
                            <div class="content">
                                <div class="text">At dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ula co aliquip exd ea comod da consequat duis aute irure dolor reprehenderit volup tate cillum dolore afugiat nula pariatur vitae sagittis diam.</div>
                            </div>
                        </div> -->
                    </li>

                  
                  

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>You can rely on our appliances repair service. We use to keep life on as normal, when any of your electrical appliances breakdown.
                        </div>
                        <!-- <div class="acc-content">
                            <div class="content">
                                <div class="text">At dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ula co aliquip exd ea comod da consequat duis aute irure dolor reprehenderit volup tate cillum dolore afugiat nula pariatur vitae sagittis diam.</div>
                            </div>
                        </div> -->
                    </li>

                </ul>

            </div>

            <div class="column col-lg-6 col-md-12 col-sm-12">

                <!--Accordian Box-->
                <ul class="accordion-box faq">

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>As local expert to know home services you can also rely on us for all your home appliances service as getting the right technician can keep you and your device safe and your home secure.
                        </div>
                        <!-- <div class="acc-content">
                            <div class="content">
                                <div class="text">At dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ula co aliquip exd ea comod da consequat duis aute irure dolor reprehenderit volup tate cillum dolore afugiat nula pariatur vitae sagittis diam.</div>
                            </div>
                        </div> -->
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn">
                        <div class="icon-outer"><span class="icon icon-plus flaticon-plus-symbol"></span> <span class="icon icon-minus flaticon-substract-1"></span></div>We are here to handle any of your such issues that needs repair.
                        </div>
                        <!-- <div class="acc-content">
                            <div class="content">
                                <div class="text">At dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ula co aliquip exd ea comod da consequat duis aute irure dolor reprehenderit volup tate cillum dolore afugiat nula pariatur vitae sagittis diam.</div>
                            </div>
                        </div> -->
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
                    <div class="text"><span>Call us TODAY for a FREE Quote</span> - Your Home Electronic <br> Repair Service : <span><?php echo $row['mobile']?></span></div>
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
<?php
include("footer.php")
?>
<!-- End Call To Action Section -->
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