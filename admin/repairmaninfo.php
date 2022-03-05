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
      <h1>SERVICE MAN INFO</h1>
      <ol class="breadcrumb">
        <li><a href="profile.php">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Service Man</li>
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
              <h5 class="text-white m-b-0">SERVICE MAN INFO</h5>

            </div>
            <div class="card-body">
              
<div class="table-responsive">

                <table id="example2" class="table table-bordered table-hover no-wrap">

                  <thead>
                    <tr>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>id</th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Contact Number</th>
                      <th> curent address</th>
                      <th>Your Repairing Service </th>
                      <th>Your Ragistration Date </th>    
                    </tr>
                  </thead>

                  <tbody>
                  <?php

//$sel_query="Select * from booking ORDER BY id desc;";

$selectquery = "SELECT * from repairman";
$query = mysqli_query($con,$selectquery);
while($result = mysqli_fetch_assoc($query)) { ?>  
                    <tr>
                      <td><a href="update.php?id=<?php echo $result["id"]; ?>"><span class="fa fa-edit"></span></a></td>
                      <td><a href="delete.php?id=<?php echo $result["id"]; ?>"><span class="fa fa-trash" style="color: red;"></span></a></td>
                      <td><?php echo $result["id"]; ?></td>
                      <td><?php echo $result["name"]; ?></td>
                      <td><?php echo $result["email"]; ?></td>
                      <td><?php echo $result["mobile"]; ?></td>
                      <td><?php echo $result["address"]; ?></td>
                      <td><?php echo $result["service"]; ?></td>
                      <td><?php echo $result["ragistrationdate"]; ?></td>
                      
                    </tr>
                    <?php 
}
 ?>
                  </tbody>
                </table>
              </div>

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
ob_end_flush();
?>