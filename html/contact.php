<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Chikko " />
<meta name="description" content="Chikko - Boutique Coffee and Kitchen" />
<meta name="author" content="tran multimedia" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title> Chikko - Boutique Coffee and Kitchen</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Amatic+SC:400,700|Lilita+One" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- skin color -->
    <link rel="stylesheet" href="css/skins/skin-dark-green.css">
</head>
<body>

<!--=================================
 loading -->

<div id="loading">
  <div id="loading-center">
    <img src="images/loader.gif" alt="">
  </div>
</div>

<!--=================================
 loading -->
 
<!--=================================
 header -->

<header id="header" class="header">
    <?php include 'main-menu.php'; ?>
</header>

 <!--=================================
 header -->

 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/03.jpg);">
   <div class="container">
     <div class="row text-center intro-title">
      <h1 class="text-orange">Contact Us</h1>
      <p class="text-white">We Know The Secret Of Your Success</p>
<!--      <ul class="page-breadcrumb">-->
<!--        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>-->
<!--        <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>-->
<!--        <li><span>Contact</span></li>-->
<!--     </ul>-->
     </div>
  </div>
</div>
 
<!--=================================
 intro bg -->


<!--=================================
  contact -->

<section class="contact white-bg page-section-ptb"> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
        <div class="title-separator">
           <i class="glyph-icon flaticon-food-27"></i>
         </div>
          <h2> <span class="text-orange">Contact </span> Us</h2>
          <p>It would be great to hear from you! If you got any questions</p>
        </div>
      </div>
     </div>
     <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
         <div class="contact-box text-center">
            <i class="fa fa-map-marker"></i>
            <h5>Address</h5>
            <p>Eastlands Shopping Centre 26 Bligh Street Kmart Entrance, Rosny Park TAS 7018 </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
         <div class="contact-box text-center">
            <i class="fa fa-phone"></i>
            <h5>Phone</h5>
             <p> <a href="tel:(03) 6244 4190">(03) 6244 4190 </a></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
         <div class="contact-box text-center">
            <i class="fa fa-envelope-o"></i>
            <h5>Email</h5>
            <p> support@chikko.com</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
         <div class="contact-box text-center">
            <i class="fa fa-fax"></i>
            <h5>Fax</h5>
            <p> (03) 6244 4190 </p>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-lg-12">
        <div id="formmessage">Success/Error Message Goes Here</div>
         <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
           <div class="contact-form">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-field">
                  <i class="fa fa-user"></i>
                  <input id="name" type="text" placeholder="Name*" class="placeholder" name="name">
              </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-field">
                  <i class="fa fa-phone"></i>
                 <input type="text" placeholder="Phone*" class="placeholder" name="phone">
               </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-field">
                  <i class="fa fa-envelope-o"></i>
               <input type="email" placeholder="Email*" class="placeholder" name="email">
              </div>
             </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="form-field">
                 <i class="fa fa-pencil"></i>
                  <textarea class="input-message placeholder" placeholder="Comment*" rows="7" name="message"></textarea>
                </div>
                </div>
              </div>
              <div class="form-submit mt-10 text-center">
                   <input type="hidden" name="action" value="sendEmail"/>
                   <button id="submit" name="Submit" type="submit" value="Send" class="button"> Send Message</button>
                </div>
              </div> 
            </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div> 
        </div>
      </div>
    </div>
 </section>

 <!--=================================
  contact -->

 <!--=================================
  contact-map -->

<section class="contact-map">
  <div class="container-fluid">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11697.033879381232!2d147.3682196!3d-42.8673884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b0de57e6af85b43!2sChikko+Cafe+Eastlands!5e0!3m2!1sen!2sau!4v1542689312873" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
  </div>
 </section>
 
 <!--=================================
  contact-map -->
 
<!--=================================
  footer -->
<div id="includedFootermenu"></div>

<!--=================================
 footer --> 

<!--=================================
 back to top -->

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-long-arrow-up"></i></a></div> 
 
 <!--=================================
 back to top -->
 

<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- mega menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/load-menu.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>