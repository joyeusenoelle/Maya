<?php

if(function_exists('register_sidebar')) {
	register_sidebar(
		array(
			'name' => __("Right Sidebar"),
			'id' => 'right-sidebar',
			'description' => "Widgets placed here will be shown on the right of the page."
		)
	);
	register_sidebar(
		array(
			'name' => __("Footer Bar"),
			'id' => 'footer-bar',
			'description' => "Widgets placed here will be shown in the footer - USE WITH CAUTION."
		)
	);
}

if(function_exists('register_nav_menu')) {
		register_nav_menu('header-menu',__('Header Menu'));
		//Multiple:
		/* register_nav_menus(
			array(
				'header-menu' => __('Header Menu'),
				'other-menu' => __('Other Menu')
			)
		); */
}
//add_action('init','maya_register_menus');

$bc_separator = "&raquo; ";

function maya_page_breadcrumbs($page_id) {
	$parents = get_post_ancestors($page_id);
	$par_return = "";
	if(!empty($parents)) {
		for($i=count($parents)-1;$i>= 0;$i--) {
			$par_obj = get_post($parents[$i]);
			$par_name = $par_obj->post_title;
			$par_url = get_permalink($parents[$i]);
			$par_return .= "{$bc_separator}<a href='{$par_url}'>{$par_name}</a> ";
		}
	}
	return $par_return;
}

function maya_breadcrumbs($page_id) {
	
}

function maya_prevnext() {
		
}

?>