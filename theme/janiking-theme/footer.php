<?php
/**
 * Footer template part.
 *
 * Jani-King exact footer: logo, social icons, secondary menu, contact info, copyright.
 *
 * @package   Jani-King Rebuild
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

				<div class="jk-footer-bottom">
					<p class="jk-copyright">
						<?php
						/* translators: 1: current year, 2: site title. */
						printf(
							/* translators: %1$s: current year, %2$s: site title. */
							esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'janiking-rebuild' ),
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
