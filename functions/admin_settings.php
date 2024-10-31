<?php if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

// Include CSS for some styling
add_action( 'admin_enqueue_scripts', function() {
    wp_enqueue_style( 'pbmps-styles-admin', PBMPS_PLUGIN_URL . 'assets/css/pbmps-styles-admin.css', array(),PBMPS_VERSION, 'all');
});

add_action( 'admin_menu', 'pbmps_admin_menu' );
function pbmps_admin_menu() {
    add_options_page( 'PB Modular Pattern System', 'PB Modular Pattern System', 'manage_options', 'pb-modular-pattern-system', 'pbmps_options_page' );
}

add_action( 'admin_init', 'pbmps_admin_init' );
function pbmps_admin_init() {
    register_setting( 'pbmps-settings-group', 'pbmps-setting-framework' );
    register_setting( 'pbmps-settings-group', 'pbmps-setting-labels' );
    register_setting( 'pbmps-settings-group', 'pbmps-setting-theme-styles' );
    register_setting( 'pbmps-settings-group', 'pbmps-setting-head-scripts' );
    register_setting( 'pbmps-settings-group', 'pbmps-setting-foot-scripts' );

    add_settings_section( 'pbmps-section-one', '', 'pbmps_section_one_render', 'pb-modular-pattern-system' );

    add_settings_field( 'pbmps-setting_framework', __( 'Front-end Framework' , 'pb-modular-pattern-system' ), 'pbmps_setting_framework_render', 'pb-modular-pattern-system', 'pbmps-section-one' );
    add_settings_field( 'pbmps-setting_labels', __( 'Show Pattern Labels' , 'pb-modular-pattern-system' ), 'pbmps_setting_label_render', 'pb-modular-pattern-system', 'pbmps-section-one' );
    add_settings_field( 'pbmps-setting_theme-styles', __( 'Theme CSS File' , 'pb-modular-pattern-system' ), 'pbmps_setting_theme_styles_render', 'pb-modular-pattern-system', 'pbmps-section-one' );
    add_settings_field( 'pbmps-setting_head-scripts', __( 'Additional Head Code<br><i>(for meta tags, Google Analytics and so on)</i>' , 'pb-modular-pattern-system' ), 'pbmps_setting_head_scripts_render', 'pb-modular-pattern-system', 'pbmps-section-one' );
    add_settings_field( 'pbmps-setting_foot-scripts', __( 'Additional Foot Code<br><i>(for custom scripts and so on)</i>' , 'pb-modular-pattern-system' ), 'pbmps_setting_foot_scripts_render', 'pb-modular-pattern-system', 'pbmps-section-one' );
}

function pbmps_section_one_render() {
    echo '<div class="pbmps-logo"></div><h1>' . __('The MPS (Modular Pattern System) is a design and development system based on 6 patterns.<br>More on <a href="http://web.mps.systems" target="_blank">http://web.mps.systems</a></p><h3>Patterns can be seen as modular parts (on design and code level) that are assembled to bigger pieces of functional components which still can be updated without the need to rework them in other parts all the time' , 'pb-modular-pattern-system') . '.</h3>
          <br>
         <p>' . __('Choose the front-end framework you (want to) use in your theme (for now UIkit 3 is supported by the core)' , 'pb-modular-pattern-system') . '.</p>';
}

function pbmps_setting_framework_render() {
    $pbmps_framework_options = get_option( 'pbmps-setting-framework' ); ?>
    <select name='pbmps-setting-framework'>
        <option value='bootstrap/3' <?php selected( $pbmps_framework_options, 'bootstrap/3' ); ?>>Bootstrap 3</option>
        <option value='bootstrap/4' <?php selected( $pbmps_framework_options, 'bootstrap/4' ); ?>>Bootstrap 4</option>
        <option value='gutenberg/5' <?php selected( $pbmps_framework_options, 'gutenberg/5' ); ?>>WP Gutenberg 5</option>
        <option value='sage/9' <?php selected( $pbmps_framework_options, 'sage/9' ); ?>>Sage 9</option>
        <option value='uikit/2' <?php selected( $pbmps_framework_options, 'uikit/2' ); ?>>UIkit 2</option>
        <option value='uikit/3' <?php selected( $pbmps_framework_options, 'uikit/3' ); ?>>UIkit 3</option>

    </select>
<?php }

function pbmps_setting_label_render() { ?>
    <input class="regular-text" type="checkbox" name="pbmps-setting-labels" value="1" <?php checked(1, get_option('pbmps-setting-labels'), true); ?> />
<?php }

function pbmps_setting_theme_styles_render() { ?>
    /themes/<?php echo get_option('stylesheet'); ?>/ <input class="regular-text" name="pbmps-setting-theme-styles" placeholder="e.g: _patterns/05-publications/" value="<?php echo esc_attr(get_option('pbmps-setting-theme-styles')); ?>" /> style.css<br>
    <br>
    Want some starting point? Download the <a href="//web.mps.systems/download/wp-modular-pattern-system-mps-example-theme/?wpdmdl=503&masterkey=5cf84a7215441" target="_blank"><b>free MPS Example Theme</b></a> and install this as a regular theme, then choose "UIkit 3" in "Front-end Framework" menu.
<?php }

function pbmps_setting_head_scripts_render() { ?>
    <textarea class="widefat textarea" rows="15" name="pbmps-setting-head-scripts"><?php echo esc_attr(get_option('pbmps-setting-head-scripts')); ?></textarea>
<?php }

function pbmps_setting_foot_scripts_render() { ?>
    <textarea class="widefat textarea" rows="15" name="pbmps-setting-foot-scripts"><?php echo esc_attr(get_option('pbmps-setting-foot-scripts')); ?></textarea>
<?php }

function pbmps_options_page() { ?>
    <div class="wrap">
        <h1><img width="475px" valign="top" id="pbmps_title_logo" alt="<?php echo PBMPS_NAME; ?>" src="<?php echo PBMPS_PLUGIN_URL . '/assets/images/pbmps-logo.png'; ?>" style="max-width:100%" />
          <span class="description "><?php echo __('Version' , 'pb-modular-pattern-system') . ' ' . PBMPS_VERSION; ?></span></h1>
        <form action="options.php" method="POST">
            <div id="poststuff">
                <div class="meta-box-sortables ui-sortable">
                    <div class="postbox">
                        <div class="inside">
                            <?php settings_fields( 'pbmps-settings-group' ); ?>
                            <?php do_settings_sections( 'pb-modular-pattern-system' ); ?>
                            <?php submit_button(); ?>
                        </div>
                    </div>
                </div>
                <?php include_once PBMPS_PLUGIN_DIR . 'functions/admin_footer.php'; ?>
            </div>
        </form>
    </div>
    <?php
}