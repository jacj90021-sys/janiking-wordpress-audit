<?php
/**
 * Page template.
 *
 * Displays a single page.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;
else :
	get_template_part( 'template-parts/content', 'none' );
endif;

get_footer();
