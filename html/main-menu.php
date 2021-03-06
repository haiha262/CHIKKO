<?php include 'chikko-info.php';?>
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="topbar-left text-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> <a href="tel: <?php echo $tel;?>" ><?php echo $tel;?></a> </li>
                        <li><i class="fa fa-envelope-o"></i> <?php echo $email;?> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="topbar-right text-right">
                    <ul>
                        <li><a href="<?php echo $facebook_link;?>"> <i class="fa fa-facebook"></i> </a> </li>
                         <li><a href="<?php echo $instagram_link;?>"> <i class="fa fa-instagram"></i> </a> </li>
                        <li><a href="<?php echo $tripadvisor_link;?>"> <i class="fa fa-tripadvisor"></i> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mega menu -->
<div class="menu">
    <!-- menu start -->
    <nav id="menu-1" class="mega-menu ">
        <!-- menu list items container -->
        <section class="menu-list-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                            <li class="head-info">
                                <a href="index.php"><img id="logo_img" src="images/logo.png" alt="logo"> </a>
                                <div class="head-info-content">
                                    <div class="info-left pull-left">
                                        <div class="time">
                                            <h6>TUE – SAT</h6>
                                            <p>8:00 – 20:00</p>
                                        </div>
                                        <div class="time mt-20">
                                            <h6>SUNDAY</h6>
                                            <p>9:00 – 17:00</p>
                                        </div>
                                        <div class="time mt-20">
                                            <h6>MON</h6>
                                            <p>8:00 – 17:30</p>
                                        </div>
                                    </div>
                                    <div class="info-right pull-right">
                                        <div class="address">
                                            <p><?php echo $address;?></p>
                                            <p> <a href="tel: <?php echo $tel;?>"><?php echo $tel;?> </a></p>
                                            <p><?php echo $email;?> </p>
                                            <a href="https://www.google.com.au/maps/place/Chikko+Cafe+Eastlands/@-42.8673884,147.3682196,15z/data=!4m5!3m4!1s0x0:0x9b0de57e6af85b43!8m2!3d-42.8673884!4d147.3682196"><i class="fa fa-map-o pr-10"></i>  Find us here</a>
                                            <ul class="list-inline mt-15">
                                                <li><a href="<?php echo $facebook_link;?>"> <i class="fa fa-facebook"></i> </a> </li>
<!--                                                <li><a href="--><?php //echo $twitter_link;?><!--"> <i class="fa fa-twitter"></i> </a> </li>-->
<!--                                                <li><a href="--><?php //echo $google_link;?><!--"> <i class="fa fa-google-plus"></i> </a> </li>-->
                                                <li><a href="<?php echo $instagram_link;?>"> <i class="fa fa-instagram"></i> </a> </li>
                                                <li><a href="<?php echo $tripadvisor_link;?>"> <i class="fa fa-tripadvisor"></i> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- menu links -->
                        <ul class="menu-links">
                            <!-- active class -->
                            <li><a href="index.php"> Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="catering.php">Catering</a></li>
                            <li><a href="reservation-form.php"> Reservation </a></li>
                            <li><a href="contact.php"> Contact us</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>

    </nav>
    <!-- menu end -->

    <script>

    </script>
</div>
