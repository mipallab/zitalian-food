<!-- Header -->
<?php
if ( file_exists(__DIR__. "/header.php") ) {
    require_once(__DIR__. "/header.php");
} else {
    echo "Header.php file not found!";
}
	
?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="row">
                    <?php foreach ( $gallerys as $gallery ) :?>
                    <div class="col-1-4">
                        <div class="zoom-container">
                            <a href="<?php echo $gallery['link'];?>">
                                <span class="zoom-caption">
                                    <span><?php echo $gallery['title'];?></span>
                                </span>
                                <img src="<?php echo $gallery['img'];?>" />
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
</section>


<!-- Footer -->
<?php

if ( file_exists(__DIR__.'/footer.php') ) {
    require_once(__DIR__."/footer.php");

} else {
    echo "footer.php file not found!";
}
	
?>