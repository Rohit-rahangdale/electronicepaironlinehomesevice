<?php
require('db.php');
include("auth.php");
include("include/header.php");
include("include/head.php");
//$id=$_REQUEST['id'];
$query = "SELECT * from booking where id='1'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 style="font-family:fantasy; color:burlywood">Repair Service Man Ragistration</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Home</a></li>
        <li><i class="fa fa-angle-right"></i > Service Provider Man Ragistration</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
              
      <div class="row m-t-3" >
        <div class="col-lg-12">
          <div style="background-image:url('../img/slide1.jpg');">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"> Ragistration</h5>

            </div>
            <div class="card-body">
      
              <form action="" method="POST">
                
               
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Name</label>
                    <input class="form-control" placeholder="Full Name" type="text" name="name" value="">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">E-mail</label>
                    <input class="form-control" placeholder="E-mail" type="text" name="email" value=""> 
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Contact Number</label>
                    <input class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength = "12"  placeholder="Contact Number" type="number" name="mobile" value=""> 
                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Address</label>
                    <input class="form-control" placeholder="Address" type="text" name="address" value=""> 
                   
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Your Repair Service</label>
                    <!-- <input class="form-control" placeholder="Your Repair Service" type="text" name="service" value="">  -->
                    <div class="form-control"> 
										<select class="form-control" style="height: 30px; padding: 0px 25px; border: none;
	border-radius: 40px;  background: #fff;" name="service" required>
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
									
									</div>
                   </div>
                  
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Your Registration Date</label>
                    <input class="form-control" placeholder="Your Registration Date" type="date" name="date" value=""> 
                     </div>
                </div>
                
                
                </div>
                <div class="col-md-12">
                  <button  type="submit" name="submit" value="Update" class="btn btn-success">register</button>
                </div>
                 </div>
              </form>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      
  </div>
  <!-- /.content-wrapper -->
  <?php
  include ("include/footer.php");
  ?>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/niche.js"></script> 

<!-- Chartjs JavaScript --> 
<script src="dist/plugins/chartjs/chart.min.js"></script>
<script src="dist/plugins/chartjs/chart-int.js"></script>

<!-- Chartist JavaScript --> 
<script src="dist/plugins/chartist-js/chartist.min.js"></script> 
<script src="dist/plugins/chartist-js/chartist-plugin-tooltip.js"></script> 
<script src="dist/plugins/functions/chartist-init.js"></script>

</body>
</html>
<?php
// include("db.php");
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($con,   $_POST['name']);
	$email = mysqli_real_escape_string($con,   $_POST['email']);

	$mobile = mysqli_real_escape_string($con,   $_POST['mobile']);
   
	
	$address = mysqli_real_escape_string($con ,  $_POST['address']);
  $service = mysqli_real_escape_string($con ,  $_POST['service']);
  $date = mysqli_real_escape_string($con ,  $_POST['date']);
	$insertquery="INSERT INTO `repairman`( `name`, `email`, `mobile`, `address`, `service`, `ragistrationdate`) VALUES ('$name','$email','$mobile','$address','$service','$date')";
	$query=mysqli_query($con, $insertquery);
	if($query){
		?>
	<script>
	alert(' Successful');
	// header("Location: login.php"); // Redirect user to index.php
	</script>

	
	<?php
	
	}else{
	
		?>
	
		<script>
		
		alert(' Not Successfull');
		</script>
		<?php
	
	}

}
?>
