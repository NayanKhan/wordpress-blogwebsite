                <!-- Left Area -->

                <div class="col-lg-8">
                    <div class="row">
                        <?php 
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                // Your loop code
                        ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-inner style-border">
                                <div class="thumb">
                                    <a href="<?php the_permalink(); ?>">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('post-thumbnails');
                                        } 
                                    ?>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user"></i> <?php the_tags(); ?></li>
                                        <li><i class="fa fa-calendar-check-o"></i></i> <?php echo the_date();?></li>
                                    </ul>
                                    <h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h5>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="read-more-text" href="<?php the_permalink(); ?>">READ MORE <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div> 
                        <?php endwhile;
                        else :
                            _e( 'Sorry, no posts were found.', 'textdomain' );
                        endif;
                        ?>
                    </div>
                </div>
                
                <!--  -->
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
                
                
            
                <div class="col-12 text-center">
                    <nav class="td-page-navigation">
                        
                        <ul class="pagination" <?php if('your_custom_pagination'){ codex_pagination(); } else {?>>
                            <li><?php next_post_link();?></li>
                            <li><?php previous_post_link();?></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>