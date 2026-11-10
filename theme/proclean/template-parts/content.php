<?php
/**
 * Content template part.
 *
 * Displays post/page content with title, meta and entry content.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<article class="proclean-content post-<?php the_ID(); ?> <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="proclean-entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="proclean-entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="proclean-entry-meta">
				<?php
				printf(
					/* translators: %1$s: post date, %2$s: post author. */
					esc_html__( '%1$s by %2$s', 'proclean' ),
					esc_html( get_the_date() ),
					esc_html( get_the_author() )
				);
				?>
			</div>
		<?php endif; ?>

		<div class="proclean-entry-content">
			<?php the_content(); ?>

			<?php
			if ( ! is_singular() ) :
				?>
				<p class="proclean-read-more">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php esc_html_e( 'Read more', 'proclean' ); ?>
					</a>
				</p>
				<?php
			endif;
			?>
		</div>
	</article>
