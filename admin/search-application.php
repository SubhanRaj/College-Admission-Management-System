<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{


  ?>
  <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System | Search Application</title>
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
           Search Application
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Search Application</li>
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->

<form name="search" method="post" >        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Search Applications</h4>
 
                </div>
                <div class="card-content">
                  <div class="card-body">
                    

  <div class="row">
                      <div class="col-xl-6 col-lg-12">
                        <fieldset>
                          <h5>Search by Student Name / Email id / Contact number
                         
                          </h5>
                          <div class="form-group">

  <input class="form-control white_bg" id="searchdata" type="text" name="searchdata" required>
                          </div>
                        </fieldset>
                      </div>
                    </div>

 
<div class="row">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="search" class="btn btn-info btn-min-width mr-1 mb-1">Search</button>
</div>
</div>

 </form>  
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
<h4 align="center">Result againt "<?php echo $sdata;?>" keyword </h4>
<div class="row">
<div class="col-xl-12 col-lg-12">
<table class="table mb-0">
 <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Course Applied</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                   <th>Mobile Number</th>
                   <th>Email</th>
                   <th>Action</th>
                </tr>
              </thead>
  <?php
            
$ret=mysqli_query($con,"select tbladmapplications.CourseApplied,tbladmapplications.ID as apid, tbluser.FirstName,tbluser.LastName,tbluser.MobileNumber,tbluser.Email from  tbladmapplications inner join tbluser on tbluser.ID=tbladmapplications.UserId where tbluser.FirstName like '%$sdata%' || tbluser.MobileNumber like '%$sdata%' || tbluser.Email like '%$sdata%'");
$cnt=1;
$num=mysqli_num_rows($ret);
if($num>0)
{
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
                       <td><?php  echo $row['CourseApplied'];?></td>
                  <td><?php  echo $row['FirstName'];?></td>
                  <td><?php  echo $row['LastName'];?></td>
                   <td><?php  echo $row['MobileNumber'];?></td>
                    <td><?php  echo $row['Email'];?></td>
         
                  <td><a href="view-appform.php?aticid=<?php echo $row['apid'];?>">View Details</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr align="center">
    <td colspan="7" style="color:red; font-size: 16px;">No Record found against this search</td>

  </tr>
<?php } ?>

</table>
</div>
</div>
<?php }?>

 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Formatter end -->
     
     

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
 

</body>
</html>
<?php }  ?>