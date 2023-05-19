<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['submit'])){
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$phoneno=$_POST['phoneno'];
$message=$_POST['message'];
$query=mysqli_query($con,"insert into tblcontact(Name,Email,PhoneNumber,Message) values('$name','$emailid','$phoneno','$message')");
echo "<script>alert('Query sent successfully.');</script>";
echo "<script>window.location.href='contact.php'</script>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>College Adnission Management System || Contact Us</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<?php include_once("includes/header.php");?>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Contact Us</h2>
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>
    </div>
  </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            
            <div class="row cont-main-top">
<?php $ret=mysqli_query($con,"select * from tblpage where PageType='contactus'");
while($row=mysqli_fetch_array($ret)){
?>     
                <!-- contact address -->
                <div class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">
                            
                           <div class="cont-add-rgt">
                            <h4>Address:</h4>
                            <p class="contact-text-sub"><?php echo $row['PageDescription'];?></p>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add add-2">
                            
                           <div class="cont-add-rgt">
                            <h4>Email:</h4>
                            <a href="mailto:<?php echo $row['Email'];?>">
                                <p class="contact-text-sub"><?php echo $row['Email'];?></p>
                            </a>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add">
                           
                            <div class="cont-add-rgt">
                                 <h4>Phone:</h4>
                                 <a href="tel<?php echo $row['MobileNumber'];?>">
                                    <p class="contact-text-sub"><?php echo $row['MobileNumber'];?></p>
                                 </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                        </div>

                              <div class="cont-add">
                           
                            <div class="cont-add-rgt">
                                 <h4>Timing:</h4>
           
                                    <p class="contact-text-sub"><?php echo $row['Timing'];?></p>
                           
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-clock-o" aria-hidden="true"></span>
                           </div>
                        </div>
                     
                    </div>
                </div>

<?php } ?>
                <!-- //contact address -->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">
                   
                    <form  method="post" class="main-input">
                        <div class="top-inputs d-grid">
          <input type="text" placeholder="Name" name="name" id="name" required="">
                    <input type="email" name="emailid" placeholder="Email" id="emailid" required="">
                        </div>
                        <input type="text" placeholder="Phone Number" name="phoneno" id="phoneno" required="">
                        <textarea placeholder="Message" name="message" id="message" required=""></textarea>
                        <div class="text-right">
                            <button type="submit" name="submit" class="btn btn-theme2">Submit Now</button>
                        </div>
                    </form>
                </div>
                <!-- //contact form -->
            </div>
        </div>
        <!-- map -->
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
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


