<?php
require('db.php');
include("auth.php");
include("include/header.php");
include("include/head.php");
//$id=$_REQUEST['id'];
$query = "SELECT * from persons where id='1'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 style="font-family: fantasy;">ADMIN PROFILE</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Home</a></li>
        <li><i class="fa fa-angle-right"></i>ADMIN PROFILE</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
              
      <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Admin Profile</h5>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$mobile =$_REQUEST['mobile'];
$submittedby = $_SESSION["username"];
$update="update persons set name='".$name."', email='".$email."', mobile='".$mobile."' where id='1'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br><a href='profile.php'><b>View Updated Record</b></a>";
//header("Location: dashboard.php");
echo '<p style="color:#eaff4f;">'.$status.'</p>';

}else {
?>
            </div>
            <div class="card-body">
      
              <form action="" method="POST">
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Name</label>
                    <input class="form-control" placeholder="First Name" type="text" name="name" value="<?php echo $row['name']?>">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">E-mail</label>
                    <input class="form-control" placeholder="E-mail" type="text" name="email" value="<?php echo $row['email']?>"> 
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Contact Number</label>
                    <input class="form-control" placeholder="Contact Number" type="text" name="mobile" value="<?php echo $row['mobile']?>"> 
                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <!-- <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="custom-file center-block block">
                      <input id="file" class="custom-file-input" type="file">
                      <span class="custom-file-control"></span> </label>
                  </div>
                </div> -->
                <div class="col-md-12">
                  <button type="submit" name="submit" value="Update" class="btn btn-success">Update</button>
                </div>
                 </div>
              </form>
           <?php } ?>
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
