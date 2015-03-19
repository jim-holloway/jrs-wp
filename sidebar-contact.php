<div id="sidebar-news">
    <h3 class="gray">Recent News</h3>
     <?php
    $my_query = new WP_Query('category_name=jrs-news&paged=$paged&showposts=5');
        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <article>
        <?php my_excerpt(16); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
    </article>          
<?php endwhile; ?>
    
    <h3 class="gray push-top">Recent Grants</h3>
    <?php 
    $my_query = new WP_Query('category_name=grantee-news&paged=$paged&showposts=5'); 
        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <article>
        <?php my_excerpt(16); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
    </article>          
<?php endwhile; ?>
</div>