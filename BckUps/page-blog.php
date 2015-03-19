<?php
/*
Template Name: Blogss
*/
get_header(); ?>
    <div id="news">
        <h1>JRS Blogss</h1>
        <div class="blog">
        <?php if (is_page('blog')) {
         $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $my_query = new WP_Query('category_name=jrs-blog&paged=$paged&showposts=6'); } ?>
        <?php    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>" class="gray"><?php the_title(); ?></a><span class="float-right small"><?php the_time('m/d/y'); ?></span></h3>
                    <?php my_excerpt(45); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
                </article>          
            <?php endwhile; ?>
            <?php if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>
        </div>
    </div><!--end main-->       
<?php get_sidebar('categories'); ?>
<?php get_footer(); ?>