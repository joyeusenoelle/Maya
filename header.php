<?php
/**
 * Theme header
 *
 * Displays all of the <head> section and everything up till <div id="main"> and the is_front_page conditional
 *
 * @package WordPress
 * @subpackage Maya_Cogman
 * @since Maya Cogman 1.0
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php bloginfo("name"); wp_title('|', true, ''); ?>
    </title>
    <!-- YUI CSS reset before everything else -->
    <!-- except that it breaks the hell out of everything, never mind -->
    <!-- link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css" -->
	<?php wp_enqueue_script('jquery'); ?>
    <?php $scripturl = get_bloginfo('template_url') . "/javascript/main.js";
 	wp_enqueue_script($scripturl); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
	<?php wp_head(); ?>
	<script type="text/javascript">
		$j = jQuery.noConflict();
		$j(document).ready(function() {
			$j('div#header ul li').bind('mouseover', openSubMenu);
			$j('div#header ul li').bind('mouseout', closeSubMenu);
		
			function openSubMenu() {
				$j(this).find('ul').css('visibility','visible');	
			}
			
			function closeSubMenu() {
				$j(this).find('ul').css('visibility','hidden');	
			}
		});
	</script>
</head>

<body>
	<div id="container">
		<div id="header">
			<?php wp_nav_menu(array('menu' => 'Header Menu', 'container_class' => 'header-nav-menu', 'menu_class' => 'header-nav-menu-dropdown')); ?>
        </div>
        <div id="subcontainer">
            <div id="main">
            <?php if(is_front_page()) :?>
                <?php // Eyecatch/latest-book ad goes here ?>
            <?php endif; ?>