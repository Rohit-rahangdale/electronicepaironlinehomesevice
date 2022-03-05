<!DOCTYPE html>
<html lang="en">
<?php
  include("auth.php");
  include("include/header.php");
  include("include/head.php");
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1 class="text-black">Contact Us</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Contact Us</li>
      </ol>
    </div>
    
  <!-- Main content -->
     <div class="col-lg-12">
          <div class="info-box">
            <div class="box-body">
              <div class="right-page-header">
                <div class="d-flex">
                  <div class="align-self-center">
                    <h4 class="text-black m-b-1">Contacts / Employee List </h4>
                  </div>
                  <div class="ml-auto">
                    <input id="demo-input-search2" placeholder="search contacts" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover no-wrap">

                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Question</th>
                      <!-- <th>Action</th> -->
                    </tr>
                  </thead>
<?php
require('db.php');
$count=1;
$sel_query="Select * from feedback ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) 
{ 
?>
                  <tbody>
                    <tr>
                      <td><?php echo $row["fname"]; ?></td>
                      <td><?php echo $row["lname"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                      <td><?php echo $row["mobile"]; ?></td>
                      <td><?php echo $row["msg"]; ?></td>
                      <!-- <td><a href="#"><span class="label label-success">Edit</span></a></td> -->
                    </tr>
                  </tbody><?php $count++; } ?>
                </table>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /.col --> 
     </div>
    </div>
    <!-- /.content --> 
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
<!-- jsgrid Tables -->
<script src="dist/plugins/jsgrid/db.js"></script>
<script src="dist/plugins/jsgrid/jsgrid.min.js"></script>
<script src="dist/plugins/jsgrid/jsgrid.int.js"></script>
</body>
</html>