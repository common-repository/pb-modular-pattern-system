<?php

	/**
	 * Plugin Name: PB Modular Pattern System
	 * Plugin URI:  http://web.mps.systems/
	 * Description: Modular Pattern System for Wordpress
	 * Author:      Pat Bloom
	 * Author URI:  http://patbloom.com
	 * Version:     0.4.5
	 * Text Domain: pb-modular-pattern-system
	 * Domain Path: /languages
	 */

	if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

	// Plugin Name.
	if ( ! defined( 'PBMPS_NAME' ) ) {
		define( 'PBMPS_NAME', 'PB Modular Pattern System' );
	}

	// Plugin version.
	if ( ! defined( 'PBMPS_VERSION' ) ) {
		define( 'PBMPS_VERSION', '0.4.5' );
	}

	// Plugin Folder Path.
	if ( ! defined( 'PBMPS_PLUGIN_DIR' ) ) {
		define( 'PBMPS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	}

	// Plugin Folder URL.
	if ( ! defined( 'PBMPS_PLUGIN_URL' ) ) {
		define( 'PBMPS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
	}

	// Plugin Root File.
	if ( ! defined( 'PBMPS_PLUGIN_FILE' ) ) {
		define( 'PBMPS_PLUGIN_FILE', __FILE__ );
	}

	//	Add Settings Link
	add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'pbmps_settings_link');
	function pbmps_settings_link( $pbmps_settings_url ) {
		$pbmps_settings_url[] = '<a href="' .
			admin_url( 'options-general.php?page=pb-modular-pattern-system' ) .
			'">' . __('Settings') . '</a>';
		return $pbmps_settings_url;
	}

	define("PBMPS_SHOW_TYPES", true)  ;

	// SHOW LABELS
	$pbmps_identifier_labels = false;

	if ( get_option('pbmps-setting-labels') !== null ) {
		$pbmps_labels = get_option('pbmps-setting-labels');
		if ( $pbmps_labels === "1") {
			$pbmps_identifier_labels = true;
		}
	} else {
		$pbmps_identifier_labels = false;
	}

	if ($pbmps_identifier_labels === true) {
		define("PBMPS_IDENTIFIER_LABEL", true);
	} elseif ($pbmps_identifier_labels === false) {
		define("PBMPS_IDENTIFIER_LABEL", false);
	}


	// PATHS & URI's
	define( "PBMPS_PATH", PBMPS_PLUGIN_DIR ); // MPS PATH
	define( "PBMPS_URI", PBMPS_PLUGIN_URL ); // MPS URI

	$pbmps_theme_type = 'main';

	if ($pbmps_theme_type == 'main') { //	THEME
		define("PBMPS_THEME_MAIN_PATH", get_template_directory() . '/'); // (main) Theme Path
		define("PBMPS_THEME_MAIN_URI", get_bloginfo('template_url') . '/'); // (main) Theme URL
		$pbmps_theme_path = PBMPS_THEME_MAIN_PATH;
		$pbmps_theme_url = PBMPS_THEME_MAIN_URI;
	}

	if ($pbmps_theme_type == 'child' ) { //	CHILD THEME
		define("PBMPS_THEME_CHILD_PATH", get_stylesheet_directory() . '/'); // (child) Theme Path
		define("PBMPS_THEME_CHILD_URI", get_stylesheet_directory_uri() . '/'); // (child) Theme URL
		$pbmps_theme_path = PBMPS_THEME_CHILD_PATH;
		$pbmps_theme_url = PBMPS_THEME_CHILD_URI;
	}

	define( "PBMPS_THEME_PATH", $pbmps_theme_path );
	define( "PBMPS_THEME_URI", $pbmps_theme_url );

	//	PUBLICATIONS
	define("PBMPS_PUBLICATIONS_PATH", PBMPS_THEME_PATH . get_option('pbmps-setting-theme-styles') );
	define("PBMPS_PUBLICATIONS_URI", PBMPS_THEME_URI . get_option('pbmps-setting-theme-styles') );

	// Define Framework from Admin Setting
	define( "PBMPS_FRAMEWORK", get_option( 'pbmps-setting-framework' ) . '/' );

	// Define the class and the function.
	require_once dirname( __FILE__ ) . '/functions/admin_settings.php';
	require_once dirname( __FILE__ ) . '/functions/pbmps_class.php';