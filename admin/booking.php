<?php
ob_start();
require('db.php');
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
      <h1>Booking User</h1>
      <ol class="breadcrumb">
        <li><a href="profile1.php">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Booking User</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
 <?php
$count=1;
//$sel_query="Select * from booking ORDER BY id desc;";
$email=$_SESSION['email'];
$query = "SELECT * from booking ORDER BY id desc";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>             
      <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Booking User</h5>

            </div>
            <div class="card-body">
              
<div class="table-responsive">

                <table id="example2" class="table table-bordered table-hover no-wrap">

                  <thead>
                    <tr style="color: #cc0099;">
                    <th>id</th>
                      <th>Status</th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Contact Number</th>
                      <th>Your Service Requirment</th>
                      <th>Message</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                    <td><?php echo $row["id"]; ?></td>
                      <td><a href="#"><span class="label label-success">Active</span></a></td>
                     
                      <td><?php echo $row["name"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                      <td><?php echo $row["number"]; ?></td>
                      <td><?php echo $row["Service_requirment"]; ?></td>
                     v<td><?php echo $row["message"]; ?></td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $count++; } ?>

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