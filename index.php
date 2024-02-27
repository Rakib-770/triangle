<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Triangle</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Bootstrap JS and Popper.js (Order matters) -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="head_top">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="top-box">
                        <ul class="sociel_link">
                           <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="top-box">
                        <p><a href="#"><i class="fa fa-map-marker"></i></a> 1151 Walker Ste 100, Dover, DE-19904,USA</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="images/triangle_trade_logo.png" alt="logo" /></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.php">Home</a> </li>
                              <li> <a href="about.php">About</a> </li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="voiceotp.php">Voice OTP</a></li>
                                    <li><a class="dropdown-item" href="a2psms.php">A2P SMS</a></li>
                                    <li><a class="dropdown-item" href="bulksms.php">BULK SMS</a></li>
                                    <li><a class="dropdown-item" href="rcs.php">RCS Messaging</a></li>
                                    <li><a class="dropdown-item" href="otpauth.php">OTP Authentication</a></li>
                                    <li><a class="dropdown-item" href="intsms.php">International SMS</a></li>
                                    <li><a class="dropdown-item" href="shortcode.php">Shortcode SMS</a></li>
                                    <li><a class="dropdown-item" href="emailmarketing.php">Email Marketing</a></li>
                                 </ul>
                              </li>
                              <li> <a href="https://triangletrade.net:2096/"> Webmail</a> </li>
                              <li> <a href="contact.php">Contact</a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
   </header>
   <!-- end header -->
   <section class="slider_section container">
      <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/a2p.png" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="images/voip.png" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/globalsms.png" alt="Third slide">
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/customers.png" alt="Third slide">
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/sms.png" alt="Third slide">
            </div>

         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-right'></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-left'></i>
         </a>

      </div>

   </section>

   <!-- service -->
   <div class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <div class="title">
                  <h2>Our <strong class="black">Services</strong></h2>
                  <span>Enrich Your User Experience with Multiple Solutions</span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/sms_2.png" /></i>
                  <h3>International SMS</h3>
                  <p>Build personalized conversations with Mtalkz cloud communications platform to elevate your customer engagement across the globe </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/otp.png" /></i>
                  <h3>OTP Authenticator</h3>
                  <p>Ensure delivery of 99% of messages within 15 seconds and secure logins for your customer, websites and applications. </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/chat.png" /></i>
                  <h3>2-Way Messaging</h3>
                  <p>Speed up your communication and open the window for customer interaction with 2-way messaging. </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/code.png" /></i>
                  <h3>Short Code</h3>
                  <p>Short Code SMS Services are great way to run large campaigns and generate leads in an effective way </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/Lcode.png" /></i>
                  <h3>Long Code</h3>
                  <p>Activate your branding spree with dedicated longcodes that provide customer engagement to next level. </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/code.png" /></i>
                  <h3>VoiceOTP</h3>
                  <p>A GSM call gets placed to the user’s phone number for voice OTP verification. </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end service -->

   <!-- CHOOSE  -->
   <div class="whyschose">
      <div class="container">

         <div class="row">
            <div class="col-md-7 offset-md-3">
               <div class="title">
                  <h2>Why <strong class="black">choose us</strong></h2>
                  <span>Power-Pack Features Of Bulk SMS</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="choose_bg">
      <div class="container">
         <div class="white_bg">
            <div class="row">
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/cloud.png" /></i>
                     <h3>Cloud-Based Solutions</h3>
                     <p>Elevate your campaign's performance with our 24×7 support, driving tangible business agility.</p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/connection.png" /></i>
                     <h3>Direct Operator Connections</h3>
                     <p>Elevate your campaign's performance with our Always Up services, driving tangible business agility.</p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/tps.png" /></i>
                     <h3>1000 TPS</h3>
                     <p>Experience instant delivery with high quality throughout. Never worry about keeping your customers waiting for critical messages and updates.</p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/intConnection.png" /></i>
                     <h3>1000+ International Connection</h3>
                     <p>We deliver globally in a matter of seconds. Choose the right bulk SMS package for you to grow your business.</p>
                  </div>
               </dir>
               <div class="col-md-12">
                  <a class="read-more">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end CHOOSE -->

   </div>
   </div>
   </div>
   <div class="Clients_bg_white">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h3>What Clients Say?</h3>
               </div>
            </div>
         </div>
         <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#client_slider" data-slide-to="0" class="active"></li>
               <li data-target="#client_slider" data-slide-to="1"></li>
               <li data-target="#client_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption text-bg">
                        <div class="img_bg">
                           <i><img src="images/lllll.png" /><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>

                        </div>

                        <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I
                           wish I would have thought of it first. I am really satisfied with my first laptop
                           service.<br>
                           You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I
                           wish I would have thought of it first. I am </p>

                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption text-bg">
                        <div class="img_bg">
                           <i><img src="images/lllll.png" /><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>

                        </div>
                        <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I
                           wish I would have thought of it first. I am really satisfied with my first laptop
                           service.<br>
                           You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I
                           wish I would have thought of it first. I am </p>

                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption text-bg">
                        <div class="img_bg">
                           <i><img src="images/lllll.png" /><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>

                        </div>
                        <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I
                           wish I would have thought of it first. I am really satisfied with my first laptop
                           service.<br>
                           You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I
                           wish I would have thought of it first. I am </p>

                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>
   </div>

   <div class="container">
      <div class="yellow_bg">
         <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
               <div class="yellow-box">
                  <h3>REQUEST A FREE QUOTE<i><img src="icon/calll.png" /></i></h3>

                  <p>Get answers and advice from people you want it from.</p>
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
               <div class="yellow-box">
                  <a href="#">Get Quote</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>

   <!-- end our product -->
   <!-- map -->
   <div class="container-fluid padi">
      <div class="map">
         <!-- <img src="images/mapimg.jpg" alt="img" /> -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.2738348350226!2d-75.55413462334728!3d39.168495071667394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c77b67fa9a2621%3A0xbd6a56ba7a6e72f0!2s1151%20Walker%20Rd%20%23%20100%2C%20Dover%2C%20DE%2019904%2C%20USA!5e0!3m2!1sen!2sbd!4v1708517835663!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
   </div>
   <!-- end map -->
   <!--  footer -->




   <footr>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <ul class="sociel">
                     <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                     <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>conatct us</h3>
                     <span>1151 Walker Ste 100,<br>
                        Dover, DE-19904,USA<br>
                        carrier@triangletrade.net<br>
                        +716 222 9902 <br>
                        Mon-Fri 9am-7pm</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                        <li> <a href="#">About us</a></li>
                        <li> <a href="#">Terms and conditions</a></li>
                        <li> <a href="#">Privacy policy</a></li>
                        <li> <a href="#">News</a></li>
                        <li> <a href="#">Contact us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>services</h3>
                     <ul class="lik">
                        <li> <a href="#"> Global SMS</a></li>
                        <li> <a href="#">VoIP Call Termination</a></li>
                        <li> <a href="#">Digital Marketing</a></li>
                        <li> <a href="#">Business Software Solution</a></li>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>About Triangle</h3>
                     <span>Tri Angle Trade Centre provides VOIP Telecommunication, SMS services and email marketing services to services providers and business customers globally. </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <p>Copyright 2024 All Right Reserved By <a href="">Triangle</a></p>
         </div>

      </div>
   </footr>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function() {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function() {

            $(this).addClass('transition');
         }, function() {

            $(this).removeClass('transition');
         });
      });
   </script>
</body>

</html>