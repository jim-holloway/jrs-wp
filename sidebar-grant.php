<div id="sidebar-news">
                <h3 class="gray">Related News</h3>
                <?php 
                $my_query = new WP_Query('category_name=grantee-news&paged=$paged&showposts=3'); 
                    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                    <article>
                        <?php my_excerpt(16); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
                    </article>          
                <?php endwhile; ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php $posts = get_field('grant-photo-gallery');
                     if( $posts ): ?>
                     <h3 class="gray">Project Photos</h3>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>

                                <div id="side-photo">
                                     <a class="fancybox" data-fancybox-group="gallery" href="#test-<?php echo get_the_ID();?>">
                                         <div class="side-photo-wrap">
                                            <img src="<?php (the_field('photo')); ?>" /></a>
                                         </div>
                                </div>


                                <div id="test-<?php echo get_the_ID();?>" style="display:none;width:700px;">
                                    <div class="fb-gallery">
                                        <div class="gallery-photo">
                                            <img src="<?php (the_field('photo')); ?>" alt="">
                                        </div>
                                    <?php if (get_field('info')): ?>
                                        <div class="gallery-left-content">
                                            <?php (the_field('info')); ?>
                                        </div>
                                    <?php endif; ?>
                                        <div class="gallery-right-content">
                                            <?php (the_field('caption')); ?>
                                        </div>
                                    </div>
                                </div><!--end test-->
                                
                                
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif;?>
                 <?php endwhile;endif; ?>





            </div>
