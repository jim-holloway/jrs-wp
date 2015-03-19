<?php
/*
Template Name: Photo Gallery
*/
get_header(); ?>
    <div id="gallery">
        <h1>JRS Photo Gallery</h1>
        <?php //Start of Loop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if (!get_field('grant_only')) :?>
            <div class="gal-item">
                <a class="fancybox" data-fancybox-group="gallery" href="#test-<?php echo get_the_ID();?>">
                    <div class="gal-photo"><img src="<?php (the_field('photo')); ?>" width="180" alt="<?php the_title(); ?>"/></div>
                    <h3 class="gal-title"><?php the_title(); ?></h3>
                </a>
            </div>
            
                <div id="test-<?php echo get_the_ID();?>" style="display:none;width:700px;">
                    <div class="fb-gallery">
                        <div class="gallery-photo">
                            <img src="<?php (the_field('photo')); ?>" alt=""/>
                        </div>
                    <?php if (get_field('info')): ?>
                        <div class="gallery-left-content">
                            <?php (the_field('info')); ?>
                        </div>
                    <?php endif; ?>
                        <div class="gallery-right-content">
                            <?php (the_field('caption')); ?>
                        </div>
                    </div>
                </div>                                            

        <?php endif ?>   
        <?php endwhile; ?><?php endif; ?>
            
        
             <?php if(function_exists('wp_paginate')) {
                wp_paginate();
            } ?>
   

     </div><!--end gallery-->
    
<?php get_footer(); ?>