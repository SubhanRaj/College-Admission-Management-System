  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/extended/form-extended.css">


<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="dashboard.php">
        
              <h3 class="brand-text">CAMS Admin</h3>
            </a>
          </li>
          <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

           
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <?php
$admid=$_SESSION['aid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$admid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                  <span class="user-name text-bold-700" ><?php echo $name; ?></span>
                </span>
                <span class="avatar avatar-online">
                  <img src="../app-assets/images/user.png" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="adminprofile.php"><i class="ft-user"></i> Edit Profile</a>
                <span class="avatar avatar-online">
                  </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="change-password.php"><i class="ft-user"></i> Change Pass</a>


                
                <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
              </div>
            </li>

<?php $qury=mysqli_query($con,"SELECT  tbladmapplications.ID as appid,tbluser.FirstName,tbladmapplications.CourseApplieddate from tbladmapplications join tbluser on tbluser.ID=tbladmapplications.UserId where tbladmapplications.AdminStatus is null");
$num=mysqli_num_rows($qury);
?>

 <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">
                  <?php echo $num;?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-danger float-right m-0"><?php echo $num;?> New</span>
                </li>
                <li class="scrollable-container media-list w-100">

<?php
while ($row=mysqli_fetch_array($qury)) {


?>
<a href="view-appform.php?aticid=<?php echo $row['appid'];?>">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading"><b><?php echo $row['FirstName'];?></b> applied for admission</h6>
                        <small>
<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">at <?php echo $row['CourseApplieddate'];?></time>
                        </small>
                      </div>
                    </div>
                  </a>
<?php }?>            
              
                
                </li>
         
              </ul>
            </li>
     
          </ul>
        </div>
      </div>
    </div>
  </nav>