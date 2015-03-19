<?php
    /*
     *  parameters for footer menu
     */
    $footerMenu = array(
        "theme_location" => "footer_menu",
        "container" => "nav",
        "container_class" => "wrapper",
        "container_id" => "footer-nav",
        "depth" => 1);
?>
<div class="clear"></div>   
        <div id="footer" class="wrapper">
                <?php wp_nav_menu($footerMenu); ?>
            <div id="c-p">
                <p>How to Apply for Funding<br>Read about our scope, calls for<br>proposals and letters of inquiry<br><a href="<?php bloginfo('url'); ?>/our-approach/how-to-apply/">Learn More</a></p>
            </div>
            <div id="f-i">
                <a href="#test" class="nyroModal"><img src="<?php echo get_template_directory_uri(); ?>/images/mail-to.png" alt="sign-up"/></a>                    
            </div>
            <div id="f-iii">
               <a href="https://www.facebook.com/JRSBDF" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-fb.png" alt="sign-up" /></a> 
               <a href="https://twitter.com/JRSBiodiversity" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-tw.png" alt="sign-up" /></a> 
               <a href="http://www.linkedin.com/company/jrs-biodiversity-foundation" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-dq-s2.png" alt="sign-up" /></a> 
            </div>
            <div class="clear"></div>
            <div id="f-p" class="wapper">
                <?php $my_query = new WP_Query('pagename=contact-us');
                    while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
                <p> &copy; The J.R.S. Biodiversity Foundation <span>|</span> <?php (the_field('physical_address_st')); ?><?php (the_field('physical_address_city')); ?><span>|</span> +1 <?php (the_field('phone_number')); ?> <span>|</span> <a href="<?php bloginfo('url'); ?>/about-us/terms-conditions/">Terms &amp; Conditions</a></p>
            <?php endwhile; ?>
            </div>
        </div><!--end footer-->
   </div><!--end wrapper-->

<div id="test" style="display: none; width: 800px;">
  <?php include('newsletter.php') ?>
</div>
      
    <script type="text/javascript">
    $(function() {
      $('.nyroModal').nyroModal();
    });
    </script>
</body>
</html>                