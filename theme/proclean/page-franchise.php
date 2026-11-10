<?php
/**
 * Template Name: Franchise
 * Template Post Type: page
 *
 * Faithful reconstruction of a Jani-King franchise opportunity page.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

?>
	<section class="proclean-hero">
		<div class="proclean-container">
			<div class="proclean-hero-inner">
				<div class="proclean-hero-content">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full', array( 'class' => 'proclean-hero-image' ) ); ?>
					<?php endif; ?>
					<h1 class="proclean-hero-title"><?php the_title(); ?></h1>
					<?php
					$subtitle = get_post_meta( get_the_ID(), 'proclean_franchise_subtitle', true );
					if ( $subtitle ) :
						?>
						<p class="proclean-hero-subtitle"><?php echo esc_html( $subtitle ); ?></p>
					<?php endif; ?>
					<div class="proclean-hero-actions">
						<a class="proclean-button proclean-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
							<?php esc_html_e( 'Request More Information', 'proclean' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="proclean-container">
		<div class="proclean-franchise-detail">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
			endif;
			?>
		</div>
	</div>

	<section class="proclean-cta">
		<div class="proclean-container">
			<div class="proclean-cta-inner">
				<h2 class="proclean-cta-title"><?php esc_html_e( 'Be Your Own Boss with Jani‑King Franchising.', 'proclean' ); ?></h2>
				<p class="proclean-cta-text"><?php esc_html_e( 'In business for yourself but not by yourself. Fill out the form or call us today to get started.', 'proclean' ); ?></p>
				<a class="proclean-button proclean-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
					<?php esc_html_e( 'Get Franchise Information', 'proclean' ); ?>
				</a>
			</div>
		</div>
	</section>

<?php
get_footer();
