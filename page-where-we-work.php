<?php
/*
Template Name: Where we Work
*/
get_header(); ?>
<?php get_sidebar('approach'); ?>
    <div id="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="jrs-map">
            	<iframe src="http://staging.jrsbiodiversity.org/wp-content/themes/jrs/map/jrs-map.php" scrolling="no" frameborder="0" height="282px" width="418"></iframe>
            </div>
            <?php the_content(); ?>
    </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('news'); ?>
<?php get_footer(); ?>