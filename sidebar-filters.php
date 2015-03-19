<div id="side">
    <h3>Filters</h3>
    <div id="grants-searchbar">
            <?php include('searchform-grant.php'); ?> 
    </div>

    <?php
    function print_tax($term, $taxonomyName, $level) {
    
		$level++;
        $term_children = get_terms($taxonomyName,array('parent' => $term->term_id));
    
            if (!empty($term_children)) {
                echo '<li';
				if($_GET['active'] == $term->slug) echo " id='current'";
                echo '><a>'. $term->name.'</a><ul class="level'.$level.'"">';
                foreach($term_children as $term_child):
                    print_tax($term_child, $taxonomyName, $level);
                endforeach;
                echo '</ul></li>';
            }
            else{
                echo '<li';
				if($_GET['active'] == $term->slug) echo " id='current'";
                echo '><a href="'.get_bloginfo('url'). '/' . 'filter/' .$term->slug. '">' . $term->name; '</a></li>';
            };
        
    }?>

    <ul id="acc3" class="accordion grant-filters">
    <?php
        $taxonomyName = "filters";
        $terms = get_terms($taxonomyName,array('parent' => 0));
        foreach($terms as $term):
            print_tax($term, $taxonomyName, 0); 
        endforeach;
    ?>
    </ul>



</div>