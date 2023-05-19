<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(strlen($_SESSION['uid'])==0){
header('location:logout.php');
} else {
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>College Admission Management System | Dashboard</title>
 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
   <?php include_once('includes/header.php');?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
 <?php include_once('includes/leftbar.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
                         <?php
$uid=$_SESSION['uid'];
$ret=mysqli_query($con,"select FirstName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FirstName'];

?>
<h3><font color="red">Welcome Back :</font> <?php echo $name;?> </h3>
<hr />

<?php 
$uid=$_SESSION['uid'];
$rtp =mysqli_query($con ,"SELECT AdminStatus from tbladmapplications where UserID='$uid'");
$row=mysqli_fetch_array($rtp);
$adsts=$row['AdminStatus'];
if($row>0){

?>

        <div class="row" >
          <div class="col-xl-10 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                   <a href="addmission-form.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">



<?php if($adsts==1) {?>
                      <h4 align="center">Your Application has been  selected</h4>
                    <?php } else if($adsts==2) {?>
                      <h4 align="center">Your Application has been  rejected</h4>
                    <?php } else {?>
                      <h4 align="center">Your Application has been pending with admin for review</h4>
                    <?php } ?>

                    </div>
                    <div>
         <i class="icon-file success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">

                    <?php if($adsts=="") {?>
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                          <?php if($adsts=="2") {?>
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
 <?php if($adsts=="1") {?>
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>

                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
        </div>
<?php } else{?>
     
        <div class="row" >
          <div class="col-xl-10 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                   <a href="addmission-form.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h4 align="center">You have not applied for addmision. Please fill the admission form.</h4>
                    </div>
                    <div>
         <i class="icon-file success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> 
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
        


<?php 
if($adsts==1):
$ret=mysqli_query($con,"select ID from  tblfees where tblfees.UserID='$uid'");
$num=mysqli_num_rows($ret);
if($num>0  )
{ ?>

       <div class="row" >
          <div class="col-xl-10 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                   <a href="submit-fees.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">

                      <h4 align="center">Your Application has been  selected.Fee is also submitted</h4>
                  

                    </div>
                    <div>
         <i class="icon-file success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>
                </div>
              </a>
              </div>
            </div>
          </div></div>   
<?php } else {?>
             <div class="row" >
          <div class="col-xl-10 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                   <a href="submit-fees.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">




                      <h4 align="center">Your Application has been  selected and Please Submit your fee.</h4>
                  

                    </div>
                    <div>
         <i class="icon-file success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">

                 
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>


                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
        </div>

        <?php }  endif;
         ?>

        
        </div>
       </div></div></div>
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
</body>
</html>
<?php } ?>