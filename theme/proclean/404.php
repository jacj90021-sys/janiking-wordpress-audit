<?php
/**
 * 404 template.
 *
 * Displays when a page is not found.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/content', 'none' );

get_footer();
