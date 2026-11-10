<?php
/**
 * Jani-King Rebuild Theme Functions.
 *
 * Bootstraps the theme, registers custom Gutenberg blocks, enqueues assets,
 * and sets up theme support.
 *
 * @package   Jani-King Rebuild
 * @author    Jani-King Rebuild Team
 * @license   GPL-2.0-or-later
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version.
 */
define( 'JANIKING_REBUILD_VERSION', '1.0.0' );

/**
 * Theme text domain.
 */
define( 'JANIKING_REBUILD_TEXT_DOMAIN', 'janiking-rebuild' );

/**
 * Theme prefix.
 */
define( 'JANIKING_REBUILD_PREFIX', 'jkrb_' );

/**
 * Include required files.
 */
require_once get_template_directory() . '/inc/class-janiking-rebuild-theme.php';
require_once get_template_directory() . '/inc/class-janiking-rebuild-blocks.php';

/**
 * Initialize the theme.
 */
function janiking_rebuild_init() {
	new Janiking_Rebuild_Theme();
	new Janiking_Rebuild_Blocks();
}
add_action( 'after_setup_theme', 'janiking_rebuild_init' );
