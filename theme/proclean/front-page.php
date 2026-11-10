<?php
/**
 * Front Page template.
 *
 * Displays the homepage: hero section, statistics, services overview,
 * call-to-action and client logos.
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
					<h1 class="proclean-hero-title">
						<?php esc_html_e( 'Commercial Cleaning You Can Trust', 'proclean' ); ?>
					</h1>
					<p class="proclean-hero-subtitle">
						<?php esc_html_e( 'Professional janitorial, office and facility cleaning services for businesses of every size.', 'proclean' ); ?>
					</p>
					<div class="proclean-hero-actions">
						<a class="proclean-button proclean-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
							<?php esc_html_e( 'Get a Free Quote', 'proclean' ); ?>
						</a>
						<a class="proclean-button" href="<?php echo esc_url( get_permalink( 10 ) ); ?>">
							<?php esc_html_e( 'Franchise Opportunities', 'proclean' ); ?>
						</a>
					</div>
				</div>
				<div class="proclean-hero-image">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else {
						echo '<span class="proclean-hero-logo-placeholder">' . esc_html( get_bloginfo( 'name' ) ) . '</span>';
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="proclean-stats">
		<div class="proclean-container">
			<div class="proclean-stats-grid">
				<div class="proclean-stat">
					<span class="proclean-stat-number">120+</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Support Offices', 'proclean' ); ?></p>
				</div>
				<div class="proclean-stat">
					<span class="proclean-stat-number">10</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Countries', 'proclean' ); ?></p>
				</div>
				<div class="proclean-stat">
					<span class="proclean-stat-number">6,900+</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Unit Franchises', 'proclean' ); ?></p>
				</div>
				<div class="proclean-stat">
					<span class="proclean-stat-number">9 yrs</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Avg. Customer Retention', 'proclean' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="proclean-services">
		<div class="proclean-container">
			<header class="proclean-section-header">
				<h2 class="proclean-section-title"><?php esc_html_e( 'Our Cleaning Services', 'proclean' ); ?></h2>
				<p class="proclean-section-description">
					<?php esc_html_e( 'From routine janitorial to specialized deep cleaning, we deliver consistent results.', 'proclean' ); ?>
				</p>
			</header>
			<div class="proclean-services-grid">
				<?php
				$services = array(
					array(
						'title' => __( 'Janitorial Services', 'proclean' ),
						'text'  => __( 'Daily cleaning, restroom care, and routine maintenance for offices and facilities.', 'proclean' ),
						'link'  => get_permalink( 8 ),
					),
					array(
						'title' => __( 'Disinfecting', 'proclean' ),
						'text'  => __( 'Electrostatic disinfection and high-touch surface sanitization for healthier spaces.', 'proclean' ),
						'link'  => get_permalink( 8 ),
					),
					array(
						'title' => __( 'Green Cleaning', 'proclean' ),
						'text'  => __( 'Environmentally responsible cleaning products and sustainable practices.', 'proclean' ),
						'link'  => get_permalink( 8 ),
					),
					array(
						'title' => __( 'Specialty Cleaning', 'proclean' ),
						'text'  => __( 'Carpet, hard-surface, post-construction, and window cleaning services.', 'proclean' ),
						'link'  => get_permalink( 8 ),
					),
				);
				foreach ( $services as $service ) :
					?>
					<article class="proclean-service-card">
						<div class="proclean-service-card-body">
							<h3 class="proclean-service-card-title"><?php echo esc_html( $service['title'] ); ?></h3>
							<p class="proclean-service-card-text"><?php echo esc_html( $service['text'] ); ?></p>
							<a class="proclean-service-card-link" href="<?php echo esc_url( $service['link'] ); ?>">
								<?php esc_html_e( 'Learn more', 'proclean' ); ?>
								<span class="proclean-arrow">&#8594;</span>
							</a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="proclean-cta">
		<div class="proclean-container">
			<div class="proclean-cta-inner">
				<h2 class="proclean-cta-title"><?php esc_html_e( 'Ready for a cleaner facility?', 'proclean' ); ?></h2>
				<p class="proclean-cta-text"><?php esc_html_e( 'Request a free, no-obligation cleaning quote today.', 'proclean' ); ?></p>
				<a class="proclean-button proclean-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
					<?php esc_html_e( 'Get a Free Quote', 'proclean' ); ?>
				</a>
			</div>
		</div>
	</section>

	<section class="proclean-clients">
		<div class="proclean-container">
			<header class="proclean-section-header">
				<h2 class="proclean-section-title"><?php esc_html_e( 'Trusted by Businesses Everywhere', 'proclean' ); ?></h2>
			</header>
			<div class="proclean-client-logos">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
					<div class="proclean-client-logo">
						<span class="proclean-client-logo-placeholder"><?php echo esc_html( $i ); ?></span>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>

<?php
get_footer();
