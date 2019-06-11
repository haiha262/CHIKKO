<?php include 'chikko-info.php';?>

<div class="bb-custom-wrapper" id="book-1">
    <div id="full" class="bb-bookblock">
        <div class="bb-item">
            <div class="bb-custom-side page-layout-3">
                <div class="book-content text-center">
                    <div class="book-logo mt-30">
                        <img class="img-responsive center-block" src="images/menu/book-logo.png" alt="">
                    </div>
                    <div class="delivery-service">
                        <span class="text-white mb-10">delivery service</span>
                        <h2 class="text-white mb-10 mb-10 "> <a href="tel: <?php echo $tel;?>" ><?php echo $tel;?></a> </h2>
                        <p class="mb-10 text-white"><?php echo $address;?></p>
                        <p class="text-white"><?php echo $email;?> </p>
                    </div>
                </div>
            </div>
            <?php print_doublepage(  "breakfast.txt",false);?>
        </div>
        <div class="bb-item">
                <?php print_doublepage(  "asian-favourite.txt",false);?>
                <?php print_doublepage(  "small-treat.txt",false);?>
        </div>
        <div class="bb-item">
            <?php print_doublepage(  "soup-in-a-bowl.txt",false);?>
            <?php print_doublepage(  "wok.txt",false);?>
        </div>
        <div class="bb-item">
            <?php print_doublepage(  "stir-fried.txt",false);?>
            <?php print_doublepage(  "vegetarian.txt",false);?>
        </div>
        <div class="bb-item">
            <?php print_doublepage(  "chef.txt",false);?>
            <?php print_doublepage(  "kids.txt",false);?>
        </div>
        <div class="bb-item">
            <?php print_doublepage(  "shakes.txt",false);?>
            <?php print_doublepage(  "asian-grill.txt",false);?>
        </div>
        <div class="bb-item">
            <?php print_doublepage(  "shakes.txt",false);?>
            <div class="bb-custom-side page-layout-3">
                <div class="book-content text-center">
                    <div class="book-logo mt-30">
                        <img class="img-responsive center-block" src="images/menu/book-logo.png" alt="">
                    </div>
                    <div class="delivery-service">
                        <span class="text-white mb-10">delivery service</span>
                        <h2 class="text-white mb-10 mb-10 "> <a href="tel: <?php echo $tel;?>" ><?php echo $tel;?></a></h2>
                        <p class="mb-10 text-white"><?php echo $address;?></p>
                        <p class="text-white"><?php echo $email;?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- bb-bookblock -->
    <nav>
        <a href="#" class="bb-nav-prev">prev</a>
        <a href="#" class="bb-nav-next">Next</a>
        <a href="#" class="bb-nav-close">Close</a>
    </nav>
</div>

<?php
function print_doublepage(  $file_source,$thumbnail)
{
    ?>
    <?php
    $file = fopen("./listfood/".$file_source, "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    $total_line = 0;
    $line_arr = array();
    while(!feof($file)) {
        $line = fgets($file);
        if($line != null)
            $line_arr[$total_line++] = $line;
    }
    fclose($file);
    ?>
    <div class="bb-custom-side page-layout-3">
        <div class="book-content">
            <?php
            for($i = 0; $i < $total_line ; $i++) {//
                $line = $line_arr[$i];
                if ($line != null) {
                    $token = explode("|", $line);
                    if (strtolower(trim($token[0])) == 'title') {
                        ?>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="section-title text-center">
                                    <h2 class="text-white"><span
                                                class="text-orange"><?php echo ucwords(trim($token[1])); ?></span>
                                        menu</h2>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    else if(is_numeric(trim($token[0]))) //for each product
                    {
                        // List menu ?>
                        <div class="row mb-50">
                            <div class="col-lg-12 col-md-12">
                                <div class="menu-body menu-left">
                                    <?php if ($thumbnail)
                                    {?>
                                        <div class="menu-thumbnail">
                                            <img class="img-responsive center-block" src="images/dish/<?php echo trim($token[4]); ?>" alt="">
                                        </div>
                                        <?php
                                    }?>
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
                        </div>

                        <?php
                    }
                }
            }?>




            <?php // List menu ?>
        </div>
    </div>
<?php
}
?>

<div class="bb-custom-wrapper" id="book-2">
    <!--    mobile -->
    <div id="full" class="bb-bookblock">
        <div class="bb-item ">
            <div class="bb-custom-side page-layout-3">
                <div class="book-content text-center">
                    <div class="book-logo mt-30">
                        <img class="img-responsive center-block" src="images/menu/book-logo.png" alt="">
                    </div>
                    <div class="delivery-service">
                        <span class="text-white mb-10">delivery service</span>
                        <h2 class="text-white mb-10 mb-10 "> <a href="tel: <?php echo $tel;?>" ><?php echo $tel;?></a></h2>
                        <p class="mb-10 text-white"><?php echo $address;?></p>
                        <p class="text-white"><?php echo $email;?> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bb-item ">
            <?php print_doublepage(  "breakfast.txt",false);?>

        </div>
        <div class="bb-item ">
            <?php print_doublepage(  "asian-favourite.txt",false);?>

        </div>
        <div class="bb-item ">
            <?php print_doublepage(  "small-treat.txt",false);?>

        </div>
        <div class="bb-item ">
            <?php print_doublepage(  "soup-in-a-bowl.txt",false);?>

        </div>
        <div class="bb-item">
            <?php print_doublepage(  "wok.txt",false);?>

        </div>
        <div class="bb-item">
            <?php print_doublepage(  "stir-fried.txt",false);?>

        </div>
        <div class="bb-item">
            <?php print_doublepage(  "vegetarian.txt",false);?>

        </div>
        <div class="bb-item">
            <?php print_doublepage(  "kids.txt",false);?>

        </div><div class="bb-item">
            <?php print_doublepage(  "shakes.txt",false);?>

        </div><div class="bb-item">
            <?php print_doublepage(  "asian-grill.txt",false);?>

        </div><div class="bb-item">
            <?php print_doublepage(  "waffle.txt",false);?>

        </div>

        <div class="bb-item ">
            <div class="bb-custom-side page-layout-3">
                <div class="book-content text-center">
                    <div class="book-logo mt-30">
                        <img class="img-responsive center-block" src="images/menu/book-logo.png" alt="">
                    </div>
                    <div class="delivery-service">
                        <span class="text-white mb-10">delivery service</span>
                        <h2 class="text-white mb-10 mb-10 "> <a href="tel: <?php echo $tel;?>" ><?php echo $tel;?></a></h2>
                        <p class="mb-10 text-white"><?php echo $address;?></p>
                        <p class="text-white"><?php echo $email;?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- bb-bookblock -->
    <nav>
        <a href="#" class="bb-nav-prev">prev</a>
        <a href="#" class="bb-nav-next">Next</a>
        <a href="#" class="bb-nav-close">Close</a>
    </nav>
</div>