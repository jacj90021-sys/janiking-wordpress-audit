<?php
/**
 * ProClean Theme Functions.
 *
 * Bootstraps the ProClean theme by loading the main theme class.
 *
 * @package   ProClean
 * @author    ProClean Theme Team
 * @license   GPL-2.0-or-later
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load the main theme class.
require_once get_template_directory() . '/inc/class-proclean-theme.php';
