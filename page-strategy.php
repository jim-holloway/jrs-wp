<?php
/*
Template Name: Strategy
*/
get_header(); ?>
<?php get_sidebar('approach'); ?>
    <div id="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
    </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('news'); ?>
<?php get_footer(); ?>