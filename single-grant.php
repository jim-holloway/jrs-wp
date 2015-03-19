<?php get_header('grant'); ?>

<?php
function get_post_terms($postID,$termID) {
    $post_terms = wp_get_post_terms($postID,'filters');
    foreach ($post_terms as $term) {
        if ($term->parent == $termID) {
            echo '<a href="/wordpress/filter/'.$term->slug.'?active='.$term->slug.'">'.$term->name.'</a>';
        }
        
    }
}?>



                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();$postID = get_the_ID(); ?>
                    <img src="<?php (the_field('main_photo')); ?>" />
                    <div id="photo-overlay">
                        <h1 class="zero"><?php the_title(); ?>:</h1>
                        <h1 class="zero"><?php (the_field('project')); ?></h1>
                        <h1 class="zero underl">&nbsp;</h1>
                        <div id="ol-left">
                            <p><strong>Grantee Organization: </strong></p>
                            <p><strong>Grant Amount: </strong></p>
                            <p><strong>Contact: </strong></p>
                            <p>&nbsp;</p>
                            <p><strong>Start Date: </strong></p>
                            <p><strong>Organization Website: </strong></p>  
                            <p><strong>Project Links: </strong></p>    
                        </div>
                        <div id="ol-right">
                            <p><?php (the_field('organization')); ?></p>
                            <p><?php (the_field('amount')); ?></p>
                            <p><?php (the_field('contact_name')); ?></P>
                            <p><a href="mailto:<?php (the_field('contact_email')); ?>"><?php (the_field('contact_email')); ?></a></p>
                            <p><?php (the_field('start_date')); ?></p>
                            <p><a href="<?php (the_field('website_url')); ?>" target="_blank"><?php (the_field('website_name')); ?></a></p>  
                            <?php if(get_field('links')): while(has_sub_field('links')): ?>
                            <p><a href="<?php (the_sub_field('link_url')); ?>" target="_blank"><?php (the_sub_field('link_name')); ?></a></p> 
                            <?php endwhile;endif; ?>                           
                        </div>          
                    </div>
                    <div id="bread-crumb"><p><?php if(function_exists("bcn_display"))bcn_display(); ?></p></div>
                    
                    <div class="wrapper" id="focal">
                        <div class="col-3 ">
                            <h2>Focal Ecosystems</h2>
                            <p class="blue"><?php $termID = 15; get_post_terms($postID,$termID); ?></p>
                        </div>
                        <div class="col-3 border-left border-right1 min-h">
                            <h2>Focal Species</h2>
                            <p class="blue"><?php $termID = 19; get_post_terms($postID,$termID); ?></p>
                        </div>
                        <div class="col-3">
                            <h2>Focal Geography</h2>     
                            <p class="blue"><?php $termID = 22; get_post_terms($postID,$termID); ?></p>
                        </div>
                    </div>
                <div id="main-grant-single"> 
                    <?php the_content(); ?>
                    <br>
                    <?php $date = DateTime::createFromFormat('Y/m/d', get_field('last_updated')); ?>
                    <?php if( get_field( 'last_updated' ) ): ?><h3>Last Updated: <span class="update-date"><?php (the_field('last_updated')); ?></span></h3><?php endif; ?>
                </div>
                <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('grant'); ?>
<?php get_footer(); ?>