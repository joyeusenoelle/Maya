<?php

$bc_separator = "&raquo; ";

function page_breadcrumbs($page_id) {
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

?>