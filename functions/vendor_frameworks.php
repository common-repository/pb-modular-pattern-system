
<?php if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

    // FRONT-END VENDOR FRAMEWORKS
	// VERSION: 1.0.1

	$pbmps_vendor_version_jquery_3        = "3/3.0.0";

	$pbmps_vendor_version_uikit_2         = "2/2.27.5";
	$pbmps_vendor_version_uikit_3         = "3/3.5.5";
	$pbmps_vendor_version_bootstrap_3     = "3/3.4.1";
    $pbmps_vendor_version_bootstrap_4     = "4/4.5.0";
	$pbmps_vendor_version_gutenberg_5     = ""; // Default WP Grid
	$pbmps_vendor_version_sage_9          = ""; // When using Sage


    // UIKIT 2
	if ( PBMPS_FRAMEWORK === 'uikit/2/') {
        wp_enqueue_style( 'styles-uikit-2', PBMPS_URI . 'assets/vendor/uikit/' . $pbmps_vendor_version_uikit_2 . '/css/uikit.min.css' );
		wp_enqueue_script( 'jquery' ); // Register available WP jQuery 1.12.4
		wp_enqueue_script( 'script-uikit-2', PBMPS_URI . 'assets/vendor/uikit/' . $pbmps_vendor_version_uikit_2 . '/js/uikit.min.js' );
	}

	// UIKIT 3
    if ( PBMPS_FRAMEWORK === 'uikit/3/') {
	    wp_enqueue_style( 'styles-uikit-3', PBMPS_URI . 'assets/vendor/uikit/' . $pbmps_vendor_version_uikit_3 . '/css/uikit.min.css' );
	    wp_enqueue_script( 'script-uikit-3', PBMPS_URI . 'assets/vendor/uikit/' . $pbmps_vendor_version_uikit_3 . '/js/uikit.min.js' );
	    wp_enqueue_script( 'fonts-uikit-3', PBMPS_URI . 'assets/vendor/uikit/' . $pbmps_vendor_version_uikit_3 . '/js/uikit-icons.min.js' );
    }

	// BOOTSTRAP 3
	if ( PBMPS_FRAMEWORK === 'bootstrap/3/') {
		wp_enqueue_style( 'styles-bootstrap-3', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_3 . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'theme-bootstrap-3', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_3 . '/css/bootstrap-theme.min.css' );
		wp_enqueue_script( 'jquery' ); // Register available WP jQuery 1.12.4
		wp_enqueue_script( 'script-bootstrap-3', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_3 . '/js/bootstrap.min.js' );
	}

	// BOOTSTRAP 4
	if ( PBMPS_FRAMEWORK === 'bootstrap/4/') {
		wp_enqueue_style( 'styles-bootstrap-4', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_4 . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'grid-bootstrap-4', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_4 . '/css/bootstrap-grid.min.css' );
		wp_enqueue_style( 'reboot-bootstrap-4', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_4 . '/css/bootstrap-reboot.min.css' );
		wp_deregister_script ( 'jquery' ); // Deregister default WP jQuery 1.12.4 as 3.0.0 is being loaded.
		wp_enqueue_script( 'jquery-bootstrap-4', PBMPS_URI . 'assets/vendor/jquery/' . $pbmps_vendor_version_jquery_3 . '/jquery-3.0.0.min.js' );
		wp_enqueue_script( 'script-bootstrap-4', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_4 . '/js/bootstrap.min.js' );
		wp_enqueue_script( 'bundle-bootstrap-4', PBMPS_URI . 'assets/vendor/bootstrap/' . $pbmps_vendor_version_bootstrap_4 . '/js/bootstrap.bundle.min.js' );
	}

	// GUTENBERG 4
	if ( PBMPS_FRAMEWORK === 'gutenberg/5/') {
        // Nothing to add as WP adds front-end framework by itself
	}

	// SAGE 9
	if ( PBMPS_FRAMEWORK === 'sage/9/') {
		// Nothing to add as all front-end is handled by Sage
	}




