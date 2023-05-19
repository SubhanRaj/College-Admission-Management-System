<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
$cid=$_GET['aticid'];
$admrmk=$_POST['AdminRemark'];
$admsta=$_POST['status'];
$feeamt=$_POST['feeamt'];
$toemail=$_POST['useremail'];
$query=mysqli_query($con, "update  tbladmapplications set AdminRemark='$admrmk',FeeAmount='$feeamt',AdminStatus='$admsta' where ID='$cid'");
if ($query) {
$subj="Admission Application Status";       
$heade .= "MIME-Version: 1.0"."\r\n";
$heade .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$heade .= 'From:CAMS<noreply@yourdomain.com>'."\r\n";    // Put your sender email here
$msgec.="<html></body><div><div>Hello,</div></br></br>";
$msgec.="<div style='padding-top:8px;'>Your Admission application has been $$admsta ) </br>
<strong>Admin Remark: </strong> $admrmk </div><div></div></body></html>";
mail($toemail,$subj,$msgec,$heade);
echo "<script>alert('Admin Remark and  Status has been updated.');</script>";
echo "<script>window.location.href ='pending-application.php'</script>";

}else{
   echo "<script>alert('Something Went Wrong. Please try again.');</script>";
   echo "<script>window.location.href ='pending-application.php'</script>";
    }

  
}
  

  ?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System|| View Form</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
           View Application Form
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Application Form
                </li>
                
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->
 <div  id="exampl">  
