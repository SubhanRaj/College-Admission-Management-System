<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

 // Coding for form Submission  
if(isset($_POST['submit']))
  {
    $uid=$_SESSION['uid'];
    $coursename=$_POST['coursename'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $dob=$_POST['dob'];
    $nationality=$_POST['nationality'];
    $gender=$_POST['gender'];
    $category=$_POST['category'];
    $coradd=$_POST['coradd'];
    $peradd=$_POST['peradd'];
    $secboard=$_POST['10thboard'];
    $secyop=$_POST['10thpyear'];
    $secper=$_POST['10thpercentage'];
    $secstream=$_POST['10thstream'];
    $ssecboard=$_POST['12thboard'];
    $ssecyop=$_POST['12thpyear'];
    $ssecper=$_POST['12thpercentage'];
    $ssecstream=$_POST['12thstream'];
    $grauni=$_POST['graduation'];
    $grayop=$_POST['graduationpyeaer'];
    $graper=$_POST['graduationpercentage'];
    $grastream=$_POST['graduationstream'];
    $pguni=$_POST['postgraduation'];
    $pgyop=$_POST['pgpyear'];
    $pgper=$_POST['pgpercentage'];
    $pgstream=$_POST['pgstream'];
    $dec=$_POST['declaration'];
    $sign=$_POST['signature'];
    $upic=$_FILES["userpic"]["name"];
    $tc=$_FILES["tcimage"]["name"];
        $tenmarksheet=$_FILES["hscimage"]["name"];
        $twlevemaksheet=$_FILES["sscimage"]["name"];
        $gramarksheet=$_FILES["graimage"]["name"];
        $pgmarksheet=$_FILES["pgraimage"]["name"];
    
$extension = substr($upic,strlen($upic)-4,strlen($upic));
$extensiontc = substr($tc,strlen($tc)-4,strlen($tc));
$extensiontm = substr($tenmarksheet,strlen($tenmarksheet)-4,strlen($tenmarksheet));
$extensiontwm = substr($twlevemaksheet,strlen($twlevemaksheet)-4,strlen($twlevemaksheet));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".pdf",".PDF");

// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
elseif(!in_array($extensiontc,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/pdf format allowed');</script>";
}
elseif(!in_array($extensiontm,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/pdf format allowed');</script>";
}
elseif(!in_array($extensiontwm,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/pdf format allowed');</script>";
}
else
{
// rename user pic
$userpic=md5($upic).$extension;
$tc=md5($tc).$extensiontc;
$tm=md5($tenmarksheet).$extensiontm;
$twm=md5($twlevemaksheet).$extensiontwm;
if($gramarkshee!=""){
$gra=md5($gramarksheet).$extensiongra;
} else { $gra="";}

if($pgmarksheet!=""){
$pgra=md5($pgmarksheet).$extensionpgra;
} else { $pgra="";}
move_uploaded_file($_FILES["tcimage"]["tmp_name"],"userdocs/".$tc);
     move_uploaded_file($_FILES["hscimage"]["tmp_name"],"userdocs/".$tm);
     move_uploaded_file($_FILES["sscimage"]["tmp_name"],"userdocs/".$twm);
     move_uploaded_file($_FILES["graimage"]["tmp_name"],"userdocs/".$gra);
     move_uploaded_file($_FILES["pgraimage"]["tmp_name"],"userdocs/".$pgra);
     move_uploaded_file($_FILES["userpic"]["tmp_name"],"userimages/".$userpic);
    $query=mysqli_query($con,"insert into tbladmapplications(UserId,CourseApplied,FatherName,MotherName,DOB,Nationality,Gender,Category,CorrespondenceAdd,PermanentAdd,SecondaryBoard,SecondaryBoardyop,SecondaryBoardper,SecondaryBoardstream,SSecondaryBoard,SSecondaryBoardyop,SSecondaryBoardper,SSecondaryBoardstream,GraUni,GraUniyop,GraUnidper,GraUnistream,PGUni,PGUniyop,PGUniper,PGUnistream,Signature,UserPic,TransferCertificate,TenMarksheeet,TwelveMarksheet,GraduationCertificate,PostgraduationCertificate) value('$uid','$coursename','$fathername','$mothername','$dob','$nationality','$gender','$category','$coradd','$peradd','$secboard','$secyop','$secper','$secstream','$ssecboard','$ssecyop','$ssecper','$ssecstream','$grauni','$grayop','$graper','$grastream','$pguni','$pgyop','$pgper','$pgstream','$sign','$userpic','$tc','$tm','$twm','$gra','$pgra')");
    if ($query) {
    
    echo '<script>alert("Data has been added successfully.")</script>';
    echo "<script>window.location.href ='addmission-form.php'</script>";
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again.")</script>';
         echo "<script>window.location.href ='addmission-form.php'</script>";
    }
}
}
  ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Admission Management System|| Admission Form</title>
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
  
<?php 
$stuid=$_SESSION['uid'];
$query=mysqli_query($con,"select tbladmapplications.*,tbluser.*,tbladmapplications.ID as appid  from tbladmapplications 
  join tbluser on tbluser.ID=tbladmapplications.UserId where  UserId=$stuid");
$rw=mysqli_num_rows($query);
if($rw>0)
{
while($row=mysqli_fetch_array($query)){
?>
<p style="font-size:16px; color:red" align="center">Your Admission Form already submitted.</p>
  <div  id="exampl">     
<table class="table mb-0" border="1" width="100%">
<tr>
  <th>Applicant Name</th>
  <td><?php echo $row['FirstName']." ".$row['LastName'];?></td>
  <th>Registration Date</th>
  <td><?php echo $row['CourseApplieddate'];?></td>
</tr>

<tr>
  <th>Course Applied</th>
  <td><?php echo $row['CourseApplied'];?></td>
  <th>Student Pic</th>
  <td><img src="userimages/<?php echo $row['UserPic'];?>" width="200" height="150"></td>
</tr>
<tr>
  <th>Father's Name</th>
  <td><?php echo $row['FatherName'];?></td>
  <th>Mother's Name</th>
  <td><?php echo $row['MotherName'];?></td>
</tr>
<tr>
  <th>DOB</th>
  <td><?php echo $row['DOB'];?></td>
  <th>Nationality</th>
  <td><?php echo $row['Nationality'];?></td>
</tr>
<tr>
  <th>Gender</th>
  <td><?php echo $row['Gender'];?></td>
  <th>Category</th>
  <td><?php echo $row['Category'];?></td>
</tr>
<tr>
  <th>Correspondence Address</th>
  <td><?php echo $row['CorrespondenceAdd'];?></td>
  <th>Permanent Address</th>
  <td><?php echo $row['PermanentAdd'];?></td>
</tr>
<tr>
  <th>Transfer Certificate</th>
  <td><a href="userdocs/<?php echo $row['TransferCertificate'];?>" target="_blank">View File </a></td>

  <th>10th Marksheet</th>
  <td><a href="userdocs/<?php echo $row['TenMarksheeet'];?>" target="_blank">View File </a></td>
</tr>
<tr>
  <th>12th Marksheet</th>
  <td><a href="userdocs/<?php echo $row['TwelveMarksheet'];?>" target="_blank">View File </a></td>
  <th>Graduation Certificate</th>
  <td>
<?php if($row['GraduationCertificate']==""){ ?>
  NA
<?php } else{ ?>
    <a href="userdocs/<?php echo $row['GraduationCertificate'];?>" target="_blank">View File </a>
<?php } ?>
  </td>
</tr>

<tr>
  <th>Post Graduation Certificate</th>
  <td>
<?php if($row['PostgraduationCertificate']==""){ ?>
  NA
<?php } else{ ?>
    <a href="userdocs/<?php echo $row['PostgraduationCertificate'];?>" target="_blank">View File </a>
<?php } ?>
  </td>
</tr>
</table>
<table class="table mb-0" border="1" width="100%" style="margin-top:1%">
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

</table>
<?php if($row['AdminStatus']==""):?>
  <?php else: ?>
<table class="table mb-0" border="1" width="100%">
<tr>
  <th>Admin Remark</th>
  <td><?php echo $row['AdminRemark'];?></td>
</tr>
<tr>
  <th>Admin Status</th>
 <td><?php 
                  if($row['AdminStatus']==""){
echo "admin remark is pending";
} 

 if($row['AdminStatus']=="1"){
  echo "Selected";
}
    
if($row['AdminStatus']=="2"){
  echo "Rejected";
}
                    ?></td>
</tr>
<tr>
  <th>Admin Remark Date</th>
  <td><?php echo $row['AdminRemarkDate'];?></td>
</tr>
<?php endif;?>
  <tr>
    <th colspan="2"><font color="red">Declaration : </font>I hereby state that the facts mentioned above are true to the best of my knowledge and belief.<br />
(<?php  echo $row['Signature'];?>)
    </th>
  </tr>
</table>


</div>
<div style="float:right;">
  <button class="btn btn-primary" style="cursor: pointer;"  OnClick="CallPrint(this.value)" >Print</button></div>
<?php 

if ($row['AdminStatus']==""){
?>
<p style="text-align: center;font-size: 20px;"><a href="edit-appform.php?editid=<?php echo $row['appid'];?>">Edit Details</a></p>
<?php }} } else { ?>
<form name="submit" method="post" enctype="multipart/form-data">        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Addimission Form</h4>

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
  <h5>Course Applied                   </h5>
   <div class="form-group">
   <select name='coursename' id="coursename" class="form-control white_bg" required="true">
     <option value="">Course Applied</option>
      <?php $query=mysqli_query($con,"select * from tblcourse");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['CourseName'];?>"><?php echo $row['CourseName'];?></option>
                  <?php } ?>  
   </select>
    </div>
</fieldset>
                   
</div>

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Student Pic                   </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="userpic" name="userpic"  type="file" required>
    </div>
</fieldset>                  
</div>
 </div>               
 <div class="row">
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Father's Name                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="fathername" name="fathername"  type="text" required>
    </div>
</fieldset>               
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Mother's Name                 </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="mothername" name="mothername"  type="text" required>
                          </div>
                        </fieldset>
                      </div>
                    </div>
<div class="row">
<div class="col-xl-4 col-lg-12">
 <fieldset>
  <h5>DOB                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="dob" name="dob"  type="text" required>
          <small class="text-muted">DOB Must be in this format (YYYY-MM-DD)</small>
    </div>

</fieldset>                  
</div>
<div class="col-xl-4 col-lg-12">
 <fieldset>
  <h5>Nationality                </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="nationality" name="nationality"  type="text" required>
                          </div>

                        </fieldset>
                      </div>
<div class="col-xl-4 col-lg-12">
 <fieldset>
  <h5>Gender                </h5>
   <div class="form-group">

   <select class="form-control white_bg" id="gender" name="gender"  required>
    <option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Transgender">Transgender</option>
   </select>
                          </div>
                        </fieldset>
                      </div>

                    </div>
<div class="row">
  <div class="col-xl-12 col-lg-12">
    <h5>Category : </h5>
   
<select class="form-control white_bg" id="category" name="category"  required>
    <option value="">Select Category</option>
<option value="General">General</option>
<option value="OBC">OBC</option>
<option value="SC/ST">SC/ST</option>
<option value="SC/ST">Other</option>
   </select>

  </div>
</div>
<div class="row" style="margin-top:1%">
  <div class="col-xl-12 col-lg-12">
    <fieldset>
  <h5>Correspondence Address                  </h5>
   <div class="form-group">
   <textarea class="form-control white_bg" id="coradd" name="coradd"  type="text" required rows="4"></textarea>
    </div>
</fieldset>
  </div>
</div>
<div class="row">
  <div class="col-xl-12 col-lg-12">
    <fieldset>
  <h5>Permanent Address                  </h5>
   <div class="form-group">
   <textarea class="form-control white_bg" id="peradd" name="peradd"  type="text" required rows="4"></textarea>
    </div>
</fieldset>
  </div>
</div>
<div class="row" style="margin-top: 2%">
  <div class="col-xl-12 col-lg-12"><h4 class="card-title">Education Qualification</h4>
<hr />
  </div>
</div>
<div class="row">
<div class="col-xl-12 col-lg-12">
<table class="table mb-0">
<tr>
  <th>#</th>
   <th>Board / University</th>
    <th>Year</th>
     <th>Percentage</th>
       <th>Stream</th>
</tr>
<tr>
<th>10th(Secondary)</th>
<td>   <input class="form-control white_bg" id="10thboard" name="10thboard" placeholder="Board / University"  type="text" required></td>
<td>   <input class="form-control white_bg" id="10thpyeaer" name="10thpyear" placeholder="Year"  type="text" required></td>
<td>   <input class="form-control white_bg" id="10thpercentage" name="10thpercentage" placeholder="Percentage"  type="text" required></td>
<td>   <input class="form-control white_bg" id="10thstream" name="10thstream" placeholder="Stream"  type="text" required></td>
</tr>
<tr>
<th>12th(Senior Secondary)</th>
<td>   <input class="form-control white_bg" id="12thboard" name="12thboard" placeholder="Board / University"  type="text" required></td>
<td>   <input class="form-control white_bg" id="12thboard" name="12thpyear" placeholder="Year"  type="text" required></td>
<td>   <input class="form-control white_bg" id="12thpercentage" name="12thpercentage" placeholder="Percentage"  type="text" required></td>
<td>   <input class="form-control white_bg" id="12thstream" name="12thstream" placeholder="Stream"  type="text" required></td>
</tr>
<tr>
<th>Graduation</th>
<td>   <input class="form-control white_bg" id="graduation" name="graduation" placeholder="Board / University"  type="text"></td>
<td>   <input class="form-control white_bg" id="graduationpyeaer" name="graduationpyeaer" placeholder="Year"  type="text"></td>
<td>   <input class="form-control white_bg" id="graduationpercentage" name="graduationpercentage" placeholder="Percentage"  type="text"></td>
<td>   <input class="form-control white_bg" id="graduationstream" name="graduationstream" placeholder="Stream"  type="text" ></td>
</tr>
<tr>
<th>Post Graduation</th>
<td>   <input class="form-control white_bg" id="postgraduation" name="postgraduation" placeholder="Board / University"  type="text" ></td>
<td>   <input class="form-control white_bg" id="pgpyeaer" name="pgpyear" placeholder="Year"  type="text"></td>
<td>   <input class="form-control white_bg" id="pgpercentage" name="pgpercentage" placeholder="Percentage"  type="text" ></td>
<td>   <input class="form-control white_bg" id="pgstream" name="pgstream" placeholder="Stream"  type="text" ></td>
</tr>
</table>
</div>
</div>
</hr>

<div class="row" style="margin-top: 2%">
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Transfer Certificate(TC)</h5>
   <div class="form-group">
    <input class="form-control white_bg" id="tcimage" name="tcimage"  type="file" required>
    </div>
</fieldset>
                 
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>10th Marksheet                  </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="hscimage" name="hscimage"  type="file" required>
    </div>
</fieldset>                 
</div>
</div>
 <div class="row">
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>12th Mark Sheet                   </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="sscimage" name="sscimage"  type="file" required>
    </div>
</fieldset>                 
</div>
<div class="col-xl-6 col-lg-12">
  <fieldset>
  <h5>Graduation Certificate(if any)                </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="graimage" name="graimage"  type="file">
    </div>
</fieldset>
 </div>
                    </div>        
 <div class="row">
<div class="col-xl-4 col-lg-12">
  <fieldset>
  <h5>Post Graduation Certificate(if any)                </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="pgraimage" name="pgraimage"  type="file" >
    </div>
</fieldset>
</div>
</div>
<div class="row" style="margin-top: 2%">
  
<div class="col-xl-12 col-lg-12"><h4 class="card-title"><b>Declartion</b></h4> <hr />
</div>
</div>
 <div class="row">
<div class="col-xl-12 col-lg-12">
<h5><b>I hereby state that the facts mentioned above are true to the best of my knowledge and belief.</b></h5>
 </div>
 </div>               
<div class="row"> 
<div class="col-xl-4 col-lg-12">
<fieldset>
 <input class="form-control white_bg" id="signature" name="signature" placeholder="Signature"  type="text"> 
 </fieldset>  
</div>
</div>
<div class="row" style="margin-top: 2%">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Submit</button>
</div>
</div>
 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php } ?>
        <!-- Formatter end -->
      </form>  
      </div>
    </div>
  </div>
<?php include('includes/footer.php');?>
 
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
</body>
</html>
<?php  } ?>
