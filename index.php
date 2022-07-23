
<?php get_header(); ?>
    
<!-- breadcrumb start -->
<div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Blog</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
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

                <?php get_template_part('template_part/blog_setup');?>
                
            </div>
        </div>
    </div>
    <!-- blog area end -->



<?php get_footer(); ?>