<?php
$cid=$_GET['aticid'];
$userid=intval($_GET['userid']);
$ret=mysqli_query($con,"select tbladmapplications.*,tbluser.FirstName,tbluser.LastName,tbluser.MobileNumber,tbluser.Email from  tbladmapplications inner join tbluser on tbluser.ID=tbladmapplications.UserId where tbladmapplications.ID='$cid' || tbladmapplications.UserId='$userid'");
$cnt=1;
$count=mysqli_num_rows($ret);
if($count==0){ ?>
<p style="color:red">Not applied Yet </p>
<?php } else {
while ($row=mysqli_fetch_array($ret)) {
?>

<table border="1" width="100%" class="table table-bordered mg-b-0">
<tr>
   <th>Applicant Name</th>
  <td><?php echo $row['FirstName']." ".$row['LastName'];?></td>
    <th>Reg Date</th>
    <td><?php  echo $row['CourseApplieddate'];?></td>
  </tr>
   <tr>
    <th>Course Applied</th>
    <td><?php  echo $row['CourseApplied'];?></td>
    <th>Student Fullname</th>
    <td><?php  echo $row['FirstName']." ".$row['LastName'];?></td>
  </tr>

    <tr>
    <th>Student Mob Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
    <th>Student Email</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>

  <tr>
  <th>Student Pic</th>
  <td><img src="../user/userimages/<?php echo $row['UserPic'];?>" width="200" height="150"></td>
    <th>Father Name</th>
    <td><?php  echo $row['FatherName'];?></td>
  </tr>
  
  <tr>
    <th>Mother Name</th>
    <td><?php  echo $row['MotherName'];?></td>
    <th>  DOB</th>
    <td><?php  echo $row['DOB'];?></td>
  </tr>
  <tr>
    <th>Nationality</th>
    <td><?php  echo $row['Nationality'];?></td>
    <th>Gender</th>
    <td><?php  echo $row['Gender'];?></td>
  </tr>
  <tr>
    <th>Category</th>
    <td><?php  echo $row['Category'];?></td>
  <th>Correspondence Address</th>
  <td><?php echo $row['CorrespondenceAdd'];?></td>
</tr>
<tr>
  <th>Permanent Address</th>
  <td><?php echo $row['PermanentAdd'];?></td>
  <th>Transfer Certificate</th>
  <td><a href="../user/userdocs/<?php echo $row['TransferCertificate'];?>" target="_blank">View File </a></td>
</tr>
<tr>
  <th>10th Marksheet</th>
  <td><a href="../user/userdocs/<?php echo $row['TenMarksheeet'];?>" target="_blank">View File </a></td>

  <th>12th Marksheet</th>
  <td><a href="../user/userdocs/<?php echo $row['TwelveMarksheet'];?>" target="_blank">View File </a></td>
  </tr>
  <tr>
  <th>Graduation Certificate</th>
  <td>
<?php if($row['GraduationCertificate']==""){ ?>
  NA
<?php } else{ ?>
    <a href="../user/userdocs/<?php echo $row['GraduationCertificate'];?>" target="_blank">View File </a>
<?php } ?>
  </td>

  <th>Post Graduation Certificate</th>
  <td>
<?php if($row['PostgraduationCertificate']==""){ ?>
  NA
<?php } else{ ?>
    <a href="../user/userdocs/<?php echo $row['PostgraduationCertificate'];?>" target="_blank">View File </a>
<?php } ?>
  </td>
</tr>
</table>

  <table class="table mb-0" border="1" width="100%">
<tr>
  <th>#</th>
   <th>Board / University</th>
    <th>Year</th>
     <th>Percentage</th>
       <th>Stream</th>

</tr>


<th>10th(Secondary)</th>
  <td><?php echo $row['SecondaryBoard'];?></td>
  <td><?php echo $row['SecondaryBoardyop'];?></td>
   <td><?php echo $row['SecondaryBoardper'];?></td>
   <td><?php echo $row['SecondaryBoardstream'];?></td>
</tr>

<tr>
  <th>12th(Senior Secondary)</th>
  <td><?php echo $row['SSecondaryBoard'];?></td>
   <td><?php echo $row['SSecondaryBoardyop'];?></td>
   <td><?php echo $row['SSecondaryBoardper'];?></td>
    <td><?php echo $row['SSecondaryBoardstream'];?></td>
</tr>
<tr>
  <th>Graduation</th>
  <td><?php echo $row['GraUni'];?></td>
  <td><?php echo $row['GraUniyop'];?></td>
  <td><?php echo $row['GraUnidper'];?></td>
  <td><?php echo $row['GraUnistream'];?></td>
</tr>

<tr>
  <th>Post Graduation</th>
  <td><?php echo $row['PGUni'];?></td>
  <td><?php echo $row['PGUniyop'];?></td>
  <td><?php echo $row['PGUniper'];?></td>
  <td><?php echo $row['PGUnistream'];?></td>
</tr>


 <tr>
    <th colspan="5"><font color="red">Declaration : </font>I hereby state that the facts mentioned above are true to the best of my knowledge and belief.<br />
(<?php  echo $row['Signature'];?>)
    </th>
  </tr>
</table>
<table class="table mb-0" border="1" width="100%">

<?php if($row['AdminRemark']==""){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 
<input type="hidden" name="useremail" value="<?php  echo $row['Email'];?>">
  <tr>
    <th>Application Status :</th>
    <td>
   <select name="status" id="status"  class="form-control wd-450" required="true" >
    <option value="">Select Option</option>
     <option value="1">Selected</option>
     <option value="2">Rejected</option>
   </select></td>
  </tr>

<tr>
    <th>Admin Remark :</th>
    <td>
    <textarea name="AdminRemark" placeholder="" rows="6" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr>
<tr id="fee">
    <th>Fee Amount :</th>
    <td>
    <input name="feeamt" id="feeamt" placeholder="" class="form-control wd-450"></td>
  </tr>


  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-primary">Update</button></td>
  </tr>
  </form>
<?php } else { ?>

<tr>
    <th>Admin Remark</th>
    <td><?php echo $row['AdminRemark']; ?></td>
  </tr>
<tr>
    <th>Fee Amount</th>
    <td><?php echo $row['FeeAmount']; ?></td>
  </tr>

<tr>
<th>Admin Remark date</th>
<td><?php echo $row['AdminRemarkDate']; ?>  </td>

<tr>
    <th>Application Status</th>
    <td><?php  
if($row['AdminStatus']=="1")
{
  echo "Selected";
}

if($row['AdminStatus']=="2")
{
  echo "Rejected";
}

     ;?></td>
  </tr>

  </tr>

  <?php } ?>
 




</table>

<?php }} ?>

      </div>
  <div style="float:right;">
  <button class="btn btn-primary" style="cursor: pointer;"  OnClick="CallPrint(this.value)" >Print</button></div>      


            





<div class="row" style="margin-top: 2%">
<div class="col-xl-6 col-lg-12">
</div>
</div>



 </div>
                </div>
              </div>
            
     

<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
 
       <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
}

</script>
<script type="text/javascript">

  //For report file
  $('#fee').hide();
  $(document).ready(function(){
  $('#status').change(function(){
  if($('#status').val()=='1')
  {
  $('#fee').show();
  jQuery("#feeamt").prop('required',true);  
  }
  else{
  $('#fee').hide();
  }
})}) 
</script>
</body>
</html>
<?php  } ?>
