<?php
/**
 * Footer template part.
 *
 * Closes the site structure and displays the footer: navigation, widget areas
 * and copyright.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
			</div>
		</main>

	<footer class="proclean-footer" id="site-footer">
		<div class="proclean-container">
			<div class="proclean-footer-inner">
				<?php
				if ( has_nav_menu( 'footer' ) ) :
					?>
					<nav class="proclean-footer-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_class'     => 'proclean-footer-menu',
								'container'      => false,
								'fallback_cb'    => '__return_false',
							)
						);
						?>
					</nav>
				<?php endif; ?>

				<?php
				$footer_sidebars    = array( 'footer-1', 'footer-2', 'footer-3' );
				$has_footer_widgets = false;
				foreach ( $footer_sidebars as $sidebar_id ) {
					if ( is_active_sidebar( $sidebar_id ) ) {
						$has_footer_widgets = true;
						break;
					}
				}
				?>

				<?php if ( $has_footer_widgets ) : ?>
					<div class="proclean-footer-widgets">
						<?php
						foreach ( $footer_sidebars as $sidebar_id ) :
							if ( is_active_sidebar( $sidebar_id ) ) :
								?>
								<div class="proclean-footer-column">
									<?php dynamic_sidebar( $sidebar_id ); ?>
								</div>
								<?php
							endif;
						endforeach;
						?>
					</div>
				<?php endif; ?>

				<div class="proclean-footer-bottom">
					<p class="proclean-copyright">
						<?php
						/* translators: 1: current year, 2: site title. */
						printf(
							/* translators: %1$s: current year, %2$s: site title. */
							esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'proclean' ),
							esc_html( gmdate( 'Y' ) ),
							esc_html( get_bloginfo( 'name' ) )
						);
						?>
					</p>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<?php wp_footer(); ?>

</body>
</html>
