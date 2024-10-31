<?php

    // CORE - PARTIAL: HEADER IMAGE FULL WIDTH
	// VERSION: 1.0.0

    mps_block($partial,"image", "header-image", "section-class uk-section uk-text-center uk-padding-remove-vertical", "section",
		array(
			'template'      => $partial,
			'title'         => $var['header_image_title'],
			'classes'       => $var['header_image_classes'],
			'wrapper'       => $var['header_image_wrapper'],
			'id'            => $var['header_image_id'],
			'alt'           => $var['header_image_alt'],
			'caption'       => $var['header_image_caption'],
			'height'        => $var['header_image_height'],
			'width'         => $var['header_image_width'],
			'src'           => $var['header_image_src'],
			'attribute'     => $var['header_image_attribute']
		)
    );