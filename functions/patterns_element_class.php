<?php

//	GENERAL

	$pbmps_element_type = PbMpsModularElement::pbmps_get_element_type();

	if(array_key_exists('wrapper', $pbmps_element_content )) {
		$pbmps_element_wrapper = PbMpsModularElement::pbmps_get_element_wrapper($pbmps_element_content["wrapper"]);
	} else {
		$pbmps_element_wrapper = '';
	}

	if(array_key_exists('classes', $pbmps_element_content )) {
		$pbmps_element_classes = PbMpsModularElement::pbmps_get_element_classes($pbmps_element_content["classes"]);
	} else {
		$pbmps_element_classes = '';
	}

	if(array_key_exists('id', $pbmps_element_content )) {
		$pbmps_element_id = PbMpsModularElement::pbmps_get_element_id($pbmps_element_content["id"]);
	} else {
		$pbmps_element_id = '';
	}

	if(array_key_exists('template', $pbmps_element_content )) {
		$pbmps_element_template = PbMpsModularElement::pbmps_get_element_template($pbmps_element_content["template"]);
	} else {
		$pbmps_element_template = '';
	}

	if(array_key_exists('attribute', $pbmps_element_content )) {
		$pbmps_element_attribute = PbMpsModularElement::pbmps_get_element_attribute($pbmps_element_content["attribute"]);
	} else {
		$pbmps_element_attribute = '';
	}

	if(array_key_exists('tag', $pbmps_element_content )) {
		$pbmps_element_tag = PbMpsModularElement::pbmps_get_element_tag($pbmps_element_content["tag"]);
	} else {
		$pbmps_element_tag = '';
	}

	if(array_key_exists('text', $pbmps_element_content )) {
		$pbmps_element_text = PbMpsModularElement::pbmps_get_element_text($pbmps_element_content["text"]);
	} else {
		$pbmps_element_text = '';
	}

	if(array_key_exists('title', $pbmps_element_content )) {
		$pbmps_element_title = PbMpsModularElement::pbmps_get_element_title($pbmps_element_content["title"]);
	} else {
		$pbmps_element_title = '';
	}

	if(array_key_exists('code', $pbmps_element_content )) {
		$pbmps_element_code = PbMpsModularElement::pbmps_get_element_code($pbmps_element_content["code"]);
	} else {
		$pbmps_element_code = '';
	}

//	IMAGE

	if(array_key_exists('src', $pbmps_element_content )) {
		$pbmps_element_src = PbMpsModularElement::pbmps_get_element_src($pbmps_element_content["src"]);
	} else {
		$pbmps_element_src = '';
	}

	if(array_key_exists('width', $pbmps_element_content )) {
		$pbmps_element_width = PbMpsModularElement::pbmps_get_element_width($pbmps_element_content["width"]);
	} else {
		$pbmps_element_width = '';
	}

	if(array_key_exists('height', $pbmps_element_content )) {
		$pbmps_element_height = PbMpsModularElement::pbmps_get_element_height($pbmps_element_content["height"]);
	} else {
		$pbmps_element_height = '';
	}

	if(array_key_exists('caption', $pbmps_element_content )) {
		$pbmps_element_caption = PbMpsModularElement::pbmps_get_element_caption($pbmps_element_content["caption"]);
	} else {
		$pbmps_element_caption = '';
	}

	if(array_key_exists('alt', $pbmps_element_content )) {
		$pbmps_element_alt = PbMpsModularElement::pbmps_get_element_alt($pbmps_element_content["alt"]);
	} else {
		$pbmps_element_alt = '';
	}


//	 LINK

	if(array_key_exists('href', $pbmps_element_content )) {
		$pbmps_element_href = PbMpsModularElement::pbmps_get_element_href($pbmps_element_content["href"]);
	} else {
		$pbmps_element_href = '';
	}

	if(array_key_exists('target', $pbmps_element_content )) {
		$pbmps_element_target = PbMpsModularElement::pbmps_get_element_target($pbmps_element_content["target"]);
	} else {
		$pbmps_element_target = '';
	}


//	SAGE SPECIFIC

    if(PBMPS_FRAMEWORK === 'sage/9/') {
        echo \App\template(PBMPS_PATH . "_patterns/00-elements/" . $type . "." . $pbmps_file_extension, [
            'pbmps_element_content' => $pbmps_element_content,
            'type' => $type,
            'id' => $id,
            'pbmps_element_wrapper' => $pbmps_element_wrapper,
            'pbmps_element_type' => $pbmps_element_type,
            'pbmps_element_title' => $pbmps_element_title ,
            'pbmps_element_classes' => $pbmps_element_classes,
            'pbmps_element_id' => $pbmps_element_id,
            'pbmps_element_template' => $pbmps_element_template,
            'pbmps_element_attribute' => $pbmps_element_attribute,
            'pbmps_element_tag' => $pbmps_element_tag,
            'pbmps_element_text' => $pbmps_element_text,
            'pbmps_element_code' => $pbmps_element_code,
            'pbmps_element_src' => $pbmps_element_src,
            'pbmps_element_width' => $pbmps_element_width,
            'pbmps_element_height' => $pbmps_element_height,
            'pbmps_element_caption' => $pbmps_element_caption,
            'pbmps_element_alt' => $pbmps_element_alt,
            'pbmps_element_href' => $pbmps_element_href,
            'pbmps_element_target' => $pbmps_element_target,
        ]);
    }