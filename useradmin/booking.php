<?php
ob_start();
require('db.php');
include("auth.php");
include("include/header.php");
include("include/head.php");
$email=$_SESSION['email'];
$query = "SELECT * from booking where email='".$email."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" > 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 style=" font-family: fantasy; color: #556B2F;  background: linear-gradient(to left, #33ccff 0%, #999966 100%);">Booking</h1>
      <ol class="breadcrumb">
        <li><a href="profile1.php">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Your Booking</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
 <?php
  if(isset($_GET['status'])){
    echo "<div class='form'><h3 style='color:red;'>".$_GET['status']."</h3></div>";
  }
?>             
      <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header bg-til" style="   background: linear-gradient(to bottom, #33ccff 0%, #ffff00 100%);">
              <h5 class="text-white m-b-0">Update You Booking </h5>

            </div>
            <div class="card-body">
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$number =$_REQUEST['number'];
$Service_requirment =$_REQUEST['Service_requirment'];
//$submittedby = $_SESSION["username"];
$update="update booking set name='".$name."', email='".$email."', number='".$number."', Service_requirment='".$Service_requirment."' where email='".$email."'";
mysqli_query($con, $update) or die(mysqli_error($con));
//$status = "Record Updated Successfully. </br></br><a href='booking.php'>View Updated Record</a>";
//echo '<p style="color:#FF0000;">'.$status.'</p>';
$status = "Record Updated Successfully.";
header('location: booking.php?status='.$status); // to redirect
exit;
}else {
?>

              <form action="" method="POST">

                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Name</label>
                    <input class="form-control" placeholder="First Name" type="text" name="name" value="<?php echo $row['name'];?>">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">E-mail</label>
                    <input class="form-control" placeholder="E-mail" type="text" name="email" value="<?php echo $row['email'];?>"> 
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Contact Number</label>
                    <input class="form-control" placeholder="Contact Number" type="text" name="number" value="<?php echo $row['number'];?>"> 
                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <label class="control-label">Your Service Requirment</label>
                    <input class="form-control" placeholder="Service Requirment" type="text" name="Service_requirment" value="<?php echo $row['Service_requirment'];?>"> 
                    <span class="" aria-hidden="true"></span> </div>
                </div>
                
                <!-- <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="custom-file center-block block">
                      <input id="file" class="custom-file-input" type="file">
                      <span class="custom-file-control"></span> </label>
                  </div>
                </div> -->
                <div class="col-md-12">
                  <button type="submit" name="submit" value="Update" class="btn btn-success " style=" background: linear-gradient(to left, #33ccff 0%, #0000cc 100%);">Update</button>
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

<div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover no-wrap">
<?php
$count=1;
//$sel_query="Select * from booking ORDER BY id desc;";
$email=$_SESSION['email'];
$query = "SELECT * from booking where email='".$email."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
                  <thead>
                    <tr style="color: chocolate;">
                      <th >Edit</th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Contact Number</th>
                      <th>Your Service Requirment</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    <tr style="color: #3366ff;">
                      <td><a href="booking.php?id=<?php echo $row["id"]; ?>"><span class="fa fa-edit"></span></a></td>
                      <td><?php echo $row["name"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                      <td><?php echo $row["number"]; ?></td>
                      <td><?php echo $row["Service_requirment"]; ?></td>
                      
                    </tr>
                  </tbody><?php $count++; } ?>
                </table>
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
ob_end_flush();
?>