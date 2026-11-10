<?php
/**
 * Front Page template.
 *
 * Exact reconstruction of the Jani-King homepage:
 * hero, stat counters, services, FAQ, why-jani-king, retention, blog, CTA.
 *
 * @package   Jani-King Rebuild
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$theme_uri = get_template_directory_uri();

?>
	<!-- Hero Section -->
	<section class="jk-hero">
		<div class="jk-container">
			<div class="jk-hero-inner">
				<div class="jk-hero-content">
					<h1 class="jk-hero-title">
						<?php esc_html_e( 'Commercial Cleaning Services', 'janiking-rebuild' ); ?>
					</h1>
					<p class="jk-hero-subtitle">
						<?php esc_html_e( 'Jani‑King understands how important it is to know the latest information in promoting health and safety for our clients.', 'janiking-rebuild' ); ?>
					</p>
					<div class="jk-hero-actions">
						<a class="jk-button jk-button--primary" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
							<?php esc_html_e( 'Learn More About Our Cleaning Services', 'janiking-rebuild' ); ?>
						</a>
						<a class="jk-button jk-button--link" href="<?php echo esc_url( get_permalink( 10 ) ); ?>">
							<?php esc_html_e( 'Franchise Opportunities', 'janiking-rebuild' ); ?>
						</a>
					</div>
				</div>
				<div class="jk-hero-image">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/bnr-HomepageCommercial.webp' ); ?>" alt="Commercial Cleaning" />
				</div>
				<div class="jk-hero-image">
					<img src="<?php echo esc_url( $theme_uri . '/assets/images/bnr-HomepageFranchise-1.webp' ); ?>" alt="Franchise Opportunities" />
				</div>
			</div>
		</div>
	</section>

	<!-- Stat Counters -->
	<section class="jk-stats">
		<div class="jk-container">
			<div class="jk-stats-grid">
				<div class="jk-stat">
					<span class="jk-stat-number jk-animate-pulse">120</span>
					<p class="jk-stat-label"><?php esc_html_e( 'Support Offices', 'janiking-rebuild' ); ?></p>
				</div>
				<div class="jk-stat">
					<span class="jk-stat-number jk-animate-pulse">10</span>
					<p class="jk-stat-label"><?php esc_html_e( 'Countries Internationally', 'janiking-rebuild' ); ?></p>
				</div>
				<div class="jk-stat">
					<span class="jk-stat-number jk-animate-pulse">6,900</span>
					<p class="jk-stat-label"><?php esc_html_e( 'Unit Franchises', 'janiking-rebuild' ); ?></p>
				</div>
				<div class="jk-stat">
					<span class="jk-stat-number jk-animate-pulse">9</span>
					<p class="jk-stat-label"><?php esc_html_e( 'Year Avg. Customer Retention Rate', 'janiking-rebuild' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="jk-services">
		<div class="jk-container">
			<div class="jk-section-header">
				<h2 class="jk-section-title"><?php esc_html_e( 'Commercial Cleaning Services', 'janiking-rebuild' ); ?></h2>
			</div>
			<div class="jk-services-grid">
				<article class="jk-service-card">
					<div class="jk-service-card-image">
						<img src="<?php echo esc_url( $theme_uri . '/assets/images/bnr-cleaning-services.webp' ); ?>" alt="Commercial Cleaning Services" />
					</div>
					<div class="jk-service-card-body">
						<h3 class="jk-service-card-title"><?php esc_html_e( 'Commercial cleaning services', 'janiking-rebuild' ); ?></h3>
						<p class="jk-service-card-text">
							<?php esc_html_e( 'Professional commercial cleaning services for your business. Get a quote today for our effective and efficient cleaning services.', 'janiking-rebuild' ); ?>
						</p>
						<a class="jk-service-card-link jk-button--link" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
							<?php esc_html_e( 'Learn more', 'janiking-rebuild' ); ?>
							<span class="jk-arrow">&#8594;</span>
						</a>
					</div>
				</article>
				<article class="jk-service-card">
					<div class="jk-service-card-image">
						<img src="<?php echo esc_url( $theme_uri . '/assets/images/bnr-franchise-opportunities.webp' ); ?>" alt="Franchise Opportunities" />
					</div>
					<div class="jk-service-card-body">
						<h3 class="jk-service-card-title"><?php esc_html_e( 'Franchise opportunities', 'janiking-rebuild' ); ?></h3>
						<p class="jk-service-card-text">
							<?php esc_html_e( 'Join the Jani‑King franchise network. Unit franchises, domestic and international franchising options.', 'janiking-rebuild' ); ?>
						</p>
						<a class="jk-service-card-link jk-button--link" href="<?php echo esc_url( get_permalink( 10 ) ); ?>">
							<?php esc_html_e( 'Learn more', 'janiking-rebuild' ); ?>
							<span class="jk-arrow">&#8594;</span>
						</a>
					</div>
				</article>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="jk-faq">
		<div class="jk-container">
			<div class="jk-section-header">
				<h2 class="jk-section-title"><?php esc_html_e( 'Frequently Asked Questions', 'janiking-rebuild' ); ?></h2>
			</div>
			<div class="jk-faq-list">
				<?php
				$faqs = array(
					array(
						'q' => __( 'What services does Jani‑King offer?', 'janiking-rebuild' ),
						'a' => __( 'Jani‑King offers commercial cleaning, janitorial services, disinfecting, green cleaning and specialty cleaning for offices and facilities of every size.', 'janiking-rebuild' ),
					),
					array(
						'q' => __( 'How do I get a free cleaning quote?', 'janiking-rebuild' ),
						'a' => __( 'Fill out the quote request form or contact your local Jani‑King office to schedule a free consultation.', 'janiking-rebuild' ),
					),
					array(
						'q' => __( 'What industries do you serve?', 'janiking-rebuild' ),
						'a' => __( 'Healthcare, education, office buildings, hospitality, retail, manufacturing, government, fitness, restaurants, casinos, places of worship and more.', 'janiking-rebuild' ),
					),
					array(
						'q' => __( 'How can I become a Jani‑King franchisee?', 'janiking-rebuild' ),
						'a' => __( 'Visit the Franchise Opportunities page to learn about unit franchises, domestic and international franchising options.', 'janiking-rebuild' ),
					),
				);
				foreach ( $faqs as $index => $faq ) :
					$open = ( 0 === $index ) ? ' open' : '';
					?>
					<div class="jk-faq-item<?php echo esc_attr( $open ); ?>">
						<div class="jk-faq-question" onclick="this.parentElement.classList.toggle('open')">
							<?php echo esc_html( $faq['q'] ); ?>
							<span class="jk-check-img"><?php echo esc_html_e( '+', 'janiking-rebuild' ); ?></span>
						</div>
						<div class="jk-faq-answer"><?php echo esc_html( $faq['a'] ); ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Why Jani-King -->
	<section class="jk-why-jk">
		<div class="jk-container">
			<p class="jk-why-intro">
				<?php esc_html_e( 'A dependable and well‑established franchise brand with over 56 years of trust.', 'janiking-rebuild' ); ?>
			</p>
			<div class="jk-why-grid">
				<?php
				$why_items = array(
					array(
						'img'   => $theme_uri . '/assets/images/icon-SpillCleanup-qcf10r2ei1min6xr7f60o4d5xb7o2z0tnrawc4k9bw.png',
						'title' => __( 'Spill Cleanup', 'janiking-rebuild' ),
					),
					array(
						'img'   => $theme_uri . '/assets/images/icon-Disinfecting-qcf2mgdq1wm7df4c9d3iqk5uqusum23m9d1yxn07cs.png',
						'title' => __( 'Disinfecting', 'janiking-rebuild' ),
					),
					array(
						'img'   => $theme_uri . '/assets/images/icon-EPProducts-qcf3i3m453xq8t5jh1jcokoiputpr7qalzqgl031vg.png',
						'title' => __( 'EP Products', 'janiking-rebuild' ),
					),
					array(
						'img'   => $theme_uri . '/assets/images/icon-Extraction-qx2cdlw32r5okselkks94x5rnsgssqkdui1tt5eiws.png',
						'title' => __( 'Extraction', 'janiking-rebuild' ),
					),
				);
				foreach ( $why_items as $item ) :
					?>
					<div class="jk-why-item">
						<div class="jk-why-icon">
							<img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" />
						</div>
						<h4 class="jk-why-title"><?php echo esc_html( $item['title'] ); ?></h4>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="jk-why-actions" style="text-align:center; margin-top: var(--jk-space-lg);">
				<a class="jk-button jk-button--primary" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
					<?php esc_html_e( 'Learn More About Our Cleaning Services', 'janiking-rebuild' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- Customer Retention -->
	<section class="jk-retention">
		<div class="jk-container">
			<div class="jk-retention-image">
				<img src="<?php echo esc_url( $theme_uri . '/assets/images/bnr-CustomerRetention2.png' ); ?>" alt="Customer Retention" />
			</div>
			<div class="jk-retention-content">
				<span class="jk-retention-number">9</span>
				<p class="jk-retention-label">
					<?php
					/* translators: retention stat label. */
					printf(
						esc_html__( 'Year Avg. Customer Retention Rate vs. other competitive commercial cleaning companies (1-yr. avg.)', 'janiking-rebuild' )
					);
					?>
				</p>
			</div>
		</div>
	</section>

	<!-- Blog -->
	<section class="jk-blog">
		<div class="jk-container">
			<div class="jk-section-header">
				<h2 class="jk-section-title"><?php esc_html_e( 'Latest News', 'janiking-rebuild' ); ?></h2>
			</div>
			<div class="jk-blog-grid">
				<?php
				$blog_images = array(
					$theme_uri . '/assets/images/Banner-Templet-15.png',
					$theme_uri . '/assets/images/Banner-Templet-51.png',
					$theme_uri . '/assets/images/Banner-Templet-52.png',
				);
				foreach ( $blog_images as $blog_img ) :
					?>
					<div class="jk-blog-item">
						<img src="<?php echo esc_url( $blog_img ); ?>" alt="Blog Post" />
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="jk-cta">
		<div class="jk-container">
			<div class="jk-cta-inner">
				<h2 class="jk-cta-title"><?php esc_html_e( 'Get a FREE Cleaning Quote From Your Local Jani‑King Office.', 'janiking-rebuild' ); ?></h2>
				<p class="jk-cta-text"><?php esc_html_e( 'Fill out the form and a local office will contact you to schedule a free consultation.', 'janiking-rebuild' ); ?></p>
				<a class="jk-button jk-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
					<?php esc_html_e( 'Get a Free Quote', 'janiking-rebuild' ); ?>
				</a>
			</div>
		</div>
	</section>

<?php
get_footer();
