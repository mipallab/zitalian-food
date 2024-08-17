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
                <li><a href="index.php">Home</a></li>
                <li><a href="location.php">Location</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="row">
                    <div class="col-1-3">
                        <div class="wrap-col">
                            <h3><?php echo $address['title']; ?></h3>
                            <p><?php echo $address['desc']; ?></p><br />
                            <h3><?php echo $workScedule['title'];?></h3>
                            <?php foreach($workScedule['scedule'] as $scedule):?>
                            <p><span><?php echo $scedule['day'];?>: </span><?php echo $scedule['time'];?></p>
                            <?php endforeach;?>
                            <br />
                            <h3><?php echo $contactInfo['title'];?></h3>
                            <?php foreach($contactInfo['name'] as $field):?>
                            <p><span><?php echo $field['title'];?>: </span><?php echo $field['value'];?></p>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="col-2-3">
                        <div class="wrap-col">
                            <div class="wrap-map"><iframe src="<?php echo $widget['location']['mapLink'];?>"
                                    width="100%" height="380" frameborder="0" style="border:0"></iframe></div>
                        </div>
                    </div>
                </div>
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