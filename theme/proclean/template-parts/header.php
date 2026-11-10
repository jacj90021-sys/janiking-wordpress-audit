<?php
/**
 * Header template part.
 *
 * Exact reconstruction of Jani-King header:
 * logo (left), mega-menu nav (center), search icon + phone/CTA (right).
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a class="jk-skip-link screen-reader-text" href="#main-content">
		<?php esc_html_e( 'Skip to content', 'proclean' ); ?>
	</a>

	<header class="jk-header" id="site-header">
		<div class="jk-container">
			<div class="jk-header-inner">
				<div class="jk-site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else {
						?>
						<a class="jk-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
						<p class="jk-site-description"><?php bloginfo( 'description' ); ?></p>
						<?php
					}
					?>
				</div>

				<nav class="jk-main-navigation" id="primary-navigation">
					<button class="jk-menu-toggle" aria-expanded="false">
						<?php esc_html_e( 'Menu', 'proclean' ); ?>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'jk-primary-menu',
							'container'      => false,
							'fallback_cb'    => '__return_false',
							'walker'         => new ProClean_Mega_Menu_Walker(),
						)
					);
					?>
				</nav>

				<div class="jk-header-actions">
					<?php
					// Search icon (full-screen search).
					?>
					<button class="jk-search-toggle" aria-label="<?php esc_attr_e( 'Search', 'proclean' ); ?>">
						<span class="jk-search-icon">&#x1F50D;</span>
					</button>
					<?php
					// Phone / CTA button.
					?>
					<a class="jk-header-button" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
						<?php esc_html_e( 'Get a Free Quote', 'proclean' ); ?>
					</a>
				</div>
			</div>
		</div>
	</header>

	<div class="jk-site" id="site">
		<main class="jk-main" id="main-content" tabindex="-1">
			<div class="jk-container">
