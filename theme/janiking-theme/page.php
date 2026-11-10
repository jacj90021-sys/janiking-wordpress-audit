<?php
/**
 * Page template.
 *
 * Displays a single page.
 *
 * @package   Jani-King Rebuild
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
		the_content();
	endwhile;
else :
	?>
	<section class="jk-content">
		<div class="jk-container">
			<h1><?php esc_html_e( 'Not Found', 'janiking-rebuild' ); ?></h1>
			<p><?php esc_html_e( 'No content found.', 'janiking-rebuild' ); ?></p>
		</div>
	</section>
	<?php
endif;

get_footer();
