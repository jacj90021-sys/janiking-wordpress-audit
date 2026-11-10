<?php
/**
 * Front Page template.
 *
 * Faithful reconstruction of the Jani-King homepage:
 * hero (Commercial cleaning / Franchise opportunities), stat counters,
 * services, FAQ, client logos, CTA, why-Jani-King checkmarks.
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
						<?php esc_html_e( 'A dependable and well-established franchise brand with over 56 years of trust.', 'proclean' ); ?>
					</p>
					<div class="proclean-hero-actions">
						<a class="proclean-button proclean-button--primary button cleaning-service" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
							<?php esc_html_e( 'Learn More About Our Cleaning Services', 'proclean' ); ?>
						</a>
						<a class="proclean-button button franchise-opportunities" href="<?php echo esc_url( get_permalink( 10 ) ); ?>">
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
					<span class="proclean-stat-number proclean-animate-pulse">120+</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Support Offices', 'proclean' ); ?></p>
				</div>
				<div class="proclean-stat">
					<span class="proclean-stat-number proclean-animate-pulse">10</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Countries Internationally', 'proclean' ); ?></p>
				</div>
				<div class="proclean-stat">
					<span class="proclean-stat-number proclean-animate-pulse">6,900+</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Unit Franchises', 'proclean' ); ?></p>
				</div>
				<div class="proclean-stat">
					<span class="proclean-stat-number proclean-animate-pulse">9 yrs</span>
					<p class="proclean-stat-label"><?php esc_html_e( 'Avg. Customer Retention', 'proclean' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="proclean-services">
		<div class="proclean-container">
			<header class="proclean-section-header">
				<h2 class="proclean-section-title"><?php esc_html_e( 'Commercial Cleaning Services', 'proclean' ); ?></h2>
				<p class="proclean-section-description">
					<?php esc_html_e( 'Thousands of world-recognized brands, businesses and facilities in several major industries globally, have entrusted Jani‑King with their commercial cleaning needs.', 'proclean' ); ?>
				</p>
			</header>
			<div class="proclean-services-grid">
				<?php
				$services = array(
					array(
						'title' => __( 'Janitorial Services', 'proclean' ),
						'text'  => __( 'Daily carpet care, lobby and reception cleaning, dusting, office gear, trash removal, kitchen and breakroom, hard surface floors.', 'proclean' ),
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
						'text'  => __( 'Carpet, hard-surface, post-construction, tile and grout, window cleaning services.', 'proclean' ),
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

	<section class="proclean-faq">
		<div class="proclean-container">
			<header class="proclean-section-header">
				<h2 class="proclean-section-title"><?php esc_html_e( 'Frequently Asked Questions', 'proclean' ); ?></h2>
			</header>
			<div class="proclean-faq-list">
				<?php
				$faqs = array(
					array(
						'q' => __( 'What services does Jani‑King offer?', 'proclean' ),
						'a' => __( 'Jani‑King offers commercial cleaning, janitorial services, disinfecting, green cleaning and specialty cleaning for offices and facilities of every size.', 'proclean' ),
					),
					array(
						'q' => __( 'How do I get a free cleaning quote?', 'proclean' ),
						'a' => __( 'Fill out the quote request form or contact your local Jani‑King office to schedule a free consultation.', 'proclean' ),
					),
					array(
						'q' => __( 'What industries do you serve?', 'proclean' ),
						'a' => __( 'Healthcare, education, office buildings, hospitality, retail, manufacturing, government, fitness, restaurants, casinos, places of worship and more.', 'proclean' ),
					),
					array(
						'q' => __( 'How can I become a Jani‑King franchisee?', 'proclean' ),
						'a' => __( 'Visit the Franchise Opportunities page to learn about unit franchises, domestic and international franchising options.', 'proclean' ),
					),
				);
				foreach ( $faqs as $index => $faq ) :
					$open = ( 0 === $index ) ? ' open' : '';
					?>
					<div class="proclean-faq-item<?php echo esc_attr( $open ); ?>">
						<div class="proclean-faq-question" onclick="this.parentElement.classList.toggle('open')">
							<?php echo esc_html( $faq['q'] ); ?>
							<span class="proclean-check">&#10003;</span>
						</div>
						<div class="proclean-faq-answer"><?php echo esc_html( $faq['a'] ); ?></div>
					</div>
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
				<h2 class="proclean-section-title"><?php esc_html_e( 'Our Proud Partnerships &amp; Clients', 'proclean' ); ?></h2>
			</header>
			<div class="proclean-client-logos">
				<?php
				$clients = array(
					__( 'AT&amp;T Stadium', 'proclean' ),
					__( 'Bridgestone Arena', 'proclean' ),
					__( 'Cains', 'proclean' ),
					__( 'Camping World Stadium', 'proclean' ),
					__( 'Carolina Panthers', 'proclean' ),
					__( 'Chaifetz Arena', 'proclean' ),
				);
				foreach ( $clients as $client ) :
					?>
					<div class="proclean-client-logo">
						<?php echo esc_html( $client ); ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

<?php
get_footer();
