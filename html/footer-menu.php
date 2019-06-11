<?php include 'chikko-info.php';?>

<footer class="footer" style="background-image: url(images/bg/01.jpg);">
    <div class="object-bottom">
        <div class="object-left">
            <img class="img-responsive bottom" src="images/object/06.png" alt="">
        </div>
        <div class="object-right">
            <img  class="img-responsive bottom" src="images/object/16.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center mt-60">
                <div class="footer-logo">
                    <img id="logo-footer" class="img-responive" src="images/logo.png" alt="">
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p class=" text-white mb-60">We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="newsletter">
                    <!--<h4 class="text-white mb-30">Newsletter</h4>-->
                    <!--<p class="text-white">Signing up to our newsletter keeps you up-to-date!</p>-->
                    <!--<div class="newsletter-input">-->
                    <!--<input type="email" placeholder="Your email*" name="email">-->
                    <!--<a href="#"><i class="fa fa-envelope-o"></i></a>-->
                    <!--</div>-->
                </div>
            </div>
            <!--<div class="col-lg-3 col-md-3 col-sm-6">-->
            <!--<div class="tweet">-->
            <!--<h4 class="text-white mb-30">Latest tweet</h4>-->
            <!--<div class="tweet-block mb-20">-->
            <!--<div class="icon">-->
            <!--<i class="fa fa-twitter text-white"></i>-->
            <!--</div>-->
            <!--<div class="content">-->
            <!--<p class="text-white">Our brand new has just launched! </p>-->
            <!--<span class="text-orange">03:05 AM Sep 18th</span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="tweet-block">-->
            <!--<div class="icon">-->
            <!--<i class="fa fa-twitter text-white"></i>-->
            <!--</div>-->
            <!--<div class="content">-->
            <!--<p class="text-white">Get your photo on win prizes. </p>-->
            <!--<span class="text-orange">03:05 AM Sep 18th</span>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="opening-time">
                    <h4 class="text-white mb-30">Open time</h4>
                    <ul>
                        <li>Monday<span class="text-right">8am - 5:30pm </span></li>
                        <li>Tuesday-Saturday<span>8am - 8pm</span></li>
                        <li>Sunday<span >9am - 5pm</span></li>
                        <li>Close on public holidays</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="contact">
                    <h4 class="text-white mb-30">Contact</h4>
                    <p class="text-white"><?php echo $address;?></p>
                    <p class="text-white"><a href="tel: <?php echo $tel;?>" ><?php echo $tel;?></a></p>
                    <p class="text-white"><?php echo $email;?></p>
                    <a href="https://www.google.com.au/maps/place/Chikko+Cafe+Eastlands/@-42.8673884,147.3682196,15z/data=!4m5!3m4!1s0x0:0x9b0de57e6af85b43!8m2!3d-42.8673884!4d147.3682196"><i class="fa fa-map-o pr-10"></i>  Find us here</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="co-lg-12 co-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="footer-social">
                        <ul class="list-inline">
                            <li><a href="<?php echo $facebook_link;?>" data-tooltip="facebook"> <i class="fa fa-facebook"></i> </a> </li>
                            <!--<li><a href="#" data-tooltip="twitter"> <i class="fa fa-twitter"></i> </a> </li>-->
                            <!--<li><a href="#" data-tooltip="google-plus"> <i class="fa fa-google-plus"></i> </a> </li>-->
                            <li><a href="<?php echo $instagram_link;?>" data-tooltip="instagram"> <i class="fa fa-instagram"></i> </a> </li>
                            <li><a href="<?php echo $tripadvisor_link;?>" data-tooltip="tripadvisor"> <i class="fa fa-tripadvisor"></i> </a> </li>
                        </ul>
                    </div>
                    <p class="text-white mt-30"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>
                        All right reserved by Chikko.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>