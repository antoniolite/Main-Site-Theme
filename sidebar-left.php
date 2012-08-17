<?php disallow_direct_load('sidebar.php');?>

<?php if(!function_exists('dynamic_sidebar') or !dynamic_sidebar('Left Sidebar')):?>
<?php endif;?>

<!-- Hard-written sidebar components go here: -->

<?php
	
	$more_info_nav_val 			= get_post_meta($post->ID, 'page_widget_l_moreinfo', TRUE);
	$secondary_nav_val 			= get_post_meta($post->ID, 'page_widget_l_secinfo', TRUE);
	$secondary_nav_val_title 	= get_post_meta($post->ID, 'page_widget_l_secinfo_title', TRUE);
	$show_colleges_val 			= get_post_meta($post->ID, 'page_widget_l_showcolleges', TRUE);
	
	if ($more_info_nav_val) {	
		print '<h3 id="sidebar_l_moreinfo" class="sidebar_title">More Information:</h3>';	
		
		$args = array(
			'menu' => $more_info_nav_val,
			'container' => 'false',
			'menu_class' => 'sidebar_nav'
		);
		wp_nav_menu($args);
	}
	if ($secondary_nav_val) {	
		$nav_title = $secondary_nav_val_title !== '' ? $secondary_nav_val_title : 'Useful Links';
		print '<h3 id="sidebar_l_secinfo" class="sidebar_title">'.$nav_title.':</h3>';
		
		$args = array(
			'menu' => $secondary_nav_val,
			'container' => 'false',
			'menu_class' => 'sidebar_nav'
		);
		wp_nav_menu($args);
	}
	if ($show_colleges_val) {	
		print '<h3 id="sidebar_l_colleges" class="sidebar_title">UCF Colleges</h3>';
		
		$args = array(
			'theme_location' => 'ucf-colleges',
			'container' => 'false',
			'menu_class' => 'sidebar_nav'
		);
		wp_nav_menu($args);
	}


?>