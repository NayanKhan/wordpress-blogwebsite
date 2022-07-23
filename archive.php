
<?php get_header(); ?>
    
    <!-- breadcrumb start -->
    <div class="title-bar">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="section-title mb-0 text-center">
                        <?php the_archive_title('<h1 class="archive-title">','</h1>') ?>
                        <?php the_author_description('<div class="author_des">','</div>') ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->
    
        <!-- blog area start -->
        <div class="blog-area pd-top-120 pd-bottom-120">
            <div class="container">
                <div class="row">
    
                    <?php get_template_part('template_part/blog_setup');?>
                    
                </div>
            </div>
        </div>
        <!-- blog area end -->
    
    
    
    <?php get_footer(); ?>