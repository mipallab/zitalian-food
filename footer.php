<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
    <div class="wrap-footer">
        <div class="row">
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4><?php echo $widget['title'];?></h4>
                    <div class="row">
                        <?php foreach ( $widget['testimonial'] as $testmonials ):?>
                        <img style="width:60px; height:60px" src="<?php echo $testmonials['image'];?>">
                        <h5><?php echo $testmonials['name'];?></h5>
                        <p style="text-align: justify;"><?php echo $testmonials['desc'];?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4><?php echo $widget['location']['title'];?></h4>
                    <div class="wrap-map"><iframe src="<?php echo $widget['location']['mapLink'];?>" width="100%"
                            height="200" frameborder="0" style="border:0"></iframe></div>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4><?php echo $widget['openDaily']['title'];?></h4>

                    <?php foreach ( $widget['openDaily']['timeSedule']  as $sedule) :?>
                    <p><?php echo $sedule[0]; ?></p>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper">
            <?php echo $copyright['title'];?>
            <ul class="quick-link f-right">
                <?php foreach ($copyright['pages'] as $page) : ?>
                <li><a href="<?php echo $page['link'];?>"><?php echo $page['p_title'];?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</footer>


<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
$(function() {
    // Slideshow 4
    $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });
});
</script>
</div>
</body>

</html>