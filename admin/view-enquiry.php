<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
$vid=$_GET['viewid'];
$isread=1;
$query=mysqli_query($con, "update   tblcontact set IsRead ='$isread' where ID='$vid'"); 
  ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System</title>
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
           View Enquiry
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">View Enquiry
                </li>
                
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->


<?php
             
$ret=mysqli_query($con,"select * from tblcontact where ID=$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<table class="table table-bordered mg-b-0" style="font-size: 20px;">
                                   
                                   <tr style="color: blue;font-size: 20px;text-align: center;"><td colspan="6">View Enquiry</td></tr>
              
                <tr>
    <th scope style="font-size: 15px;">Name</th>
    <td><?php  echo $row['Name'];?></td>
    <th style="font-size: 15px;" scope>Email</th>
    <td><?php  echo $row['Email'];?></td>
   <th style="font-size: 15px;" scope>Contact Number</th>
    <td><?php  echo $row['PhoneNumber'];?></td>
                </tr>
                <tr>
    
    <th style="font-size: 15px;">Message</th>
    <td colspan="5"><?php  echo $row['Message'];?></td>
  </tr>
              </table><?php $cnt=$cnt+1;} ?>

 
     


      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
 

</body>
</html>
<?php  } ?>
