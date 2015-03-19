<?php get_header(); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div id="news">
                    <h1><?php the_title(); ?> <br> <span class="small italic news-single-date"><?php the_time(' F jS, Y'); ?></span></h1>
                    <p class="zero"><?php the_post_thumbnail("page-featured-image"); ?></p>
                    <caption><span class="gray italic small"><?php (the_field('caption'))  ; ?></span> </caption>
                    <?php the_content(); ?>
                    <br>
                    <div class="post-categories">Categories: </label><?php the_category(' , ') ?> | <label>Posted By: </label> <?php (the_field('posted_by'))  ; ?></p></div>
                </div>
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('categories'); ?>
<?php get_footer(); ?>