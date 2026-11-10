<?php
/**
 * Footer template part.
 *
 * Exact reconstruction of Jani-King footer:
 * logo, social icons, secondary menu, contact info, copyright.
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

	<footer class="jk-footer" id="site-footer">
		<div class="jk-container">
			<div class="jk-footer-inner">
				<?php
				if ( has_nav_menu( 'footer' ) ) :
					?>
					<nav class="jk-footer-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_class'     => 'jk-footer-menu',
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
					<div class="jk-footer-widgets">
						<?php
						foreach ( $footer_sidebars as $sidebar_id ) :
							if ( is_active_sidebar( $sidebar_id ) ) :
								?>
								<div class="jk-footer-column">
									<?php dynamic_sidebar( $sidebar_id ); ?>
								</div>
								<?php
							endif;
						endforeach;
						?>
					</div>
				<?php endif; ?>

				<div class="jk-footer-bottom">
					<p class="jk-copyright">
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
