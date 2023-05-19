<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
  <div class="top-hd">
    <div class="container">
  <header class="row top-menu-top">
    <div class="accounts col-md-9 col-6">
      <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
        <li class="top_li"><span class="fa fa-phone"></span>+<?php  echo $row['MobileNumber'];?></li>
        <li class="top_li1"><span class="fa fa-envelope-o"></span> <?php  echo $row['Email'];?> </li>
    </div><?php } ?>
    <div class="social-top col-md-3 col-6">
      <a href="contact.php" class="btn btn-secondary btn-theme4">Contact Now</a>
    </div>
  </header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="fa fa-pencil-square-o "></span> CAMS</a>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice-details.php">Public Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/login.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user/login.php">Users</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
</section>