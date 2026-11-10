<?php
/**
 * Header template part.
 *
 * Displays the site header: doctype, head, opening body, site branding and
 * primary navigation.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a class="proclean-skip-link screen-reader-text" href="#main-content">
		<?php esc_html_e( 'Skip to content', 'proclean' ); ?>
	</a>

	<header class="proclean-header" id="site-header">
		<div class="proclean-container">
			<div class="proclean-header-inner">
				<?php
				the_custom_logo();
				if ( ! has_custom_logo() ) :
					?>
					<div class="proclean-site-branding">
						<a class="proclean-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
						<p class="proclean-site-description"><?php bloginfo( 'description' ); ?></p>
					</div>
				<?php endif; ?>

				<nav class="proclean-main-navigation" id="primary-navigation">
					<button class="proclean-menu-toggle" aria-expanded="false">
						<?php esc_html_e( 'Menu', 'proclean' ); ?>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'proclean-primary-menu',
							'container'      => false,
							'fallback_cb'    => '__return_false',
						)
					);
					?>
				</nav>
			</div>
		</div>
	</header>

	<div class="proclean-site" id="site">
		<main class="proclean-main" id="main-content" tabindex="-1">
			<div class="proclean-container">
