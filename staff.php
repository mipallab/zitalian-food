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
                <li><a href="staff.html">Staff</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="chef">
                    <div class="row">
                        <?php foreach($staffs as $staff):?>
                        <div class="col-1-4">
                            <div class="wrap-col">
                                <div class="zoom-container">
                                    <a href="#">
                                        <img src="<?php echo $staff['img'];?>" />
                                    </a>
                                </div>
                                <h3><?php echo $staff['name'];?></h3>
                                <ul class="social t-center">
                                    <?php foreach($staff['socialInfo'] as $socilIn):?>
                                    <li><a href="<?php echo $socilIn['link'];?>"><?php echo $socilIn['icon'];?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <?php endforeach;?>
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