<?php

// PARTIAL COMPONENT: TTTLE - TEXT - LINK
// VERSION 1.0

//	$uniq_id                = '-' . get_the_ID();



// BLOCKS

	if ( $var['heading_text'] ) {
		mps_block($partial, "heading", "heading-block", "uk-block", "section",
			array(
				'template'  => $partial,
				'wrapper'   => $var['heading_wrapper'],
				'text'      => $var['heading_text'],
				'classes'   => $var['heading_classes'],
				'tag'       => $var['heading_tag'],
				'title'     => $var['heading_title'],
				'id'        => $var['heading_id'],
				'attribute' => $var['heading_attribute']
			)
		);
	}

	if ( $var['author_display'] === true ) {
		mps_partial($partial, "core", "article", "article-author", "section", "uk-container uk-padding-small uk-text-center",
			array(
				'author_layout'    => $var['author_layout']
			)
		);
	}

	if ( $var['text_text'] ) {
		mps_block($partial, "text", "text-block", "uk-block", "section",
			array(
				'template'  => $partial,
				'wrapper'   => $var['text_wrapper'],
				'text'      => $var['text_text'],
				'classes'   => $var['text_classes'],
				'tag'       => $var['text_tag'],
				'id'        => $var['text_id'],
				'attribute' => $var['text_attribute']
			)
		);
	}

	if ( $var['link_href'] ) {
		mps_block($partial, "link", "button-block", "uk-block", "section",
			array(
				'template'  => $partial,
				'wrapper'   => $var['link_wrapper'],
				'text'      => $var['link_text'],
				'classes'   => $var['link_classes'],
				'href'      => $var['link_href'],
				'title'     => $var['link_title'],
				'target'    => $var['link_target'],
				'tag'       => $var['link_tag'],
				'id'        => $var['link_id'],
				'attribute' => $var['link_attribute']
			)
		);
	}

