<?php
/*
Template Name: Home
*/
get_header('home'); ?>

<!-- Loop Through Items On Page -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
        <?php if(get_field('home_slider')): while(has_sub_field('home_slider')): ?>
        <a href="<?php the_sub_field('slide_link'); ?>"><img src="<?php the_sub_field('photo_up_load'); ?>" title="<?php the_sub_field('photo_caption'); ?>"/></a>
        <?php endwhile;endif; ?>
    </div>
</div>

<div id="high-light-img">
    <div class="img-wrap">
    <?php if(get_field('call_out_1')): while(has_sub_field('call_out_1')): ?>
        <a href="<?php the_sub_field('call_out_1_link'); ?>"><img src="<?php the_sub_field('call_out_1_photo'); ?>" /></a>
        <h2><a href="<?php the_sub_field('call_out_1_link'); ?>"><?php the_sub_field('call_out_1_text'); ?></a><a href="<?php the_sub_field('call_out_1_link'); ?>"></h2>
    <?php endwhile;endif; ?>
    </div>

    <div class="img-wrap high-light-img">
    <?php if(get_field('call_out_2')): while(has_sub_field('call_out_2')): ?>
        <a href="<?php the_sub_field('call_out_2_link'); ?>"><img src="<?php the_sub_field('call_out_2_photo'); ?>" /></a>
        <h2><a href="<?php the_sub_field('call_out_2_link'); ?>"><?php the_sub_field('call_out_2_text'); ?></a></h2>
    <?php endwhile;endif; ?>
    </div>

    <div class="img-wrap">
    <?php if(get_field('call_out_3')): while(has_sub_field('call_out_3')): ?>
        <a href="<?php the_sub_field('call_out_3_link'); ?>"><img src="<?php the_sub_field('call_out_3_photo'); ?>" /></a>
        <h2><a href="<?php the_sub_field('call_out_3_link'); ?>"><?php the_sub_field('call_out_3_text'); ?></a></h2>
    <?php endwhile;endif; ?>
    </div>           
</div>

<?php endwhile;endif; ?> <!-- End Page Loop -->

       
<div class="col-2 border-right" id="home-left">      
    <h2><a href="<?php bloginfo( 'url' ); ?>/news">Grantee News</a></h2>
<?php 
$my_query = new WP_Query('category_name=grantee-news&showposts=3'); 
    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <article class="bg-none">
            <?php my_excerpt(16); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
        </article>          
    <?php endwhile; ?>
</div><!--end home left -->

<div class="col-2" id="home-right">      
     <h2 ><a href="<?php bloginfo( 'url' ); ?>/news">JRS News</a></h2>
<?php
$my_query = new WP_Query('category_name=jrs-news&showposts=3');
    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
        <article class="bg-none">
            <?php my_excerpt(16); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
        </article>          
    <?php endwhile; ?>
</div><!--end main-->

<?php get_footer(); ?>