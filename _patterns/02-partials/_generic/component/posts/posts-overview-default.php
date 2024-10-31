<?php

// PARTIAL COMPONENT: POST OVERVIEW DEFAULT
// VERSION 1.1

//	Quick Fixes for non-used array values
//	Todo: complete all array values

	if(array_key_exists('link_id', $var )) {
		$link_id = $var['link_id'];
	} else {
		$link_id = '';
	}

	if(array_key_exists('link_attribute', $var )) {
		$link_attribute = $var['link_attribute'];
	} else {
		$link_attribute = '';
	}

	if(array_key_exists('heading_id', $var )) {
		$heading_id = $var['heading_id'];
	} else {
		$heading_id = '';
	}

	if(array_key_exists('posts_order', $var )) {
		$posts_order = $var['posts_order'];
	} else {
		$posts_order = '';
	}

	if(array_key_exists('heading_classes', $var )) {
		$heading_classes = $var['heading_classes'];
	} else {
		$heading_classes = '';
	}


//	HEADING BLOCK

	if ( $var['heading_text'] ) {
		mps_block($template,"heading","articles-title", $var['heading_block'], "section",
			array(
				'template'              => $template,
				'text'                  => $var['heading_text'],
				'classes'               => $heading_classes,
				'tag'                   => $var['heading_tag'],
				'wrapper'               => $var['heading_wrapper'],
				'title'                 => $var['heading_title'],
				'id'                    => $heading_id
			)
		);
	}

//	POSTLOOP PARTIAL

	if ( $var['posts_display_mode'] ) {
		mps_partial($template, "core", "posts", "postloop", "section", $var['postloop_partial'],
			array(
				'display_mode'          => $var['posts_display_mode'],
				'wrapper_classes'       => $var['posts_wrapper_classes'],
				'posts_classes'         => $var['posts_classes'],
				'item_classes'          => $var['posts_item_classes'],
				'posts_type'            => $var['posts_type'],
				'post_single_id'        => $var['post_single_id'], // array(), e.g. page-ids: array(128,103)
				'posts_amount'          => $var['posts_amount'],
				'posts_orderby'         => $var['posts_orderby'],
				'posts_order'           => $posts_order,
				'post_more_text'        => $var['post_more_text']
			)
		);
	}

//	LINK BLOCK

	if ( $var['link_text'] ) {
		mps_block($template,"link","articles-button-all", $var['link_block'], "section",
			array(
				'template'              => $partial,
				'text'                  => $var['link_text'],
				'classes'               => $var['link_classes'],
				'wrapper'               => $var['link_wrapper'],
				'href'                  => $var['link_href'],
				'title'                 => $var['link_title'],
				'target'                => $var['link_target'],
				'tag'                   => $var['link_tag'],
				'id'                    => $link_id,
				'attribute'             => $link_attribute
			)
		);
	}