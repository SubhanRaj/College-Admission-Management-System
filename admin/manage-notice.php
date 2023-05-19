<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

// Codefor Deletion

if(isset($_GET['delnotid']))
{
  $rid=$_GET['delnotid'];
$query=mysqli_query($con,"delete from tblnotice where ID='$rid'");

echo "<script>alert('Notice Deleted');</script>";


}    

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System|| Manage Notice</title>
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
           Manage Notice
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Manage Notice
                </li>
                
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">
        <!-- Input Mask start -->
  
        <!-- Formatter start -->
<table class="table mb-0">
 <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Title</th>
                  <th>Description</th>
              
                   <th>Action</th>
                </tr>
              </thead>
               <?php
$ret=mysqli_query($con,"select * from tblnotice");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['Title'];?></td>
                  <td><?php  echo $row['Decription'];?></td>
                
                  <td><a href="edit-notice.php?notid=<?php echo $row['ID'];?>" title="Edit Notice"><i class="la la-edit"></i></a>  <a href="manage-notice.php?delnotid=<?php echo $row['ID'];?>" title="Delete this Notice" onClick="return confirm('Do you really want to delete');"> <i class="la la-close"></i></a>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
   


</table>






     

</div>
      </div>
      </div>

    
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
 

</body>
</html>
<?php  } ?>
