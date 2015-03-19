<?php
/*
Template Name: News
*/
get_header(); ?>
    <div id="news">
        <div class="col-2 border-right grant-news">
            <h2 class="title-push-r">Grantee News</h2>
          <?php $the_query = new WP_Query( 'category_name=grantee-news&posts_per_page=1' ); ?> 
      <?php
        $my_query = new WP_Query('category_name=grantee-news&showposts=5'); 
            while ($my_query->have_posts() AND !get_query_var('paged'))  : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>" class="gray"><?php the_title(); ?></a><span class="float-right small news-date"><?php the_time('m/d/y'); ?></span></h3>
                    <?php my_excerpt(13); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
                </article>          
            <?php endwhile; ?>
        </div>
         <?php if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>
         
          <?php wp_reset_query(); ?> 
        <div class="col-2 jrs-news">
           <h2 class="title-push-r">JRS News</h2>
           <?php $the_query = new WP_Query( 'category_name=jrs-news&posts_per_page=1' ); ?>
        <?php 
        $my_query = new WP_Query('category_name=jrs-news&showposts=5');
            while ($my_query->have_posts() AND !get_query_var('paged')) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>" class="gray"><?php the_title(); ?></a><span class="float-right small news-date"><?php the_time('m/d/y'); ?></span></h3>
                    <?php my_excerpt(13); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
                </article>          
            <?php endwhile; ?> 
         </div>
         <?php if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>
            
    </div><!--end main-->       
<?php get_sidebar('categories'); ?>
<?php get_footer(); ?>