<div id="sidebar-news">
    <h3 class="gray">Recent News</h3>
     <?php
    $my_query = new WP_Query('category_name=jrs-news&paged=$paged&showposts=3');
        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <article>
        <?php my_excerpt(16); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
    </article>          
<?php endwhile; ?>
    
    <h3 class="gray push-top">Recent Grants</h3>
    <?php 
    $my_query = new WP_Query('category_name=grantee-news&paged=$paged&showposts=3'); 
        while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
    <article>
        <?php my_excerpt(16); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
    </article>          
<?php endwhile; ?>
    <!-- <article>
        <h3 class="gray text-center grant-title">Apply for a Grant</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
        <h5 class="text-center"><a href="http://cb9001.us/wordpress/our-approach/how-to-apply/"><img src="<?php echo get_template_directory_uri(); ?>/images/apply.png" /></a></h5>
    </article> -->
</div>