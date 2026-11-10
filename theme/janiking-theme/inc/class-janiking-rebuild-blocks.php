<?php
/**
 * Jani-King Rebuild Blocks Class.
 *
 * Registers custom Gutenberg blocks for the Jani-King reconstruction.
 *
 * @package   Jani-King Rebuild
 * @author    Jani-King Rebuild Team
 * @license   GPL-2.0-or-later
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Janiking_Rebuild_Blocks class.
 *
 * @since 1.0.0
 */
class Janiking_Rebuild_Blocks {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_blocks' ) );
	}

	/**
	 * Register custom blocks.
	 *
	 * @since 1.0.0
	 */
	public function register_blocks() {
		// Check if register_block_type exists (WordPress 5.0+).
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		// Stat counter block.
		register_block_type( 'jkrb/stat-counter', array(
			'title'       => __( 'Stat Counter', 'janiking-rebuild' ),
			'description' => __( 'Statistic counter with number and label.', 'janiking-rebuild' ),
			'category'    => 'design',
			'icon'        => 'chart-bar',
			'attributes'  => array(
				'number' => array(
					'type'    => 'string',
					'default' => '0',
				),
				'label'  => array(
					'type'    => 'string',
					'default' => '',
				),
			),
			'render_callback' => array( $this, 'render_stat_counter' ),
		) );

		// Stat block (for the stats section).
		register_block_type( 'jkrb/stat-block', array(
			'title'       => __( 'Stat Block', 'janiking-rebuild' ),
			'description' => __( 'Statistic block for stats section.', 'janiking-rebuild' ),
			'category'    => 'design',
			'icon'        => 'chart-bar',
			'attributes'  => array(
				'number' => array(
					'type'    => 'string',
					'default' => '0',
				),
				'label'  => array(
					'type'    => 'string',
					'default' => '',
				),
			),
			'render_callback' => array( $this, 'render_stat_block' ),
		) );

		// Service card block.
		register_block_type( 'jkrb/service-card', array(
			'title'       => __( 'Service Card', 'janiking-rebuild' ),
			'description' => __( 'Service card with icon, title, description and link.', 'janiking-rebuild' ),
			'category'    => 'design',
			'icon'        => 'schedule',
			'attributes'  => array(
				'title'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'text'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'link'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'image_url' => array(
					'type'    => 'string',
					'default' => '',
				),
			),
			'render_callback' => array( $this, 'render_service_card' ),
		) );

		// Icon card block.
		register_block_type( 'jkrb/icon-card', array(
			'title'       => __( 'Icon Card', 'janiking-rebuild' ),
			'description' => __( 'Icon card with image, title.', 'janiking-rebuild' ),
			'category'    => 'design',
			'icon'        => 'format-image',
			'attributes'  => array(
				'title'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'image_url' => array(
					'type'    => 'string',
					'default' => '',
				),
			),
			'render_callback' => array( $this, 'render_icon_card' ),
		) );

		// CTA button block.
		register_block_type( 'jkrb/cta-button', array(
			'title'       => __( 'CTA Button', 'janiking-rebuild' ),
			'description' => __( 'Call to action button.', 'janiking-rebuild' ),
			'category'    => 'layout',
			'icon'        => 'button',
			'attributes'  => array(
				'text'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'link'   => array(
					'type'    => 'string',
					'default' => '',
				),
				'type'   => array(
					'type'    => 'string',
					'default' => 'primary',
				),
			),
			'render_callback' => array( $this, 'render_cta_button' ),
		) );

		// Hero section block.
		register_block_type( 'jkrb/hero-section', array(
			'title'       => __( 'Hero Section', 'janiking-rebuild' ),
			'description' => __( 'Hero section with title, subtitle, buttons and images.', 'janiking-rebuild' ),
			'category'    => 'layout',
			'icon'        => 'layout',
			'attributes'  => array(
				'title'       => array(
					'type'    => 'string',
					'default' => '',
				),
				'subtitle'  => array(
					'type'    => 'string',
					'default' => '',
				),
				'button1_text' => array(
					'type'    => 'string',
					'default' => '',
				),
				'button1_link' => array(
					'type'    => 'string',
					'default' => '',
				),
				'button2_text' => array(
					'type'    => 'string',
					'default' => '',
				),
				'button2_link' => array(
					'type'    => 'string',
					'default' => '',
				),
				'image1_url' => array(
					'type'    => 'string',
					'default' => '',
				),
				'image2_url' => array(
					'type'    => 'string',
					'default' => '',
				),
			),
			'render_callback' => array( $this, 'render_hero_section' ),
		) );
	}

	/**
	 * Render stat counter block.
	 *
	 * @since 1.0.0
	 */
	public function render_stat_counter( $attributes ) {
		$number = esc_html( $attributes['number'] );
		$label  = esc_html( $attributes['label'] );

		return sprintf(
			'<div class="jk-stat"><span class="jk-stat-number">%s</span><p class="jk-stat-label">%s</p></div>',
			$number,
			$label
		);
	}

	/**
	 * Render stat block.
	 *
	 * @since 1.0.0
	 */
	public function render_stat_block( $attributes ) {
		$number = esc_html( $attributes['number'] );
		$label  = esc_html( $attributes['label'] );

		return sprintf(
			'<div class="jk-stat"><span class="jk-stat-number">%s</span><p class="jk-stat-label">%s</p></div>',
			$number,
			$label
		);
	}

	/**
	 * Render service card block.
	 *
	 * @since 1.0.0
	 */
	public function render_service_card( $attributes ) {
		$title   = esc_html( $attributes['title'] );
		$text    = esc_html( $attributes['text'] );
		$link    = esc_url( $attributes['link'] );
		$image   = esc_url( $attributes['image_url'] );

		$output = '<article class="jk-service-card">';
		if ( $image ) {
			$output .= sprintf(
				'<div class="jk-service-card-image"><img src="%s" alt="%s" /></div>',
				$image,
				esc_attr( $title )
			);
		}
		$output .= '<div class="jk-service-card-body">';
		$output .= sprintf(
			'<h3 class="jk-service-card-title">%s</h3>',
			$title
		);
		$output .= sprintf(
			'<p class="jk-service-card-text">%s</p>',
			$text
		);
		if ( $link ) {
			$output .= sprintf(
				'<a class="jk-service-card-link jk-button--link" href="%s">%s<span class="jk-arrow">&#8594;</span></a>',
				$link,
				__( 'Learn more', 'janiking-rebuild' )
			);
		}
		$output .= '</div></article>';

		return $output;
	}

	/**
	 * Render icon card block.
	 *
	 * @since 1.0.0
	 */
	public function render_icon_card( $attributes ) {
		$title   = esc_html( $attributes['title'] );
		$image   = esc_url( $attributes['image_url'] );

		$output = '<div class="jk-why-item">';
		if ( $image ) {
			$output .= sprintf(
				'<div class="jk-why-icon"><img src="%s" alt="%s" /></div>',
				$image,
				esc_attr( $title )
			);
		}
		$output .= sprintf(
			'<h4 class="jk-why-title">%s</h4></div>',
			$title
		);

		return $output;
	}

	/**
	 * Render CTA button block.
	 *
	 * @since 1.0.0
	 */
	public function render_cta_button( $attributes ) {
		$text  = esc_html( $attributes['text'] );
		$link  = esc_url( $attributes['link'] );
		$type  = esc_attr( $attributes['type'] );
		$class = 'jk-button';
		if ( 'primary' === $type ) {
			$class .= ' jk-button--primary';
		}

		return sprintf(
			'<a class="%s" href="%s">%s</a>',
			$class,
			$link,
			$text
		);
	}

	/**
	 * Render hero section block.
	 *
	 * @since 1.0.0
	 */
	public function render_hero_section( $attributes ) {
		$title           = esc_html( $attributes['title'] );
		$subtitle        = esc_html( $attributes['subtitle'] );
		$btn1_text       = esc_html( $attributes['button1_text'] );
		$btn1_link       = esc_url( $attributes['button1_link'] );
		$btn2_text       = esc_html( $attributes['button2_text'] );
		$btn2_link       = esc_url( $attributes['button2_link'] );
		$image1_url      = esc_url( $attributes['image1_url'] );
		$image2_url      = esc_url( $attributes['image2_url'] );

		$output = '<section class="jk-hero"><div class="jk-container"><div class="jk-hero-inner">';
		$output .= '<div class="jk-hero-content">';
		$output .= sprintf( '<h1 class="jk-hero-title">%s</h1>', $title );
		$output .= sprintf( '<p class="jk-hero-subtitle">%s</p>', $subtitle );
		$output .= '<div class="jk-hero-actions">';

		if ( $btn1_text && $btn1_link ) {
			$output .= sprintf(
				'<a class="jk-button jk-button--primary" href="%s">%s</a>',
				$btn1_link,
				$btn1_text
			);
		}
		if ( $btn2_text && $btn2_link ) {
			$output .= sprintf(
				'<a class="jk-button jk-button--link" href="%s">%s</a>',
				$btn2_link,
				$btn2_text
			);
		}
		$output .= '</div></div><div class="jk-hero-image">';

		if ( $image1_url ) {
			$output .= sprintf( '<img src="%s" alt="Hero Image 1" />', $image1_url );
		}
		if ( $image2_url ) {
			$output .= sprintf( '<img src="%s" alt="Hero Image 2" />', $image2_url );
		}
		$output .= '</div></div></div></section>';

		return $output;
	}
}
