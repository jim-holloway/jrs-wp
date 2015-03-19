<?php
/*
Template Name: Contact
*/
get_header(); ?>
    <div id="contact">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="contact-content">
              <?php the_content(); ?>
            </div>
            <div class="contact-social">
              <ul>
                <li>
                  <a href="#test" class="nyroModal">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/newsletter-icon.png" alt="Newsletter">
                    <p>Sign-Up for Our <br>Newsletter</p>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/JRSBiodiversity" target="blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="Twitter">
                    <p>Follow Us On <br>Twitter</p>
                  </a>                    
                </li>
                <li>
                  <a href="https://www.facebook.com/JRSBDF" target="blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" alt="Facebook">
                    <p>Join Us On <br>Facebook</p>
                  </a>  
                </li>
                <li>
                  <a href="http://www.linkedin.com/company/jrs-biodiversity-foundation" target="blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.png" alt="LinkedIn">
                    <p>Follow Us On <br>LinkedIn</p>
                  </a>  
                </li>
              </ul>
            </div>
            <div class="contact-address">
              <h2>Visit Us or Mail Us</h2>  
               <div class="address ">
                    <p class="bold blue push-bottom">Mailing Address</p>
                    <p class="bold">JRS Biodiversity Foundation</p> 
                    <address><?php (the_field('mailing_address_st')); ?><br><?php (the_field('mailing_address_city')); ?><br><a href="tel:<?php (the_field('phone_number')); ?>"><?php (the_field('phone_number')); ?></a><br><a href="mailto:<?php (the_field('email')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/email-img.png" alt=""></a></address>   
               </div> 
               <div class="address ">
                    <p class="bold blue push-bottom">Physical Address</p>
                    <p class="bold">JRS Biodiversity Foundation</p> 
                    <address><?php (the_field('physical_address_st')); ?><br><?php (the_field('physical_address_city')); ?><br><a href="tel:<?php (the_field('phone_number')); ?>"><?php (the_field('phone_number')); ?></a><br><a href="mailto:<?php (the_field('email')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/email-img.png" alt=""></a></address>   
               </div>               
            </div>
            <div class="contact-form">
              <h2>Contact Us</h2> 
              <?php  $form = get_field("contact_form_shortcode"); ?>
              <?php echo do_shortcode($form) ?>
            </div>
               
    </div><!--end main-->
        <?php endwhile; ?><?php endif; ?>
<?php get_sidebar('contact'); ?>
<?php get_footer(); ?>