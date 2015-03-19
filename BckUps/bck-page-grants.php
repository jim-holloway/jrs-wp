<?php
/*
Template Name: Grant Portfolio
*/
get_header(); ?>
<?php get_sidebar('filters'); ?>
    <div id="main-grant">
        <h1 class="zero">JRS Grant Portfolio</h1>
        <?php //Start of Loop
        $my_query = new WP_Query('post_type=grant');
                while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
         <div class="grant">
            <?php the_post_thumbnail("page-featured-image"); ?>
            <h3 class="zero"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="small zero">“<?php (the_field('project')); ?>”<br><?php (the_field('amount')); ?> / <?php (the_field('start_date')); ?></p>
            <?php the_excerpt(); ?>                       
         </div>                 
        <?php endwhile; ?>
        <div class="pagination">
                <ul>
                    <li><a href="javascript:;">1,</a></li>
                    <li><a href="javascript:;">2,</a></li>
                    <li><a href="javascript:;">3,</a></li>
                    <li><a href="javascript:;">4</a></li>
                    <li><a href="javascript:;">&#62;&#62;</a></li>
                </ul>
            </div>
    </div><!--end main-->
<?php get_footer(); ?>