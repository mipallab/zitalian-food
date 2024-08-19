<!-- Header -->
<?php
if (file_exists(__DIR__ . "/header.php")) {
    require_once(__DIR__ . "/header.php");
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
                <li><a href="menu.html">Menu</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="row">


                    <?php foreach ($foods_menus as $foodMenu): ?>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <h3><?php echo $foodMenu['name']; ?></h3>

                                <?php foreach ($foodMenu['items'] as $item): ?>
                                    <div class="post">
                                        <a href="<?php echo $item['link']; ?>"><img style="width:100px; height:65px;"
                                                src="<?php echo $item['img']; ?>" /></a>
                                        <div class="wrapper">
                                            <h5><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h5>
                                            <span><?php echo $item['price']; ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<?php

if (file_exists(__DIR__ . '/footer.php')) {
    require_once(__DIR__ . "/footer.php");
} else {
    echo "footer.php file not found!";
}

?>