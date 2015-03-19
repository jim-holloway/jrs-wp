<?php if ( isset($_GET['post_type'])) : $type = $_GET['post_type'];?>
	<?php if ( $type == 'grant') : ?>
		<?php load_template(TEMPLATEPATH . '/search-grant.php') ?>
	<?php elseif ( $type == 'post' OR  $type == 'page'):?>	
		<?php load_template(TEMPLATEPATH . '/search-news.php') ?>	
	<?php endif ?>
<?php else :?>
	<?php load_template(TEMPLATEPATH . '/search-news.php') ?>
<?php endif ?>





