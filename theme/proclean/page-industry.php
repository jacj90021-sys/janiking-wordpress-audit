<?php
/**
 * Template Name: Industry
 * Template Post Type: page
 *
 * Faithful reconstruction of a Jani-King industry detail page
 * (e.g. Healthcare, Education, Office Buildings, Hospitality).
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
					$subtitle = get_post_meta( get_the_ID(), 'proclean_industry_subtitle', true );
					if ( $subtitle ) :
						?>
						<p class="proclean-hero-subtitle"><?php echo esc_html( $subtitle ); ?></p>
					<?php endif; ?>
					<div class="proclean-hero-actions">
						<a class="proclean-button proclean-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
							<?php esc_html_e( 'Get a Free Quote', 'proclean' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="proclean-container">
		<div class="proclean-industry-detail">
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
				<h2 class="proclean-cta-title"><?php esc_html_e( 'Get a FREE Cleaning Quote From Your Local Office.', 'proclean' ); ?></h2>
				<p class="proclean-cta-text"><?php esc_html_e( 'Selecting a provider with extensive expertise is crucial for maintaining exceptional standards.', 'proclean' ); ?></p>
				<a class="proclean-button proclean-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
					<?php esc_html_e( 'Request a Quote', 'proclean' ); ?>
				</a>
			</div>
		</div>
	</section>

<?php
get_footer();
