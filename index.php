<?php
if ( file_exists(__DIR__. "/header.php") ) {
    require_once(__DIR__. "/header.php");
} else {
    echo "Header.php file not found!";
}
	
?>

<div class="zerogrid">
    <div class="callbacks_container">
        <ul class="rslides" id="slider4">
            <?php foreach ( $slides as  $slide ) :?>
            <li>
                <img src="<?php echo $slide['img'];?>" alt="">
                <div class="caption">
                    <h2> <?php echo $slide['title'];?></h2></br>
                    <p><?php echo $slide['desc'];?></p>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>

<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
    <div class="wrap-container zerogrid">
        <!-----------------content-box-1-------------------->
        <section class="content-box box-1">
            <div class="zerogrid">
                <div class="row box-item">
                    <!--Start Box-->
                    <h2><?php echo $quations['title'];?></h2>
                    <span><?php echo $quations['desc'];?></span>
                </div>
            </div>
        </section>
        <!-----------------content-box-2-------------------->
        <section class="content-box box-2">
            <div class="zerogrid">
                <div class="row wrap-box">
                    <!--Start Box-->
                    <div class="header">
                        <h2>Welcome</h2>
                        <hr class="line">
                        <span>text text text text text</span>
                    </div>
                    <div class="row">

                        <?php foreach ($welcomeMenu['menu_items'] as $welMenu):?>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <div class="box-item">
                                    <span class="ribbon"><?php echo $welMenu['ribbon'];?><b></b></span>
                                    <img src="<?php echo $welMenu['img'];?>" alt="">
                                    <p><?php echo $welMenu['desc'];?></p>
                                    <a href="<?php echo $welMenu['btn']['link'];?>"
                                        class="button button-1"><?php echo $welMenu['btn']['title'];?></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>


<?php

if ( file_exists(__DIR__.'/footer.php') ) {
    require_once(__DIR__."/footer.php");

} else {
    echo "footer.php file not found!";
}
	
?>