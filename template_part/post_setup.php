                                    <!-- Left Area -->

                <div class="col-lg-8">
                        <?php 
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                // Your loop code
                        ?>
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
                                    <li><i class="fa fa-calendar-check-o"></i> <?php echo the_date();?></li>
                                </ul>
                                <h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <?php endwhile;
                        else :
                            _e( 'Sorry, no posts were found.', 'textdomain' );
                        endif;
                        ?>
                </div>
                
                <!--  -->
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
                