<?php
/**
 * Single post template.
 *
 * Displays a single blog post.
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

		// Post navigation.
		the_post_navigation(
			array(
				'prev_text' => esc_html__( 'Previous post', 'proclean' ),
				'next_text' => esc_html__( 'Next post', 'proclean' ),
			)
		);

		// Comments.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
else :
	get_template_part( 'template-parts/content', 'none' );
endif;

get_footer();
