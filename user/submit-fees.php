<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $uid=$_SESSION['uid'];
    $mop=$_POST['mop'];
    $transno=$_POST['transno'];
    $dot=$_POST['dot'];
    $payamt=$_POST['payamt'];
    $query=mysqli_query($con,"insert into tblfees(UserID,ModeofPayments,TransactionNumber,DateofTransaction,PaymentAmount) value('$uid','$mop','$transno','$dot','$payamt')");
    if ($query) {
  
     echo '<script>alert("Fes has been submitted successfully.")</script>';
    echo "<script>window.location.href ='submit-fees.php'</script>";
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

  <title>College Addmission Management System|| Addmission Fees</title>
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
           Addmission Fees
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Fees
                </li>
                
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body" id="exampl">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->
<?php 
$stuid=$_SESSION['uid'];
$ret=mysqli_query($con,"select AdminStatus from  tbladmapplications join tbluser on tbluser.ID=tbladmapplications.UserID where tbluser.ID='$stuid'");
$num=mysqli_fetch_array($ret);
$adstatus=$num['AdminStatus'];
if($num>0 && $adstatus=='1' )
{

$query=mysqli_query($con,"select * from tblfees where  UserID=$stuid");
$rw=mysqli_num_rows($query);
if($rw>0)
{
while($row=mysqli_fetch_array($query)){
?>
<p style="font-size:16px; color:red" align="center">Your fee is already submitted.</p>

<table class="table mb-0">



<tr>
  <th>Payment Amount</th>
  <td><?php echo $row['PaymentAmount'];?></td>
</tr>
<tr>
  <th>Mode of Payment</th>
  <td><?php echo $row['ModeofPayments'];?></td>
</tr>
<tr>
  <th>Transaction Number</th>
  <td><?php echo $row['TransactionNumber'];?></td>
</tr>
<tr>
  <th>Date of Transaction</th>
  <td><?php echo $row['DateofTransaction'];?></td>
</tr>
</table>
<div style="float:center; padding-top: 20px;">
  <button class="btn btn-primary" style="cursor: pointer;"  OnClick="CallPrint(this.value)" >Print</button></div>
<?php } } else { ?>
<form name="submit" method="post" enctype="multipart/form-data">        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Submit Fees</h4>

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
  <h5>Payment Amount</h5>
  <?php
$uid=$_SESSION['uid'];
$ret=mysqli_query($con,"select * from  tbladmapplications where UserId='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
   <div class="form-group">
     <input class="form-control white_bg" id="payamt" name="payamt"  type="text" readonly value="<?php  echo $row['FeeAmount'];?>">
   
    </div>
</fieldset>
            <?php }?>     
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Mode of Payments</h5>
   <div class="form-group">
    <select class="form-control white_bg" name="mop" required="true">
      <option value="">Choose Mode of Payment</option>
      <option value="Debit Card">Debit Card</option>
      <option value="Credit Card">Credit Card</option>
      <option value="E-Wallet">E-Wallet</option>
      <option value="UPI">UPI</option>
    </select>
   
    </div>
</fieldset>
                 
</div>

</div>
 <div class="row">
  <div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Transaction Number                  </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="transno" name="transno"  type="text" required="true">
    </div>
</fieldset>                 
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Date of Transaction                  </h5>
   <div class="form-group">
    <input class="form-control white_bg" id="dot" name="dot"  type="date" required="true">
    </div>
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
        <?php } }  else if($num>0 && $adstatus==''){ ?>
<p> Your application is pending with admin  </p>
<?php } else if($num>0 && $adstatus=='2'){ ?>
<p> Your application has been rejected by admin  </p>
<?php } else{?> 
  <p> First fill the application form.  </p>
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

</body>
</html>
<?php  } ?>
