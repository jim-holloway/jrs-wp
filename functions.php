<?php
    $menuList = array(
        "main_menu" => "Main Navigation Menu",
        "top_menu" => "Top Menu: Upper Right",
        "left_nav" => "Left Navigation",
        "approach" => "Our Approach",
        "footer_menu" => "Footer Menu: Bottom");
    
    register_nav_menus($menuList);
    
    register_sidebar(array(
        "name" => "Right Sidebar",
        "id" => "right_aside",
        "description" => "Will appear on the right :)",
        "before_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget_title'>",
        "after_title" => "</h3>"
    ));
    
add_theme_support('post-thumbnails');


function search_form_no_filters() {
  // look for local searchform template
  $search_form_template = locate_template( 'searchform.php' );
  if ( '' !== $search_form_template ) {
    // searchform.php exists, remove all filters
    remove_all_filters('get_search_form');
  }
}
add_action('pre_get_search_form', 'search_form_no_filters');



    
    // Custom Excerpt Length   
class Excerpt {

      // Default length (by WordPress)
      public static $length = 55;
    
      // So you can call: my_excerpt('short');
      public static $types = array(
          'short' => 25,
          'regular' => 55,
          'long' => 100
        );
     
      public static function length($new_length = 55) {
        Excerpt::$length = $new_length;
    
        add_filter('excerpt_length', 'Excerpt::new_length');
    
        Excerpt::output();
      }
    
      // Tells WP the new length
      public static function new_length() {
        if( isset(Excerpt::$types[Excerpt::$length]) )
          return Excerpt::$types[Excerpt::$length];
        else
          return Excerpt::$length;
      }
    
      // Echoes out the excerpt
      public static function output() {
        the_excerpt();
      }
}
    // An alias to the class
    function my_excerpt($length = 55) {
      Excerpt::length($length);
    }
   
    function new_excerpt_more( $more ) {
    return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    
    // WordPress Custom Post Type Our Grants
    
    add_action( 'init', 'register_cpt_grant' );
    function register_cpt_grant() {
    $labels = array(
    'name' => _x( 'Grants', 'grant' ),
    'singular_name' => _x( 'Grant', 'grant' ),
    'add_new' => _x( 'Add New', 'grant' ),
    'add_new_item' => _x( 'Add New Grant', 'grant' ),
    'edit_item' => _x( 'Edit Grant', 'grant' ),
    'new_item' => _x( 'New Grant', 'grant' ),
    'view_item' => _x( 'View Grant', 'grant' ),
    'search_items' => _x( 'Search Grants', 'grant' ),
    'not_found' => _x( 'No grants found', 'grant' ),
    'not_found_in_trash' => _x( 'No grants found in Trash', 'grant' ),
    'parent_item_colon' => _x( 'Parent Grant:', 'grant' ),
    'menu_name' => _x( 'Grants', 'grant' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'description' => 'The Grant single post',
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'grant', $args );
    } 


    // JRS Grant Portfolio Filters Custom Taxonomies 
    $filters_tax_labels = array(
            'name' => _x( 'Filters', 'taxonomy general name' ),
            'singular_name' => _x( 'Filter', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Filters' ),
            'all_items' => __( 'All Filters' ),
            'parent_item' => __( 'Parent Filter' ),
            'parent_item_colon' => __( 'Parent Filter:' ),
            'edit_item' => __( 'Edit Filter' ), 
            'update_item' => __( 'Update Filter' ),
            'add_new_item' => __( 'Add New Filter' ),
            'new_item_name' => __( 'New Filter Name' ),
            'menu_name' => __( 'Filters' ),
          );  
      
    register_taxonomy( 'filters', 'grant', 
        array(
            'hierarchical' => true,
            'labels' => $filters_tax_labels,
            'query_var' => true,
            'rewrite' => array('slug' => 'filter')
        ));  
        
        
        
        // WordPress Custom Post Type Our Grants  
        
            add_action( 'init', 'register_cpt_photo' );
    function register_cpt_photo() {
    $labels = array(
    'name' => _x( 'Photo', 'photo' ),
    'singular_name' => _x( 'Photo', 'photo' ),
    'add_new' => _x( 'Add New', 'photo' ),
    'add_new_item' => _x( 'Add New Photo', 'photo' ),
    'edit_item' => _x( 'Edit Photo', 'photo' ),
    'new_item' => _x( 'New Photo', 'photo' ),
    'view_item' => _x( 'View Photo', 'photo' ),
    'search_items' => _x( 'Search Photos', 'photo' ),
    'not_found' => _x( 'No photos found', 'photo' ),
    'not_found_in_trash' => _x( 'No photos found in Trash', 'photo' ),
    'parent_item_colon' => _x( 'Parent Photo:', 'photo' ),
    'menu_name' => _x( 'Photo Gallery', 'photo' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'description' => 'The area for the Photo Gallery',
    'supports' => array( 'title' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'photo', $args );
    } 

if(!is_admin()){
    add_action('init', 'search_query_fix');
    function search_query_fix(){
        if(isset($_GET['s']) && $_GET['s']==''){
            $_GET['s']='Enter-Search';
        }
    }
}

function download_func($atts) {
   extract(shortcode_atts(array(
      'text' => 'Download',
      'link' => '#',
   ), $atts));
return '<h3><a href="'.$link.'">'.$text.' <img src="/wp-content/themes/jrs/images/dl-b.png"></a></h3>';
}

add_shortcode( 'download', 'download_func' );


//[doclink name="" link=""]  STILL IN PROGRESS
// function doclink_func($name,$link){
//     return '<h3>'.$name.'<a href="'.$link.'><img src="/wp-content/themes/jrs/images/dl-b.png"></a></h3>';
// }
// add_shortcode( 'doclink', 'doclink_func' );



