<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
     $eid=$_GET['editid'];
    $uid=$_SESSION['uid'];
    $upic=$_FILES["userpic"]["name"];
    
$extension = substr($upic,strlen($upic)-4,strlen($upic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
// rename user pic
$userpic=md5($upic).$extension;
     move_uploaded_file($_FILES["userpic"]["tmp_name"],"userimages/".$userpic);
    $query=mysqli_query($con,"update tbladmapplications set UserPic='$userpic' where ID='$eid' && UserId='$uid'");
    if ($query) {
    
    echo '<script>alert("Profile image updated successfully.")</script>';
   
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
}
  ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System|| Change Image</title>
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
           Admission Application Form
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Application
                </li>
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">


<form name="submit" method="post" enctype="multipart/form-data">  
<?php
$eid=$_GET['editid'];
$uid=$_SESSION['uid'];
$ret=mysqli_query($con,"select * from tbladmapplications where ID='$eid' && UserId='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>      
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Update Profile Pic</h4>

                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                  
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
 

<div class="row">


<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>New Student Pic                   </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="userpic" name="userpic"  type="file" required="true">
    </div>
</fieldset>                  
</div>
 </div>               
 <div class="row">
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Old Student Pic</h5>
   <div class="form-group">
  <img src="userimages/<?php  echo $row['UserPic'];?>" width="100" height="100">
    </div>
</fieldset>               
</div>

                    </div>

</hr>

<?php 
$cnt=$cnt+1;
}?>
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
<?php include('includes/footer.php');?>
 
</body>
</html>
<?php  } ?>
