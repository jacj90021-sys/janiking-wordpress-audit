<?php
/**
 * ProClean Theme Main Class.
 *
 * Handles theme setup, asset loading, Customizer settings and template-part
 * helpers. All functions are prefixed with proclean_ and the class is
 * ProClean_Theme to avoid collisions.
 *
 * @package   ProClean
 * @author    ProClean Theme Team
 * @license   GPL-2.0-or-later
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ProClean_Theme class.
 *
 * Encapsulates theme initialization: setup, assets, Customizer, template parts.
 *
 * @since 1.0.0
 */
class ProClean_Theme {

	/**
	 * Theme version.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	const VERSION = '1.0.0';

	/**
	 * Text domain.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	const TEXT_DOMAIN = 'proclean';

	/**
	 * Theme prefix.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	const PREFIX = 'proclean_';

	/**
	 * Default container max-width (px).
	 *
	 * @since 1.0.0
	 * @var int
	 */
	const CONTAINER_MAX_WIDTH = 1200;

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
		add_action( 'customize_register', array( $this, 'customizer_register' ) );
	}

	/**
	 * Theme setup.
	 *
	 * @since 1.0.0
	 */
	public function setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'proclean', get_template_directory() . '/languages' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable automatic feed links.
		add_theme_support( 'automatic-feed-links' );

		// Enable post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// HTML5 markup.
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Custom logo support.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor-style.css' );

		// Register navigation menus.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Navigation', 'proclean' ),
				'footer'  => esc_html__( 'Footer Navigation', 'proclean' ),
				'top_bar' => esc_html__( 'Top Bar Navigation', 'proclean' ),
			)
		);

		// Register widget areas.
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'proclean' ),
				'id'            => 'sidebar-1',
				'description'   => esc_html__( 'Main sidebar area.', 'proclean' ),
				'before_widget' => '<section class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Column 1', 'proclean' ),
				'id'            => 'footer-1',
				'description'   => esc_html__( 'First footer widget column.', 'proclean' ),
				'before_widget' => '<section class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Column 2', 'proclean' ),
				'id'            => 'footer-2',
				'description'   => esc_html__( 'Second footer widget column.', 'proclean' ),
				'before_widget' => '<section class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Column 3', 'proclean' ),
				'id'            => 'footer-3',
				'description'   => esc_html__( 'Third footer widget column.', 'proclean' ),
				'before_widget' => '<section class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		// Content width.
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = self::CONTAINER_MAX_WIDTH;
		}
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 1.0.0
	 */
	public function assets() {
		$version = self::VERSION;

		// Main stylesheet.
		wp_enqueue_style(
			self::PREFIX . 'style',
			get_template_directory_uri() . '/assets/css/proclean.css',
			array(),
			$version
		);

		// Editor styles already added via add_editor_style; enqueue the
		// front-end customizer dynamic styles separately if needed.

		// Main JavaScript.
		wp_enqueue_script(
			self::PREFIX . 'main',
			get_template_directory_uri() . '/assets/js/proclean.js',
			array( 'jquery' ),
			$version,
			true
		);

		// Comment reply script on singular posts with threaded comments.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	/**
	 * Register Customizer settings.
	 *
	 * @since 1.0.0
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function customizer_register( $wp_customize ) {
		// Colors section.
		$wp_customize->add_section(
			'proclean_colors',
			array(
				'title'    => esc_html__( 'Colors', 'proclean' ),
				'priority' => 35,
			)
		);

		$wp_customize->add_setting(
			'proclean_brand_primary',
			array(
				'default'           => '#1a3a5c',
				'sanitize_callback' => array( $this, 'sanitize_hex_color' ),
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'proclean_brand_primary',
				array(
					'label'    => esc_html__( 'Brand Primary Color', 'proclean' ),
					'section'  => 'proclean_colors',
					'settings' => 'proclean_brand_primary',
				)
			)
		);

		// Layout section.
		$wp_customize->add_section(
			'proclean_layout',
			array(
				'title'    => esc_html__( 'Layout', 'proclean' ),
				'priority' => 40,
			)
		);

		$wp_customize->add_setting(
			'proclean_container_width',
			array(
				'default'           => self::CONTAINER_MAX_WIDTH,
				'sanitize_callback' => 'absint',
			)
		);
		$wp_customize->add_control(
			'proclean_container_width',
			array(
				'label'       => esc_html__( 'Container Max Width (px)', 'proclean' ),
				'section'     => 'proclean_layout',
				'type'        => 'number',
				'input_attrs' => array(
					'min'  => 800,
					'max'  => 2000,
					'step' => 50,
				),
			)
		);

		// Output dynamic CSS via wp_add_inline_style (no hardcoded inline CSS).
		add_action( 'wp_head', array( $this, 'output_custom_css' ) );
	}

	/**
	 * Sanitize a hex color value.
	 *
	 * @since 1.0.0
	 * @param string $color Color value.
	 * @return string Sanitized color.
	 */
	public function sanitize_hex_color( $color ) {
		if ( ! preg_match( '/^#([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$/', $color ) ) {
			return '#1a3a5c';
		}
		return $color;
	}

	/**
	 * Output dynamic Customizer CSS inline.
	 *
	 * @since 1.0.0
	 */
	public function output_custom_css() {
		$primary = get_theme_mod( 'proclean_brand_primary', '#1a3a5c' );
		$width   = absint( get_theme_mod( 'proclean_container_width', self::CONTAINER_MAX_WIDTH ) );

		$css = sprintf(
			'.%1$s-button--primary { background-color: %2$s; border-color: %2$s; }
			.%1$s-nav a.active { color: %2$s; }
			.%1$s-container { max-width: %3$dpx; }',
			self::PREFIX,
			sanitize_hex_color( $primary ),
			$width
		);

		wp_add_inline_style( self::PREFIX . 'style', $css );
	}

	/**
	 * Get a template part name for use with get_template_part().
	 *
	 * @since 1.0.0
	 * @param string $slug   Template part slug.
	 * @param string $name   Optional name.
	 * @return string Template part path relative to template-parts/.
	 */
	public static function get_template_part_path( $slug, $name = '' ) {
		if ( $name ) {
			return $slug . '-' . $name;
		}
		return $slug;
	}
}

// Instantiate.
new ProClean_Theme();
