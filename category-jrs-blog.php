<?php
/*
Template Name: Blog
*/
get_header(); ?>
    <div id="news">
        <h1>JRS Blog</h1>

        <?php $the_query = new WP_Query( 'category_name=jrs-blog&posts_per_page=1' ); ?>
        
        <?php if ( $the_query->have_posts() AND !get_query_var('paged')) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
            <?php $ft_post_id = get_the_ID(); ?> 
            <div class="featured-post">
                <article>
                    <h3><a href="<?php the_permalink(); ?>" class="gray"><?php the_title(); ?></a><span class="float-right small"><?php the_time('m/d/y'); ?></span></h3>
                    <div class="post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>
                    <?php my_excerpt(45); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
                    <div style="clear:both;"></div>
                </article>
                <hr>
            </div>              
        <?php endwhile;endif; ?>

        <?php rewind_posts(); ?>

        <div class="blog">

        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ($ft_post_id !=  get_the_ID()): ?>
                <article>
                    <div class="post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(100,100) );?></a></div>
                    <h3><a href="<?php the_permalink(); ?>" class="gray"><?php the_title(); ?></a><span class="float-right small"><?php the_time('m/d/y'); ?></span></h3>
                    <?php my_excerpt(45); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
                    <div style="clear:both;"></div>
                </article>          
            <?php endif; ?>
        <?php endwhile;endif; ?>
            <?php if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>  
        </div>
    </div><!--end main-->       
<?php get_sidebar('categories'); ?>
<?php get_footer(); ?>