
<?php

	// CORE: PARTIAL - ARTICLE AUTHOR NAME & IMAGE
	// Version: 1.0

	// Get the Author ID
	$pbmps_post_author_id = get_post_field( 'post_author', $post_id );

//	Todo: Get the author with custom post type


	if ( $var['author_layout'] == 'image-name') {

		mps_block( $partial,"image", "image-caption", "uk-text-small", "div",
			array(
				'template'      => $partial,
				'title'         => get_the_author_meta('display_name', $pbmps_post_author_id),
				'classes'       => '',
				'wrapper'       => '',
				'id'            => '',
				'alt'           => get_the_author_meta('display_name', $pbmps_post_author_id),
				'caption'       => get_the_modified_date('j M') . " '" . get_the_modified_date('y') . ' by <a href="' . get_the_author_meta('user_url', $pbmps_post_author_id) . '" target="_blank">' . get_the_author_meta('display_name', $pbmps_post_author_id) . '</a>',
				'height'        => 'auto',
				'width'         => '48px',
				'src'           => get_avatar_url($pbmps_post_author_id),
				'attribute'     => ''
			));
	}
