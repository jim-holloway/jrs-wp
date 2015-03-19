<?php get_header(); ?>
    <div id="news">
        <h1>Results for <?php echo get_search_query(); ?></h1>
        <div class="blog">
        <?php if(have_posts()): ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>" class="gray"><?php the_title(); ?></a><span class="float-right small"><?php the_time('m/d/y'); ?></span></h3>
                <?php my_excerpt(45); ?><a href="<?php the_permalink(); ?>" class="float-right pull-top"><img src="<?php echo get_template_directory_uri(); ?>/images/readmore.png" /></a>
            </article>          
            <?php else: ?>
                <p>NO POST</p>
            <?php endif; ?>
        </div>
    </div><!--end main-->       
<?php get_sidebar('categories'); ?>
<?php get_footer(); ?>