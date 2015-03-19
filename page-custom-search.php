<?php get_header(); ?>

<form action="<?php echo home_url( '/' ); ?>" method="get">
    <fieldset>
        <label for="search">Search:</label>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="hidden" value="grant" name="post_type" id="post_type" />
        <input type="submit" alt="Search">
    </fieldset>
</form>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title() ;?></h2>
                <?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>