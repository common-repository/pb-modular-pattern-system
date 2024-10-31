<?php if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

	class PbMpsModularBlock
	{
		// CLASSES
		static public function pbmps_get_block_classes($classes) {
			return $classes;
		}

		// ID
		static public function pbmps_get_block_id($id) {
			if( $id != '') {
				return $id;
			}
		}

		// TYPE
		static public function pbmps_get_block_type() {
			return 'type="block"';
		}

		// TAG
		static public function pbmps_get_block_tag($tag) {
			if( $tag != '') {
				return $tag;
			}
		}

		// TEMPLATE
		static public function pbmps_get_block_template($template) {
			if( $template != '') {
				return $template;
			}
		}
	}


	class PbMpsModularElement extends PbMpsModularBlock
	{
		//	ELEMENT TYPE
		static public function pbmps_get_element_type() {
			if(PBMPS_SHOW_TYPES === true) {
				return 'type="element"';
			}
		}

		//	ELEMENT ID
		static public function pbmps_get_element_id($id) {
			if( $id != '') {
				return 'id="' . $id . '" ';
			}
		}

		// ELEMENT WRAPPER
		static public function pbmps_get_element_wrapper($wrapper) {
			if(PBMPS_IDENTIFIER_LABEL === true) {
				$wrapper = $wrapper . ' identifier-label--element';
			}
			if( $wrapper != '') {
				return 'class="' . $wrapper . '"';
			}
		}

		// ELEMENT CLASSES
		static public function pbmps_get_element_classes($classes) {
			if( $classes != '') {
				return ' ' . $classes;
			}
		}

		// ELEMENT TEXT
		static public function pbmps_get_element_text($text) {
			if( $text != '') {
				return $text;
			}
		}

		// ELEMENT TAG
		static public function pbmps_get_element_tag($tag) {
			if( $tag != '') {
				return $tag;
			}
		}

        // ELEMENT SRC
        static public function pbmps_get_element_src($src) {
            if( $src != '') {
                if(PBMPS_FRAMEWORK === 'sage/9/') {
                    return 'src="' . \App\asset_path($src) . '" ';
                } else {
                    return 'src="' . $src . '" ';
                }
            }
        }

		// ELEMENT WIDTH
		static public function pbmps_get_element_width($width) {
			if( $width != '') {
				return 'width="' . $width . '"';
			}
		}

		// ELEMENT HEIGHT
		static public function pbmps_get_element_height($height) {
			if( $height != '') {
				return 'height="' . $height . '"';
			}
		}

		// ELEMENT TITLE
		static public function pbmps_get_element_title($title) {
			if( $title != '') {
				return 'title="' . $title . '"';
			}
		}

		// ELEMENT CAPTION
		static public function pbmps_get_element_caption($caption) {
			if( $caption != '') {
				return $caption;
			}
		}

		// ELEMENT ATTRIBUTE
		static public function pbmps_get_element_attribute($attribute) {
			if( $attribute != '') {
				return $attribute;
			}
		}

		// ELEMENT ALT
		static public function pbmps_get_element_alt($alt) {
			if( $alt != '') {
				return 'alt="' . $alt . '" ';
			}
		}

		// ELEMENT HREF
		static public function pbmps_get_element_href($href) {
			if( $href != '') {
				return 'href="' . $href . '" ';
			}
		}

		// ELEMENT TARGET
		static public function pbmps_get_element_target($target) {
			if( $target != '') {
				return 'target="' . $target . '" ';
			}
		}

		// ELEMENT TEMPLATE
		static public function pbmps_get_element_template($template) {
			if( $template != '') {
				return $template;
			}
		}

//		========================

		// ELEMENT ADDRESS_NAME
		static public function pbmps_get_element_address_name($address_name) {
			if( $address_name != '') {
				return $address_name;
			}
		}

		// ELEMENT ADDRESS_STREET
		static public function pbmps_get_element_address_street($address_street) {
			if( $address_street != '') {
				return $address_street;
			}
		}

		// ELEMENT ADDRESS_POSTCODE
		static public function pbmps_get_element_address_postcode($address_postcode) {
			if( $address_postcode != '') {
				return $address_postcode;
			}
		}

		// ELEMENT ADDRESS_CITY
		static public function pbmps_get_element_address_city($address_city) {
			if( $address_city != '') {
				return $address_city;
			}
		}

		// ELEMENT ADDRESS_COUNTRY
		static public function pbmps_get_element_address_country($address_country) {
			if( $address_country != '') {
				return $address_country;
			}
		}

		// ELEMENT ADDRESS_REGION
		static public function pbmps_get_element_address_region($address_region) {
			if( $address_region != '') {
				return $address_region;
			}
		}

		// ELEMENT ADDRESS_PHONE
		static public function pbmps_get_element_address_phone($address_phone) {
			if( $address_phone != '') {
				return $address_phone;
			}
		}

		// ELEMENT ADDRESS_FAX
		static public function pbmps_get_element_address_fax($address_fax) {
			if( $address_fax != '') {
				return $address_fax;
			}
		}

		// ELEMENT ADDRESS_EMAIL
		static public function pbmps_get_element_address_email($address_email) {
			if( $address_email != '') {
				return $address_email;
			}
		}

		// ELEMENT ADDRESS_WEBSITE
		static public function pbmps_get_element_address_website($address_website) {
			if( $address_website != '') {
				return $address_website;
			}
		}

		// ELEMENT CODE
		static public function pbmps_get_element_code($code) {
			if( $code != '') {
				return $code;
			}
		}
	}


	// META
	function mps_meta( $pbmps_origin, $pbmps_meta ) {
		if(PBMPS_IDENTIFIER_LABEL === true) {
			$classes = 'identifier-label--publication';
		}
		if($pbmps_origin === 'core') {
			$pbmps_origin_path = PBMPS_PATH;
		}
		if($pbmps_origin === 'theme') {
			$pbmps_origin_path = PBMPS_THEME_PATH;
		}
		if(PBMPS_FRAMEWORK === 'sage/9/') {
			$pbmps_file_extension = 'blade.php';
		} else {
			$pbmps_file_extension = 'php';
		}

		if ($pbmps_meta == 'head') {
			echo '<!DOCTYPE html><html ';
			echo language_attributes();
            echo '><head itemscope itemtype="http://schema.org/WebSite">';

            if(PBMPS_FRAMEWORK === 'sage/9/') {
                echo \App\template($pbmps_origin_path . "views/_meta/" . $pbmps_meta . "." . $pbmps_file_extension);
            } else {
			    include_once $pbmps_origin_path . "_meta/" . $pbmps_meta . "." . $pbmps_file_extension;
            }

			wp_enqueue_style( 'style', get_stylesheet_uri() );
			wp_enqueue_style( 'core', PBMPS_URI . 'assets/css/pbmps-styles-core.css' );
			wp_enqueue_style( 'theme', PBMPS_THEME_URI . get_option('pbmps-setting-theme-styles') . 'style.css' );
			include_once( PBMPS_PATH . 'functions/vendor_frameworks.php' ); // Frontend Frameworks
			echo get_option('pbmps-setting-head-scripts'); // Additional Head Script Field
			wp_head();
			echo '</head><body class="mps-page publication" itemscope itemtype="http://schema.org/WebPage">';
		}

		if ($pbmps_meta == 'foot') {
			wp_footer();

            if(PBMPS_FRAMEWORK === 'sage/9/') {
                echo \App\template($pbmps_origin_path . "views/_meta/" . $pbmps_meta . "." . $pbmps_file_extension);
            }else {
                include $pbmps_origin_path . "_meta/" . $pbmps_meta . "." . $pbmps_file_extension;
            }

			echo get_option('pbmps-setting-foot-scripts'); // Additional Foot Script Field
			echo '</body></html>';
		}
	}


	// PATTERNS:

	// 00 - ELEMENT
	function mps_element( $content, $type ,$id) {
		$pbmps_element_content = $content;
		if(PBMPS_FRAMEWORK === 'sage/9/') {
			$pbmps_file_extension = 'blade.php';
		} else {
			$pbmps_file_extension = 'php';
		}

        if(PBMPS_FRAMEWORK === 'sage/9/') {
            echo \App\template(PBMPS_PLUGIN_DIR . "functions/patterns_element_class.php",
                [
                    'pbmps_file_extension' => $pbmps_file_extension,
                    'pbmps_element_content' => $content,
                    'type' => $type,
                    'id' => $id,
                ]);
        } else {
            include PBMPS_PLUGIN_DIR . "functions/patterns_element_class.php";
            include PBMPS_PATH . "_patterns/00-elements/" . $type . "." . $pbmps_file_extension;
        }

	}


	// 01 - BLOCK
	function mps_block( $template, $type, $id, $classes, $tag, $block_content ) {
		if(PBMPS_IDENTIFIER_LABEL === true) {
			$classes = $classes . ' identifier-label--block';
		}
		if(PBMPS_FRAMEWORK === 'sage/9/') {
			$pbmps_file_extension = 'blade.php';
		} else {
			$pbmps_file_extension = 'php';
		}
		echo '<' . PbMpsModularBlock::pbmps_get_block_tag($tag) . ' class="' . PbMpsModularBlock::pbmps_get_block_template($template) . '__' . PbMpsModularBlock::pbmps_get_block_id($id) . ' ' . PbMpsModularBlock::pbmps_get_block_classes($classes) . '" id="' . PbMpsModularBlock::pbmps_get_block_id($id) . '" ' . PbMpsModularBlock::pbmps_get_block_type($type) . '>';

        if(PBMPS_FRAMEWORK === 'sage/9/') {
            echo \App\template(PBMPS_PATH . "_patterns/01-blocks/container." . $pbmps_file_extension, [
                'template' => $template,
                'type' => $type,
                'block_content' => $block_content,
                'id' => $id,

            ]);
        }else {
            include PBMPS_PATH . "_patterns/01-blocks/container" . "." . $pbmps_file_extension;
        }

		echo '</' . PbMpsModularBlock::pbmps_get_block_tag($tag) . '>';
	}


	// 02- PARTIAL
	function mps_partial( $template, $pbmps_origin, $folder, $partial, $tag, $classes, $var ) {
		if(PBMPS_IDENTIFIER_LABEL === true) {
			$classes = $classes . ' identifier-label--partial';
		}
		if ($folder !== '') {
			$folder = $folder . '/';
		}
		if(PBMPS_FRAMEWORK === 'sage/9/') {
			$pbmps_file_extension = 'blade.php';
		} else {
			$pbmps_file_extension = 'php';
		}
		if($pbmps_origin === 'core') {
			$pbmps_origin_path = PBMPS_PATH;
			$pbmps_partial_path = $pbmps_origin_path . "_patterns/02-partials/" . PBMPS_FRAMEWORK . $folder . $partial . "." . $pbmps_file_extension;
		}
		if($pbmps_origin === 'component') { // Partial Components
			$pbmps_origin_path = PBMPS_PATH;
			$pbmps_partial_path = $pbmps_origin_path . "_patterns/02-partials/_generic/component/" . $folder . $partial . "." . $pbmps_file_extension;
		}
		if($pbmps_origin === 'theme') {
			$pbmps_origin_path = PBMPS_THEME_PATH;
			$pbmps_partial_path = $pbmps_origin_path . "_patterns/02-partials/" . PBMPS_FRAMEWORK . $folder . $partial . "." . $pbmps_file_extension;
		}

		echo '<' . $tag . ' class="' . $partial . ' ' . $classes . '" id="' . $partial . '" type="partial">';

		if(PBMPS_FRAMEWORK === 'sage/9/') {
            $pbmps_origin_path = PBMPS_THEME_PATH;
            $pbmps_partial_path = $pbmps_origin_path . "views/_patterns/02-partials/" . PBMPS_FRAMEWORK . $folder . $partial . "." . $pbmps_file_extension;
            echo \App\template($pbmps_partial_path, [
                'template' => $template,
                'partial' => $partial,
                'tag' => $tag,
                'classes' => $classes,
                'var' => $var,
            ]);
        } else {
            include $pbmps_partial_path;
        }

		echo '</' . $tag . '>';
	}


	// 03 - TEMPLATES (being loaded in PUBLICATION function call)


	// 04 - STRUCTURAL (being loaded in PUBLICATION function call)
	function mps_structural($pbmps_origin, $template, $folder ) {
		$classes = '';
		if(PBMPS_IDENTIFIER_LABEL === true) {
			$classes = $classes . ' identifier-label--template';
		}
		if ($folder !== '') {
			$folder = $folder . '/';
		}
		if(PBMPS_FRAMEWORK === 'sage/9/') {
			$pbmps_file_extension = 'blade.php';
		} else {
			$pbmps_file_extension = 'php';
		}
		if($pbmps_origin === 'core') {
			$pbmps_origin_path = PBMPS_PATH;
		}
		if($pbmps_origin === 'theme') {
			$pbmps_origin_path = PBMPS_THEME_PATH;
		}

        if(PBMPS_FRAMEWORK === 'sage/9/') {
            echo \App\template($pbmps_origin_path . "views/_patterns/03-templates/" . PBMPS_FRAMEWORK . $folder . $template . "." . $pbmps_file_extension,[
                'template' => $template
            ]);
        } else {
            include $pbmps_origin_path . "_patterns/03-templates/" . PBMPS_FRAMEWORK . $folder . $template . "." . $pbmps_file_extension;
        }
	}


	// 05 - PUBLICATION
	function mps_publication( $pbmps_origin, $structural, $folder, $template ) {
		$classes = '';
		if(PBMPS_IDENTIFIER_LABEL === true) {
			$classes = $classes . ' identifier-label--structural';
		}
		if(PBMPS_FRAMEWORK === 'sage/9/') {
			$pbmps_file_extension = 'blade.php';
		} else {
			$pbmps_file_extension = 'php';
		}
		include PBMPS_PATH . "_patterns/04-structurals/" . $structural . "." . $pbmps_file_extension;
	}


	// SAMPLE TEXT CONTENT
	function mps_sampletext($characters) {
		$text = 'Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. Sed haec quis possit intrepidus aestimare tellus. Cras mattis iudicium purus sit amet fermentum.';
		return substr( $text, 0, $characters );
	}