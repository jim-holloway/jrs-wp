<?php
/*
Template Name: Trustees
*/
get_header(); ?>
<?php get_sidebar('leftnav'); ?>
    <div id="main-trustee">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="push-bottom">The Board of Trustees</h1>
                <?php if(get_field('trustee')): while(has_sub_field('trustee')): ?>
                    <div class="trustee">
                        <img src="<?php (the_sub_field('photo')); ?>" />
                        <h4 class="zero gray"><?php (the_sub_field('name')); ?></h4>
                        <p class="small zero"><b><?php (the_sub_field('company')); ?></b> | <?php (the_sub_field('area')); ?></p>
                        <p><?php (the_sub_field('biography')); ?></p>
                    </div>
                <?php endwhile;endif; ?>
            <div id="former-trustee">
            <h3><?php (the_field('former_trustees_header')); ?></h3>
                <ul>
                <?php if(get_field('former__trustees')): while(has_sub_field('former__trustees')): ?>
                    <li><strong><?php (the_sub_field('name')); ?></strong>, <em class="blue"><?php (the_sub_field('title')); ?></em></li>
                <?php endwhile;endif; ?>
                </ul>
            </div>
            </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>