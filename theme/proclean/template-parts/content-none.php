<?php
/**
 * Content-none template part.
 *
 * Displays when no posts/pages are found.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<section class="proclean-no-results">
		<h1 class="proclean-entry-title"><?php esc_html_e( 'Nothing Found', 'proclean' ); ?></h1>
		<div class="proclean-entry-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :
				?>
				<p>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s: URL to the new post screen. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'proclean' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
				</p>
				<?php
			elseif ( is_search() ) :
				?>
				<p><?php esc_html_e( 'No results match your search. Try again with different keywords.', 'proclean' ); ?></p>
				<?php
				get_search_form();
			else :
				?>
				<p><?php esc_html_e( 'No content found.', 'proclean' ); ?></p>
				<?php
			endif;
			?>
		</div>
	</section>
