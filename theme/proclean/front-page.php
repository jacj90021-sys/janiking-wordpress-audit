<?php
/**
 * Front Page template.
 *
 * Exact reconstruction of the Jani-King homepage:
 * hero, stat counters, services, FAQ, why-jani-king, retention, blog, CTA.
 * Uses Jani-King's actual images and text.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Helper to get attachment URL by ID
$jk_get_img = function( $id ) {
	return wp_get_attachment_url( $id );
};

// Image IDs from WordPress media library
$img_hero_commercial   = $jk_get_img( 30 );  // bnr-HomepageCommercial.webp
$img_hero_franchise    = $jk_get_img( 32 );  // bnr-homepage-franchise.webp
$img_service_cleaning  = $jk_get_img( 27 );  // bnr-cleaning-services.webp
$img_service_franchise = $jk_get_img( 29 );  // bnr-franchise-opportunities.webp
$img_retention         = $jk_get_img( 28 );  // bnr-CustomerRetention2.png
$img_blog_15           = $jk_get_img( 24 );  // Banner-Templet-15.png
$img_blog_51           = $jk_get_img( 25 );  // Banner-Templet-51.png
$img_blog_52           = $jk_get_img( 26 );  // Banner-Templet-52.png
$img_spill_cleanup     = $jk_get_img( 44 );  // icon-SpillCleanup
$img_disinfecting      = $jk_get_img( 41 );  // icon-Disinfecting
$img_ep_products       = $jk_get_img( 42 );  // icon-EPProducts
$img_extraction        = $jk_get_img( 43 );  // icon-Extraction
$img_icon_orange       = $jk_get_img( 40 );  // icon-CircleCheck-Orange
$img_icon_darkteal     = $jk_get_img( 39 );  // icon-CircleCheck-DarkTeal
$img_mobile_hero       = $jk_get_img( 33 );  // BNR-Homepage-Mobile2-1-768x512.webp

?>
	<!-- Hero Section -->
	<section class="jk-hero">
		<div class="jk-container">
			<div class="jk-hero-inner">
				<div class="jk-hero-content">
					<h1 class="jk-hero-title">
						<?php esc_html_e( 'Commercial Cleaning Services', 'proclean' ); ?>
					</h1>
					<p class="jk-hero-subtitle">
						<?php esc_html_e( 'Jani‑King understands how important it is to know the latest information in promoting health and safety for our clients.', 'proclean' ); ?>
					</p>
					<div class="jk-hero-actions">
						<a class="jk-button jk-button--primary" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
							<?php esc_html_e( 'Learn More About Our Cleaning Services', 'proclean' ); ?>
						</a>
						<a class="jk-button jk-button--link" href="<?php echo esc_url( get_permalink( 10 ) ); ?>">
							<?php esc_html_e( 'Franchise Opportunities', 'proclean' ); ?>
						</a>
					</div>
				</div>
				<div class="jk-hero-image">
					<?php if ( $img_hero_commercial ) : ?>
						<img src="<?php echo esc_url( $img_hero_commercial ); ?>" alt="Commercial Cleaning" />
					<?php endif; ?>
				</div>
				<div class="jk-hero-image">
					<?php if ( $img_hero_franchise ) : ?>
						<img src="<?php echo esc_url( $img_hero_franchise ); ?>" alt="Franchise Opportunities" />
					<?php endif; ?>
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
					<p class="jk-stat-label"><?php esc_html_e( 'Support Offices', 'proclean' ); ?></p>
				</div>
				<div class="jk-stat">
					<span class="jk-stat-number jk-animate-pulse">10</span>
					<p class="jk-stat-label"><?php esc_html_e( 'Countries Internationally', 'proclean' ); ?></p>
				</div>
				<div class="jk-stat">
					<span class="jk-stat-number jk-animate-pulse">6,900</span>
					<p class="jk-stat-label"><?php esc_html_e( 'Unit Franchises', 'proclean' ); ?></p>
				</div>
				<div class="jk-stat">
					<span class="jk-stat-number jk-animate-pulse">9</span>
					<p class="jk-stat-label"><?php esc_html_e( 'Year Avg. Customer Retention Rate', 'proclean' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="jk-services">
		<div class="jk-container">
			<div class="jk-section-header">
				<h2 class="jk-section-title"><?php esc_html_e( 'Commercial Cleaning Services', 'proclean' ); ?></h2>
			</div>
			<div class="jk-services-grid">
				<article class="jk-service-card">
					<div class="jk-service-card-image">
						<?php if ( $img_service_cleaning ) : ?>
							<img src="<?php echo esc_url( $img_service_cleaning ); ?>" alt="Commercial Cleaning Services" />
						<?php endif; ?>
					</div>
					<div class="jk-service-card-body">
						<h3 class="jk-service-card-title"><?php esc_html_e( 'Commercial cleaning services', 'proclean' ); ?></h3>
						<p class="jk-service-card-text">
							<?php esc_html_e( 'Professional commercial cleaning services for your business. Get a quote today for our effective and efficient cleaning services.', 'proclean' ); ?>
						</p>
						<a class="jk-service-card-link jk-button--link" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
							<?php esc_html_e( 'Learn more', 'proclean' ); ?>
							<span class="jk-arrow">&#8594;</span>
						</a>
					</div>
				</article>
				<article class="jk-service-card">
					<div class="jk-service-card-image">
						<?php if ( $img_service_franchise ) : ?>
							<img src="<?php echo esc_url( $img_service_franchise ); ?>" alt="Franchise Opportunities" />
						<?php endif; ?>
					</div>
					<div class="jk-service-card-body">
						<h3 class="jk-service-card-title"><?php esc_html_e( 'Franchise opportunities', 'proclean' ); ?></h3>
						<p class="jk-service-card-text">
							<?php esc_html_e( 'Join the Jani‑King franchise network. Unit franchises, domestic and international franchising options.', 'proclean' ); ?>
						</p>
						<a class="jk-service-card-link jk-button--link" href="<?php echo esc_url( get_permalink( 10 ) ); ?>">
							<?php esc_html_e( 'Learn more', 'proclean' ); ?>
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
				<h2 class="jk-section-title"><?php esc_html_e( 'Frequently Asked Questions', 'proclean' ); ?></h2>
			</div>
			<div class="jk-faq-list">
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
					<div class="jk-faq-item<?php echo esc_attr( $open ); ?>">
						<div class="jk-faq-question" onclick="this.parentElement.classList.toggle('open')">
							<?php echo esc_html( $faq['q'] ); ?>
							<?php if ( $img_icon_orange ) : ?>
								<img src="<?php echo esc_url( $img_icon_orange ); ?>" alt="Check" class="jk-check-img" />
							<?php else : ?>
								<span class="jk-check">&#10003;</span>
							<?php endif; ?>
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
				<?php esc_html_e( 'A dependable and well‑established franchise brand with over 56 years of trust.', 'proclean' ); ?>
			</p>
			<div class="jk-why-grid">
				<?php
				$why_items = array(
					array(
						'img'  => $img_spill_cleanup,
						'title'=> __( 'Spill Cleanup', 'proclean' ),
					),
					array(
						'img'  => $img_disinfecting,
						'title'=> __( 'Disinfecting', 'proclean' ),
					),
					array(
						'img'  => $img_ep_products,
						'title'=> __( 'EP Products', 'proclean' ),
					),
					array(
						'img'  => $img_extraction,
						'title'=> __( 'Extraction', 'proclean' ),
					),
				);
				foreach ( $why_items as $item ) :
					?>
					<div class="jk-why-item">
						<div class="jk-why-icon">
							<?php if ( $item['img'] ) : ?>
								<img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" />
							<?php endif; ?>
						</div>
						<h4 class="jk-why-title"><?php echo esc_html( $item['title'] ); ?></h4>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="jk-why-actions" style="text-align:center; margin-top: var(--jk-space-lg);">
				<a class="jk-button jk-button--primary" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
					<?php esc_html_e( 'Learn More About Our Cleaning Services', 'proclean' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- Customer Retention -->
	<section class="jk-retention">
		<div class="jk-container">
			<div class="jk-retention-image">
				<?php if ( $img_retention ) : ?>
					<img src="<?php echo esc_url( $img_retention ); ?>" alt="Customer Retention" />
				<?php endif; ?>
			</div>
			<div class="jk-retention-content">
				<span class="jk-retention-number">9</span>
				<p class="jk-retention-label">
					<?php
					/* translators: retention stat label. */
					printf(
						esc_html__( 'Year Avg. Customer Retention Rate vs. other competitive commercial cleaning companies (1-yr. avg.)', 'proclean' )
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
				<h2 class="jk-section-title"><?php esc_html_e( 'Latest News', 'proclean' ); ?></h2>
			</div>
			<div class="jk-blog-grid">
				<?php
				$blog_images = array( $img_blog_15, $img_blog_51, $img_blog_52 );
				foreach ( $blog_images as $blog_img ) :
					?>
					<div class="jk-blog-item">
						<?php if ( $blog_img ) : ?>
							<img src="<?php echo esc_url( $blog_img ); ?>" alt="Blog Post" />
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="jk-cta">
		<div class="jk-container">
			<div class="jk-cta-inner">
				<h2 class="jk-cta-title"><?php esc_html_e( 'Get a FREE Cleaning Quote From Your Local Jani‑King Office.', 'proclean' ); ?></h2>
				<p class="jk-cta-text"><?php esc_html_e( 'Fill out the form and a local office will contact you to schedule a free consultation.', 'proclean' ); ?></p>
				<a class="jk-button jk-button--primary" href="<?php echo esc_url( get_permalink( 13 ) ); ?>">
					<?php esc_html_e( 'Get a Free Quote', 'proclean' ); ?>
				</a>
			</div>
		</div>
	</section>

<?php
get_footer();
