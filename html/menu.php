<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Menu Chikko" />
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
    <!--FancyBox-->
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" />

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

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/02.jpg);">
<div class="container">
    <div class="row text-center intro-title">
      <h1 class="text-orange">Menu</h1>
      <p class="text-white">We Know The Secret Of Your Success</p>
    </div>
  </div>
</div>
 
<!--=================================
 our-menu -->
 
<section class="our-menu white-bg  page-section-pt">
  <div class="container">
     <div class="row">
     <div class="col-lg-12 col-md-12">
      <div class="tabs clearfix"> 
          <!-- Nav tabs -->
          <ul class="tabs-link white text-center">
              <li class="active"><a href="#tab-1"  aria-expanded="false"><i class="glyph-icon flaticon-hot-mug-doodle"></i> Breakfast</a></li>
              <li><a href="#tab-2"  aria-expanded="true"><i class="glyph-icon flaticon-food-57"></i> ASIAN FAVOURITE</a></li>
              <li><a href="#tab-3" ><i class="glyph-icon flaticon-long-sandwich"></i> Small Treat</a></li>
              <li><a href="#tab-4" ><i class="glyph-icon flaticon-appetizers-bowl"></i> Soup</a></li>
              <li><a href="#tab-5"  aria-expanded="true"><i class="glyph-icon flaticon-food-36"></i> WOK OF YOUR CHOICE</a></li>
              <li><a href="#tab-6" ><i class="glyph-icon flaticon-food-9"></i> Stir Fried</a></li>
              <li><a href="#tab-7" ><i class="glyph-icon flaticon-food-21"></i> Vegetarian</a></li>
              <li><a href="#tab-8" ><i class="glyph-icon flaticon-food-58"></i> CHEF SPECIAL</a></li>
              <li><a href="#tab-9" ><i class="glyph-icon flaticon-french-fries-box"></i> KID MENU</a></li>
              <li><a href="#tab-10" ><i class="glyph-icon flaticon-foamy-beer-jar"></i> Shakes</a></li>
              <li><a href="#tab-11" ><i class="glyph-icon flaticon-food-54"></i> ASIAN GRILL BAR</a></li>
              <li><a href="#tab-12" ><i class="glyph-icon flaticon-crepe-and-cream"></i> Waffle</a></li>
         
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

 <!--=================================
 special-menu -->

 <!--=================================
menu-list-bg -->
 <!--=================================
menu-list-bg -->

<!--=================================
our-menu -->


 
<!--=================================
our-menu -->

 <!--=================================
menu-list-bg -->
<?php
print_tab("breakfast.txt","tab-1");
print_tab("asian-favourite.txt","tab-2");
print_tab("small-treat.txt","tab-3");
print_tab("soup-in-a-bowl.txt","tab-4");
print_tab("wok.txt","tab-5");
print_tab("stir-fried.txt","tab-6");
print_tab("vegetarian.txt","tab-7");
print_tab("chef.txt","tab-8");
print_tab("kids.txt","tab-9");
print_tab("shakes.txt","tab-10");
print_tab("asian-grill.txt","tab-11");
print_tab("waffle.txt","tab-12");

function print_tab($file_source,$tabId)
{
    $file = fopen("./listfood/" . $file_source, "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
    $total_line = 0;
    $line_arr = array();
    while (!feof($file)) {
        $line = fgets($file);
        if ($line != null)
            $line_arr[$total_line++] = $line;
    }
    fclose($file);

    for ($i = 0; $i < $total_line; $i++) {//
        $line = $line_arr[$i];
        if ($line != null) {
            $token = explode("|", $line);
            if (strtolower(trim($token[0])) == 'title') {
                ?>
                <section id='<?php echo $tabId; ?>'class="menu-list-bg bg-overlay-black-80" style="background-image: url(images/bg/09.jpg);">
                    <div class="container text-center">
                        <div class="row content-text">
                            <h2><?php
                                echo ucwords(trim($token[1]));
                                ?></h2>
                        </div>
                    </div>
                </section>
                <?php
            }
            else if(is_numeric(trim($token[0]))) //for each product
            {?>
<!--================================= our-menu -->
        <section class="our-menu page-section-pt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="menu-body menu-left menu-white">
                            <div class="menu-thumbnail">
                                <a href="images/dish/<?php echo trim($token[4]); ?>">
                                <img class="img-responsive center-block" src="images/dish/<?php echo trim($token[4]); ?>" alt="">
                                </a>
                            </div>
                            <div class="menu-details">
                                <div class="menu-title clearfix">
                                    <h4><?php echo trim($token[1]); ?></h4>
                                    <span class="price">$<?php echo trim($token[3]); ?></span>
                                </div>
                                <div class="menu-description">
                                    <p><?php echo trim($token[2]); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if($line_arr[$i+1] != "\n") {
                        $tkn = explode("|", $line_arr[$i + 1]);
                        if(is_numeric(trim($tkn[0]))) {
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="menu-body menu-left menu-white">
                                    <div class="menu-thumbnail">
                                        <a href="images/dish/<?php echo trim($tkn[4]); ?>">
                                        <img class="img-responsive center-block" src="images/dish/<?php echo trim($tkn[4]); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="menu-details">
                                        <div class="menu-title clearfix">
                                            <h4><?php echo trim($tkn[1]); ?></h4>
                                            <span class="price">$<?php echo trim($tkn[3]); ?></span>
                                        </div>
                                        <div class="menu-description">
                                            <p><?php echo trim($tkn[2]); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
                <!--================================= our-menu -->
                <?php
            }
        }
    }
}
?>

 <!--=================================
menu-list-bg -->



<!--=================================
  footer -->
<div id="includedFootermenu"></div>
<!--=================================
 footer --> 

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

<!-- custom -->
<script type="text/javascript" src="js/load-menu.js"></script>

<script type="text/javascript" src="js/custom.js"></script>
<!--Fancybox-->
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.js"></script>

</body>
</html>