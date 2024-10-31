<?php

	// PARTIAL - MENU

	$pbmps_menu = wp_nav_menu(
		array(
			'theme_location'    => $var['theme_location'],
			'container'         => $var['container_tag'],
			'container_class'   => $var['container_classes'],
			'depth'             => $var['menu_depth'],
			'echo'              => false,
			'menu_class'        => $var['menu_wrapper'],
			'menu'              => $var['menu_name']
		)
	);

	$pbmps_patterns = array();
	$pbmps_patterns[0] = '/<ul/';
	$pbmps_patterns[1] = '/<a/';
	$pbmps_replacements = array();
	$pbmps_replacements[0] = '<ul class="' . $var['menu_items_wrapper'] . '"';
	$pbmps_replacements[1] = '<a class="' . $var['menu_href_class'] . '" ' . $var["menu_href_attribute"];

	echo preg_replace($pbmps_patterns, $pbmps_replacements, $pbmps_menu);