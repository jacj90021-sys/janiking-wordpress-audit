<?php
/**
 * ProClean Core — Companion Plugin
 *
 * Plugin-territory functionality for the ProClean theme: custom post types,
 * taxonomies, custom Elementor widgets and demo-import integration.
 *
 * Separated from the theme per Envato plugin-territory separation rules so
 * that deactivating this plugin does not break ordinary WordPress pages,
 * posts or basic theme functionality.
 *
 * @package   ProClean_Core
 * @author    ProClean Theme Team
 * @license   GPL-2.0-or-later
 * @since     1.0.0
 */

/**
 * Prevent direct access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin version.
 */
define( 'PROCLEAN_CORE_VERSION', '1.0.0' );

/**
 * Plugin text domain.
 */
define( 'PROCLEAN_CORE_TEXT_DOMAIN', 'proclean-core' );

/**
 * Plugin prefix.
 */
define( 'PROCLEAN_CORE_PREFIX', 'proclean_core_' );

/**
 * Plugin file path.
 */
define( 'PROCLEAN_CORE_PATH', __DIR__ );

/**
 * Plugin file URL.
 */
define( 'PROCLEAN_CORE_URL', plugins_url( '/', __FILE__ ) );

/**
 * Requires the ProClean theme. Outputs a notice if the theme is not active.
 */
function proclean_core_require_theme() {
	$theme = wp_get_theme();
	if ( 'proclean' !== $theme->get_template() ) {
		add_action(
			'admin_notices',
			function () {
				echo '<div class="notice notice-error is-dismissible"><p>' .
					esc_html__( 'ProClean Core requires the ProClean theme to be active.', 'proclean-core' ) .
					'</p></div>';
			}
		);
	}
}

// Only load the bulk of the plugin if the theme is active, to avoid conflicts.
if ( 'proclean' === wp_get_theme()->get_template() ) {
	require_once PROCLEAN_CORE_PATH . '/includes/class-proclean-core-post-types.php';

	/**
	 * Initialize the plugin.
	 */
	function proclean_core_init() {
		ProClean_Core_Post_Types::get_instance();
	}

	add_action( 'plugins_loaded', 'proclean_core_init' );
} else {
	add_action( 'plugins_loaded', 'proclean_core_require_theme' );
}

/**
 * Activation hook: flush rewrite rules.
 */
register_activation_hook( __FILE__, 'proclean_core_activate' );

/**
 * Flush rewrite rules on activation.
 *
 * @since 1.0.0
 */
function proclean_core_activate() {
	ProClean_Core_Post_Types::get_instance();
	flush_rewrite_rules();
}

/**
 * Deactivation hook: flush rewrite rules.
 */
register_deactivation_hook( __FILE__, 'proclean_core_deactivate' );

/**
 * Flush rewrite rules on deactivation.
 *
 * @since 1.0.0
 */
function proclean_core_deactivate() {
	flush_rewrite_rules();
}
