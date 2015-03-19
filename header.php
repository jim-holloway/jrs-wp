<?php
    $mainMenu = array(
        "theme_location" => "main_menu",
        'menu_class' => 'navlist',
        "container" => "nav",
        "container_id" => "main-nav",
        "depth" =>1);
        
    $topMenu = array(
        "theme_location" => "top_menu",
        'menu_class' => '',
        "container" => "nav",
        "container_id" => "top-nav",
        "depth" =>1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width" />
    <title><?php bloginfo("name") . wp_title("|"); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nyroModal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<!--[if lt IE 10]>
<style>
#footer-nav {
     width: 250px;
}
#footer-nav ul{
    -webkit-column-count:none;
    -moz-column-count:none;
    column-count:none;
}
#footer-nav ul li {
    width: 48%;
    float: left;
    list-style: none;
}
</style>
<![endif]-->

<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nyroModal.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {


            // nivo slider
            $('#gallery a img').fadeIn(function() {
                var $this = $(this);
                $this.next('.description').append($this.attr('alt'));
            });
            
            // archive accordion
            $('.blog-list-archive li ul').hide();
            $('.blog-list-archive li a').click(function(){
            $(this).parent().addClass('selected');
            $(this).parent().children('ul').slideDown(450);
            $(this).parent().siblings().children('ul').slideUp(450);
            $(this).parent().siblings().removeClass('selected');
            });
            
            // fancybox
            $(".fancybox").fancybox({
                // nextEffect: 'fade',
                // prevEffect: 'fade',
                helpers : {
                    title: {
                        type: 'inside'
                    }
                }
            });
            
            //<!-- Grant Accordion -->
            <!--//--><![CDATA[//><!--
            $("html").addClass("js");
            $.fn.accordion.defaults.container = false; 
            $(function() {
              $("#acc3").accordion({initShow: "#current"});

              $("html").removeClass("js");
            });
            //--><!]]>
});
</script>
</head>
<body>
    <div id="wrapper" class="wrapper">
        <div id="header">      
            <div id="logo">
                <a href="<?php bloginfo('url') ?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/JRS_Logo-01.png" alt="JRS Biodivesity Foundation" id="jrs-logo" title="JRS Biodivesity Foundation"/></h1></a>
            </div><!--end logo-->
            <div id="header-p">
                <p class="italic">Enhancing the understanding of biological diversity for the benefit and sustainability of life on earth.</p>
            </div>
            <div id="top-nav">
                <ul>
                    <li><a href="<?php bloginfo('url') ?>/our-approach/how-to-apply/">Apply for Funding </a></li>
                    <li> | </li>
                    <li><a href="javascript:;">Login</a></li>
                </ul>
            </div><!-- end top nav--><div class="clear"></div>
            <div id="searchbar">
                    <?php get_search_form(); ?>
                  
            </div>
            <div class="clear"></div>
            
                <?php wp_nav_menu($mainMenu); ?>
            
            <div class="clear"></div>
            <div id="bread-crumb"><p><?php if(function_exists("bcn_display"))bcn_display(); ?></p></div>
        </div><!--end header-->