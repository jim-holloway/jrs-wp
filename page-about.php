<?php
/*
Template Name: About Us
*/
get_header(); ?>
<?php get_sidebar('leftnav'); ?>
    <div id="main-about">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail("page-featured-image"); ?>
            <div id="about-overlay">
                <h2><?php (the_field('h2')); ?></h2>
                <h3><?php (the_field('h3')); ?></h3>
                <p><?php (the_field('text')); ?></p>
            </div>
                <?php the_content(); ?>
            </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>