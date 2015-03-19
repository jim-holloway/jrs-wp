<?php
/*
Template Name: How to Apply
*/
get_header(); ?>
<?php get_sidebar('approach'); ?>
    <div id="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <h3><?php (the_field('application_title_1')); ?> <a href="<?php (the_field('application_1')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/dl-b.png" /></a></h3>
            <h3><?php (the_field('application_title_2')); ?> <a href="<?php (the_field('application_2')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/dl-b.png" /></a></h3>
    </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('news'); ?>
<?php get_footer(); ?>  