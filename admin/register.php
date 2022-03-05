

<!DOCTYPE html>
<html lang="en">
<?php
include("include/head.php");
// include("include/header.php");
?>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">Register Service Man </h3>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control sty1" placeholder="Name">
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control sty1" placeholder="Email">
      </div>
      <div class="form-group has-feedback">
        <input type="number" name="number" class="form-control sty1" placeholder="number">
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="address" class="form-control sty1" placeholder="address">
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="service" class="form-control sty1" placeholder="Your Repair Service">
      </div>
      <div class="form-group has-feedback">
        <input type="date_format" name="date" class="form-control sty1" placeholder="Your Register Date">
      </div>
      
      <!--<div class="form-group has-feedback">
        <input type="password" class="form-control sty1" placeholder="Conform Password">
      </div>-->
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">
               I agree to all Terms </label>
             </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>
    <!-- <div class="m-t-2">Already have an account? <a href="login.php" class="text-center">Sign In</a></div> -->
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/niche.js"></script>
</body>
</html>