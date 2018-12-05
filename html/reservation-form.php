<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Chikko" />
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

<!-- carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- datepicker -->
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />

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
<!--    <div id="includedMainmenu"></div>-->
    <?php include 'main-menu.php'; ?>

</header>

 <!--=================================
 header -->

 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/03.jpg);">
 <div class="container">
    <div class="row text-center intro-title">
      <h1 class="text-orange">Reservation</h1>
      <p class="text-white">Make online reservation</p>
    </div>
  </div>
</div>
 
 <!--=================================
 intro bg -->

<!--=================================
 reservation -->

<section class="reservation">
 <div class="page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="section-title text-center">
      <div class="title-separator">
     <i class="glyph-icon flaticon-food-27"></i>
      </div>
        <h2> <span class="text-orange">Make </span> Reservation</h2>
        <p>We provide free, secure and instantly confirmed online reservation.</p>
      </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-10  col-lg-offset-1">
      <form class="form-horizontal" id="contactform">
         <div class="contact-form">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-pencil"></i>
            <input class="web placeholder" type="text" placeholder="Full Name" name="web">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-phone"></i>
            <input class="web placeholder" type="text" placeholder="Phone Number" name="web">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-envelope-o"></i>
            <input class="web placeholder" type="text" placeholder="Your Email" name="web">
          </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field" id="datepicker">
                <i class="fa fa-calendar add-on"></i>
            <input data-format="yyyy-MM-dd" type="text" placeholder="Select date">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field" id="timepicker">
                <i class="fa fa-clock-o icon-time add-on"></i>
            <input data-format="hh:mm:ss" type="text" placeholder="Select time">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
            <div class="selected-box">
                   <select>
                      <option value="Person">Person</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">More then 2</option>
                </select>
                  </div>
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
            <div class="row">
              <div class="col-lg-12">
              <div class="form-submit mt-10 mb-30 text-center">
                 
                 <button id="submit" name="Submit" type="submit" onclick="return false;" class="button uppercase"> Book A Table</button>
              </div>
              </div>
            </div>
             <div class="bottom-text text-center">You can also call : + <span class="text-orange"><strong><a href="tel:(03) 6244 4190">(03) 6244 4190 </a></strong></span> to make a reservation.</div>
            </div> 
         </form>
      </div>
   </div>
  </div>
 </div>
</section>

<!--=================================
 reservation --> 
 
<!--=================================
  footer -->
<div id="includedFootermenu"></div>

<!--=================================
 back to top -->

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-long-arrow-up"></i></a></div> 

 <!--=================================
 footer -->
 
<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- mega menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- datepicker -->
<script type="text/javascript" src="js/datepicker/bootstrap-datetimepicker.min.js"></script>

<!-- select -->
<script type="text/javascript" src="js/jquery-select.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/load-menu.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>