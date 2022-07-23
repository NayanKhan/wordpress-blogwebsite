<!DOCTYPE html>
<html lang="<?php language_attributes( ); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">

	<?php wp_head(); ?>

</head>
<body <?php body_class()?>>

    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->
    <!-- preloader area end -->

    <!-- search popup start-->
    <!-- <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div> -->
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <div class="navbar-area" >
        <!-- navbar top start -->
        <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-md-left text-center">
                        <ul>
                            <li><p><a href=""><i class="fa fa-map-marker"></i> <?php echo get_theme_mod('codex_address'); ?></a></p></li>
                            <li><p><a href="mailto: <?php echo get_theme_mod('codex_email'); ?>"><i class="fa fa-envelope-o"></i>  <?php echo get_theme_mod('codex_email'); ?></a></p></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="topbar-right text-md-right text-center">
                            <li class="social-area">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="<?php echo get_theme_mod('codex_menu_position'); ?>">
            <nav class="navbar navbar-area-1 navbar-area navbar-expand-lg">
                <div class="container nav-container">
                        <div class="col-2 logo-area p-0">
                            <div class="responsive-mobile-menu">
                                <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu" 
                                aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-left"></span>
                                    <span class="icon-right"></span>
                                </button>
                            </div>
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('codex_logo'); ?>" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-7 menu-area">
                            <div class="nav-right-part nav-right-part-mobile">
                                <a class="signin-btn" href="signin.html">Sign In</a>
                                <a class="btn btn-base" href="signup.html">Sign Up</a>
                                <a class="search-bar" href="#"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="collapse navbar-collapse" id="edumint_main_menu">
                            <?php 
							 wp_nav_menu(array(
								'theme_location'    => 'primary_menu',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'navbarSupportedContent',
								'menu_class'        => 'navbar-nav menu-open',
								));
						    ?>
                                <!-- <ul class="navbar-nav menu-open">
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Course</a>
                                        <ul class="sub-menu">
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="course-details.html">Course Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="event.html">Event</a></li>
                                            <li><a href="event-details.html">Event Details</a></li>
                                            <li><a href="team.html">Instructor</a></li>
                                            <li><a href="team-details.html">Instructor Details</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="signin.html">Sign In</a></li>
                                            <li><a href="signup.html">Sign Up</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-lg-3 p-0">
                            <div class="nav-right-part nav-right-part-desktop">
                                <a class="signin-btn" href="signin.html">Sign In</a>
                                <a class="btn btn-base" href="signup.html">Sign Up</a>
                                <a class="search-bar" href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                </div>
            </nav>
        </div>
        
    </div>
    <!-- navbar end -->