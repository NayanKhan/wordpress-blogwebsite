<!-- footer area start -->
<footer class="footer-area bg-gray">
        <div class="footer-subscribe">
            <div class="container">
                <form class="footer-subscribe-inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="single-input-inner style-border-bottom">
                                <input type="text" placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="single-input-inner style-border-bottom">
                                <input type="text" placeholder="Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-base" href="#">Subscribe</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_contact">
                            <?php dynamic_sidebar('footer-1'); ?>
                            <ul class="details">
                                <li><i class="fa fa-map-marker"></i> <?php echo get_theme_mod('codex_address'); ?></li>
                                <li><i class="fa fa-envelope"></i> <?php echo get_theme_mod('codex_email'); ?></li>
                                <li><i class="fa fa-phone"></i> 012 345 678 9101</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_nav_menu">
                        <?php dynamic_sidebar('footer-2'); ?>
                        <?php 
							 wp_nav_menu(array(
								'theme_location'    => 'footer_menu',
								));
						    ?>
                            <!-- <ul>
                                <li><a href="course.html">Branding design</a></li>
                                <li><a href="course.html">Ui/Ux designing </a></li>
                                <li><a href="course.html">Make Elements</a></li>
                                <li><a href="course.html">Business</a></li>
                                <li><a href="course.html">Graphics design</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_blog_list">
                        <?php dynamic_sidebar('footer-3'); ?>
                            <!-- <ul>
                                <li>
                                    <h6><a href="blog-details.html">Big Ideas Of Business Branding Info.</a></h6>
                                    <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                                </li>
                                <li>
                                    <h6><a href="blog-details.html">Ui/Ux Ideas Of Business Branding Info.</a></h6>
                                    <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="widget widget_contact">
                            <h4 class="widget-title">Twitter Feed</h4>
                            <ul class="details">
                                <li>
                                    <i class="fa fa-twitter"></i> 
                                    Simply dummy brand  <a href="#">https//tweets/c3l.com</a>
                                    <div class="time">9 Hours ago</div>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i> 
                                    Simply dummy brand  <a href="#">https//tweets/c7l.com</a>
                                    <div class="time">9 Hours ago</div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 align-self-center">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('codex_logo'); ?>" alt="img"></a>
                    </div>
                    <div class="col-lg-4  col-md-6 order-lg-12 text-md-right align-self-center">
                        <ul class="social-media mt-md-0 mt-3">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-8 text-lg-center align-self-center mt-lg-0 mt-3">
                        <p><?php echo get_theme_mod('codex_copyright'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

	<?php wp_footer(); ?>

</body>
</html>