<!DOCTYPE html>
<html lang="en">
<?php
include("auth.php"); //include auth.php file on all secure pages 
include("include/header.php");
include("include/head.php");
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Change Password</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Change Password</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                  <div class="card-body">
                   
                    
                <!--second tab-->
                <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                  
                <div class="tab-pane" id="settings" role="tabpanel">
                  <div class="card-body">
                    <form class="form-horizontal form-material">
                      <div class="form-group">
                        <label class="col-md-12">Old Password</label>
                        <div class="col-md-12">
                          <input class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">New Password</label>
                        <div class="col-md-12">
                          <input class="form-control form-control-line" name="example-email" id="example-email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Confirm New Password</label>
                        <div class="col-md-12">
                          <input value="password" class="form-control form-control-line" type="password">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button class="btn btn-success">Update Password</button>
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
