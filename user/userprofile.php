<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $sid=$_SESSION['uid'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    
   

    $query=mysqli_query($con, "update tbluser set FirstName='$fname', LastName='$lname' where ID='$sid'");


    if ($query) {
   
    echo '<script>alert("Profile has been updated")</script>';
  }
  else
    {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

}

 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System|| User Profile</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">

     <style>
    .errorWrap {
    padding: 10px;
    margin: 20px 0 0px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>

</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<?php include('includes/header.php');?>
<?php include('includes/leftbar.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">
           Profile
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Profile
                </li>
                
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->
 
<form name="submit" method="post" enctype="multipart/form-data"> 
<?php
$pid=$_SESSION['uid'];
$ret=mysqli_query($con,"select * from tbluser where ID='$pid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>       
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Profile</h4>

                </div>
                <div class="card-content">
                  <div class="card-body">
 

 <div class="row">

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>First Name                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="firstname" name="firstname" value="<?php  echo $row['FirstName'];?>" type="text" required>
    </div>
</fieldset>
                   
</div>


<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Last Name                 </h5>
   <div class="form-group">

   <input class="form-control white_bg" id="lastname" name="lastname" value="<?php  echo $row['LastName'];?>"  type="text" required>
                          </div>
                        </fieldset>
                      </div>
                    </div>

<div class="row">

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Contact Number                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="contactno" name="contactno" value="<?php  echo $row['MobileNumber'];?>" type="text" required readonly='true'>
    </div>
</fieldset>
                   
</div>


<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Email                </h5>
   <div class="form-group">

   <input class="form-control white_bg" id="email" name="email"  type="email" value="<?php  echo $row['Email'];?>" required readonly='true'>
                          </div>
                        </fieldset>
                      </div>


                    </div>
<?php } ?>  

<div class="row" style="margin-top: 2%">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Update</button>
</div>
</div>



 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Formatter end -->
      </form>  
     

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->


</body>
</html>
<?php  } ?>
