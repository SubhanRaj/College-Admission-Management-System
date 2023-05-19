<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
echo "<script>alert('This email or Contact Number already associated with another account');</script>";

    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FirstName, LastName,MobileNumber, Email,  Password) value('$fname', '$lname','$contno', '$email', '$password' )");
    if ($query) {
    echo "<script>alert('You have successfully registered');</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
}
 ?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System|| User Signup
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>

</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="../index.php">
         
              <h3 class="brand-text">College Admission Management System  | User Signup</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container">
        <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="../index.php"><i class="ficon ft-arrow-left"></i></a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0 pb-0">
                  <div class="card-title text-center">
                   <h4 style="font-weight: bold"> CAMS User Signup</h4>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Please Sign Up</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    
     <form  method="post" name="signup" onSubmit="return checkpass();">

                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" name="firstname" id="firstname" required="true" class="form-control input-lg"
                            placeholder="First Name" tabindex="1">
                            <div class="form-control-position">
                              <i class="ft-user"></i>
                            </div>
                          </fieldset>
                        </div>
                       
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" name="lastname" id="lastname" required="true" class="form-control input-lg"
                            placeholder="Last Name" tabindex="2">
                            <div class="form-control-position">
                              <i class="ft-user"></i>
                            </div>
                          </fieldset>
                        </div>
                       
                      </div>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" name="contactno" id="contactno" class="form-control input-lg"
                        placeholder="Contact Number" required="true" maxlength="10" tabindex="3" required data-validation-required-message="Please enter display name.">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"
                        tabindex="4" required="true" required data-validation-required-message="Please enter email address.">
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" name="password" id="password" class="form-control input-lg"
                            placeholder="Password" tabindex="5" required>
                            <div class="form-control-position">
                              <i class="la la-key"></i>
                            </div>
                            <div class="help-block font-small-3"></div>
                          </fieldset>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" name="repeatpassword" id="repeatpassword" class="form-control input-lg"
                            placeholder="Repeat Password" tabindex="6" data-validation-matches-match="password" required="true" 
                            data-validation-matches-message="Password & Confirm Password must be the same.">
                            <div class="form-control-position">
                              <i class="la la-key"></i>
                            </div>
                            <div class="help-block font-small-3"></div>
                          </fieldset>
                        </div>
                      </div>
                
                      <div class="row">
                        <div class="col-6 col-sm-6 col-md-6">
                          <button type="submit" name="submit" class="btn btn-info btn-lg btn-block"><i class="ft-user"></i> Register</button>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6">
                          <a href="login.php" class="btn btn-danger btn-lg btn-block"><i class="ft-unlock"></i> Login</a>

                        </div>
                         <div class="col-6 col-sm-6 col-md-6">
                          

                        </div>


                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer fixed-bottom footer-dark navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; <?php echo date('Y');?> <a class="text-bold-800 grey darken-2" >CAMS </a>, All rights reserved. </span>
    </p>
  </footer>
  <script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
</body>
</html>