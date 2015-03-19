<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <label class="hidden" for="s"><?php _e('Search:'); ?></label>
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search News..."/>
    <input type="hidden" value="post" name="post_type" id="post_type" />
    <input type="submit" id="searchsubmit" value="" class="imgClass" />
</form>