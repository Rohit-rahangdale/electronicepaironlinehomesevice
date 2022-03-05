<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])) {

  $email = stripslashes($_REQUEST['email']); // removes backslashes
  $email = mysqli_real_escape_string($con, $email); //escapes special characters in a string
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con, $password);

  //Checking is user existing in the database or not
  $query = "SELECT * FROM `booking` WHERE email='$email' and password='$password'";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));
  $rows = mysqli_num_rows($result);

  if ($rows == 1) {
    $_SESSION['email'] = $email;
    header("Location: profile1.php"); // Redirect user to index.php
  } else {
    //echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
    //header("Location: profile1.php?msg=Username/password is incorrect.");
    $msg = ("Invalid Username or Password."); // message about action performed
    header('location: login.php?msg=' . $msg); // to redirect
    exit;
  }
} else {
?>
  <!DOCTYPE html>
  <html lang="en">
  <?php include("include/head.php"); ?>

  <body class="hold-transition login-page" style="background-color: cadetblue;">
    <a href="../index.php" >
      <h1 style="color:darkorange; margin:10px; padding:15px;  font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size:30px;  ">Home</h1>
    </a>

    <div class="login-box">
      <?php
      if (isset($_GET['msg'])) {
        echo "<div class='form'><h3 style='color:red;'>" . $_GET['msg'] . "</h3></div>";
      }
      ?>
      <div class="login-box-body">

        <h3 class="login-box-msg">Login In</h3>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control sty1" placeholder="E-mail">
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control sty1" placeholder="Password">
          </div>
          <div>
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox">
                  Remember Me </label>
                <a href="forgotpw.php" class="pull-right"><i class="fa fa-lock"></i>Forgot pwd?</a>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4 m-t-1">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->

      <!-- jQuery 3 -->
      <script src="dist/js/jquery.min.js"></script>

      <!-- v4.0.0-alpha.6 -->
      <script src="dist/bootstrap/js/bootstrap.min.js"></script>

      <!-- template -->
      <script src="dist/js/niche.js"></script>
    <?php } ?>
  </body>

  </html>