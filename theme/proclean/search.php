<?php
/**
 * Search results template.
 *
 * Displays search results.
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
	get_template_part( 'template-parts/page-header' );

	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;

	the_posts_pagination(
		array(
			'mid_size'  => 2,
			'prev_text' => esc_html__( 'Previous', 'proclean' ),
			'next_text' => esc_html__( 'Next', 'proclean' ),
		)
	);

else :
	get_template_part( 'template-parts/content', 'none' );
endif;

get_footer();
