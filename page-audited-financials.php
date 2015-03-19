<?php
/*
Template Name: Audited Financials
*/
get_header(); ?>
<?php get_sidebar('leftnav'); ?>
    <div id="main-about">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>