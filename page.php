
<?php get_header(); ?>
    
    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="section-title mb-0 text-center">
                        <h2 class="page-title"><?php echo get_the_title(); ?></h2>
                        <ul class="page-list">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li>Blog</li>                  
                        </ul>
                                  
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->
    
        <!-- blog area start -->
        <div class="blog-area pd-top-120 pd-bottom-120">
            <div class="container">
                <div class="row">
    
                    <?php get_template_part('template_part/post_setup');?>
                    
                </div>
            </div>
        </div>
        <!-- blog area end -->
    
    
    
    <?php get_footer(); ?>