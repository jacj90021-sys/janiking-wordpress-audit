<?php
/**
 * 404 template.
 *
 * @package   Jani-King Rebuild
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

?>
	<section class="jk-content">
		<div class="jk-container">
			<h1><?php esc_html_e( '404 - Page Not Found', 'janiking-rebuild' ); ?></h1>
			<p><?php esc_html_e( 'The page you are looking for does not exist.', 'janiking-rebuild' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="jk-button jk-button--primary"><?php esc_html_e( 'Go to Home', 'janiking-rebuild' ); ?></a>
		</div>
	</section>

<?php
get_footer();
