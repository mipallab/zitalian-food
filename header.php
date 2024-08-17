<?php
    
    if ( file_exists( __DIR__ . "/autoload.php") ) {
        require_once( __DIR__."/autoload.php" );
    } else {
        echo "autoload.php file not found";
    }
  

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title><?php echo $themeOption['title'];?></title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/menu.css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>

<body>
    <div class="wrap-body">
        <!--///////////////////////////////////////Top-->
        <div class="top">
            <div class="zerogrid">
                <ul class="number f-left">
                    <li class="mail">
                        <p><?php echo $themeOption['topBar']['contactInfo']['email'];?></p>
                    </li>
                    <li class="phone">
                        <p><?php echo $themeOption['topBar']['contactInfo']['phone'];?></p>
                    </li>
                </ul>
                <ul class="top-social f-right">
                    <?php foreach($themeOption['topBar']['socialInfo'] as $social): ?>
                    <li><a href="<?php echo $social['link'];?>"> <?php echo $social['icon']; ?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <!--////////////////////////////////////Header-->
        <header>
            <div class="zerogrid">
                <center>
                    <div class="logo"><img src="<?php echo  $themeOption['logo'];?>"></div>
                </center>
            </div>
        </header>
        <div class="site-title">
            <div class="zerogrid">
                <div class="row">
                    <h2 class="t-center"><?php echo $themeOption['qutation'];?></h2>
                </div>
            </div>
        </div>
        <!--//////////////////////////////////////Menu-->
        <a href="#" class="nav-toggle">Toggle Navigation</a>
        <nav class="cmn-tile-nav">
            <ul class="clearfix">
                <?php 
                 $i = 1;
                foreach ($menus as $menu_items):?>
                <li class="colour-<?php echo $i;?>"><a
                        href="<?php echo $menu_items['link'];?>"><?php echo $menu_items['title'];?></a></li>

                <?php
                    $i ++;
                     endforeach;?>
            </ul>
        </nav>