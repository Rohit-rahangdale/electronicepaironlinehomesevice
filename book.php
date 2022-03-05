<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("head.php");
include("header.php");
?>

 <div id="singin">
    <div class="mains">
        <div class="containers">
		<div class="signup-contents" style=" width: 562px;  margin-right: 0px; background:rgb(192, 192, 192);  float: right;">
<?php
include("db.php");
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$number = mysqli_real_escape_string($con,$_POST['number']);
    $dob = mysqli_real_escape_string($con,$_POST['dob']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	$date = mysqli_real_escape_string($con,$_POST['date']);
    $services = mysqli_real_escape_string($con,$_POST['services']);
	$message = mysqli_real_escape_string($con,$_POST['message']);
	$insertquery="insert into booking( name, email, password, number, date_of_birth, address, Service_date, Service_requirment, message) VALUES ('$name','$email','$password','$number','$dob','$address','$date','$services','$message')";
	$query=mysqli_query($con, $insertquery);
	if($result){
            //echo "<div class='form'><h3>You are Booking successfully.</h3></div>";
		 	$_SESSION['email'] = $email;
            header("Location: useradmin/profile1.php");
        }
    }else{
?>
                <form  action="" method="POST"   class="signup-form">
                    <h1 style="color: #000066; font-family: Times New Roman, Times, serif;" >Your Booking & Registration</h1>
                    <!-- <p class="desc">to get discount 10% when pre - order <span>“Batman Beyond”</span></p> -->
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" placeholder=" Full Name"required/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength = "10"   class="form-input" name="password" id="password" placeholder="Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="tel"    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength = "12" class="form-input" name="number" placeholder="Phone Number" required/>
                       
                    </div>
                
                  
                    <div class="form-group">
                        <input type="date"  class="form-input" name="dob"  placeholder="Date Of Birth " required/>
                        <span class="form-label"> Date Of Birth </span>
                       
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="address" placeholder="Your Addres" required/>
                       
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-input" name="date"  placeholder="service date" required/>
                        <span class="form-label"> service date</span>
                       
                    </div>
                 	<div class="row">
								<div class="col-md-">
									<div class="form-group"> 
										<select class="form-control" style="height: 50px; padding: 0px 25px; border: none;
	border-radius: 40px;  background: #fff;" name="services" required>
											<option value="" selected hidden>Select Your Service Requirment </option>
											<option>AC Repair</option>
											<option>Geyser Repair</option>
											<option>Cooler Repair </option>
											<option>laptop Repair</option>
											<option>Desktop Repair</option>
											<option>Waching Machine Repair</option>
											<option>TV Repair</option>
											<option>RO/Water Repair </option>
											<option>refregrator Repair</option>
											<option>Ceiling Fan Repair</option>
											<option>Home Theater Repair</option>
											<option>Cooking machine  Repair </option>
										
										
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">service Requirment</span>
									</div>
								</div>
							</div>
                            <div class="form-group">
                        <input type="text" class="form-input" name="message"  id="Addres" placeholder="Question or Request"/>
                       
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">
                    	<a href="useradmin/login.php">
                        <input type="submit" name="submit" class="form-submit submit" />
                 </a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>

    </div>
    </div>
<?php
include("footer.php");
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
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
ob_end_flush();
?>