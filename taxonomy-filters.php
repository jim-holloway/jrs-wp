<?php
/*
Template Name: Grant Portfolio
*/
get_header(); ?>
<?php get_sidebar('filters'); ?>
    <div id="main-grant">
        <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>
        <h1><small>Filter:</small> <?php echo $term->name; ?></h1>
        <?php //Start of Loop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="grant">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("page-featured-image"); ?></a>
            <h3 class="zero"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="small zero">“<?php (the_field('project')); ?>”<br><?php (the_field('amount')); ?> / <?php (the_field('start_date')); ?></p>
            <?php the_excerpt(); ?>                       
         </div>                 
        <?php endwhile; ?><?php endif; ?>

            <?php if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>

    </div><!--end main-->
<?php get_footer(); ?>