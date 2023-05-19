<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
$rti=$_GET['nid'];
  ?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>College Admission Management System||Notice Detail</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>


<?php include('includes/header.php');?>
<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Notice</h2>
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Notice</p>
    </div>
  </div>
</section>


<section class="w3l-price-2" id="news">
    <div class="price-main py-5">
        <div class="container py-md-3">
             <div class="pricing-style-w3ls row py-md-5">
              <div class="pricing-chart col-lg-12">
                <h3 class="">All Notices</h3> <?php $query=mysqli_query($con,"select * from tblnotice tblnotice ORDER BY ID DESC");
while ($row=mysqli_fetch_array($query)) {
?>
                <div class="tatest-top mt-md-5 mt-4">
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                    <div class="column-6">
                                            <img src="assets/images/g9.jpg" alt="" class="img-fluid">
                                        </div>
                                <div class="column1">
                                   
                                    <div class="job-info">
                                       
                                        <h6 class="pricehead"><?php echo $row['Title'];?></h6>
                                        <h5><?php echo $row['CreationDate'];?></h5>
                                        <p><?php echo $row['Decription'];?></p>
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    
                    </div>
                   <?php } ?>
                    </div>
                 
            </div>
        </div>
    </div>
</section>
<!-- grids block 5 -->
<?php include('includes/footer.php');?>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->