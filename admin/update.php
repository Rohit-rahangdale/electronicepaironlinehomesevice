<?php
 
include("auth.php");
include("include/header.php");
include("include/head.php");


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
            <?php 
           
            include 'db.php';
            $id=$_GET['id'];
$selectquery = "SELECT * from repairman where id=$id"; 
$query = mysqli_query($con, $selectquery) ;
$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
  $id=$_GET['id'];
	$name = mysqli_real_escape_string($con,   $_POST['name']);
	$email = mysqli_real_escape_string($con,   $_POST['email']);

	$mobile = mysqli_real_escape_string($con,   $_POST['mobile']);
   
	
	$address = mysqli_real_escape_string($con ,  $_POST['address']);
  $service = mysqli_real_escape_string($con ,  $_POST['service']);
  $date = mysqli_real_escape_string($con ,  $_POST['date']);
	// $insertquery="INSERT INTO `repairman`( `name`, `email`, `mobile`, `address`, `service`, `ragistrationdate`) VALUES ('$name','$email','$mobile','$address','$service','$date')";
  // UPDATE `repairman` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`mobile`='[value-4]',`address`='[value-5]',`service`='[value-6]',`ragistrationdate`='[value-7]' WHERE 1
  $updatequery="update repairman set id=$id, name='$name', email='$email', mobile='$mobile', address='$address', service='$service', ragistrationdate='$date' WHERE id=$id";
	$query = mysqli_query($con, $updatequery);
	if($query){
  
		?>
   
	<script>
   
	alert('updated  Successful');
 
  
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
      
              <form action="" method="POST">
                
               
              <div class="row">
                <div class="col-md-8">
                <h5 class="text-white m-b-0">Admin Profile</h5>
            
                  <div class="form-group has-feedback">
                    <label class="control-label">Name</label>
                    <input class="form-control" placeholder="Full  Name" type="text" name="name" value="<?php echo $result["name"]; ?>">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">E-mail</label>
                    <input class="form-control" placeholder="E-mail" type="text" name="email" value="<?php echo $result["email"]; ?>"> 
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Contact Number</label>
                    <input class="form-control" placeholder="Contact Number" type="number" name="mobile" value="<?php echo $result["mobile"]; ?>"> 
                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Address</label>
                    <input class="form-control" placeholder="Address" type="text" name="address" value="<?php echo $result["address"]; ?>"> 
                   
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">service</label>
                    <input class="form-control" placeholder="service" type="text" name="service" value="<?php echo $result["service"]; ?>"> 
                   
                </div>
                    
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Your Registration Date</label>
                    <input class="form-control" placeholder="Your Registration Date" type="date" name="date" value="<?php echo $result["ragistrationdate"]; ?>"> 
                     </div>
                </div>
                
                
                </div>
                <div class="col-md-12">
                  <button  type="submit" name="submit" value="" class="btn btn-success">Update</button>
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

