<?php
/*
Template Name: JRS IRS 990s
*/
get_header(); ?>
<?php get_sidebar('leftnav'); ?>
    <div id="main-about">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>