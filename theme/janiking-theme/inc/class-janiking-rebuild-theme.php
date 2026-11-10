<?php
/**
 * Jani-King Rebuild Theme Class.
 *
 * Handles theme setup, asset loading, block registration, and template parts.
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
 * Janiking_Rebuild_Theme class.
 *
 * @since 1.0.0
 */
class Janiking_Rebuild_Theme {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
		add_action( 'init', array( $this, 'block_categories' ) );
		add_action( 'wp_body_open', array( $this, 'body_open' ) );
	}

	/**
	 * Theme setup.
	 *
	 * @since 1.0.0
	 */
	public function setup() {
		load_theme_textdomain( JANIKING_REBUILD_TEXT_DOMAIN, get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor.css' );

		register_nav_menus( array(
			'primary'  => esc_html__( 'Primary Navigation', 'janiking-rebuild' ),
			'footer'   => esc_html__( 'Footer Navigation', 'janiking-rebuild' ),
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'janiking-rebuild' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Main sidebar area.', 'janiking-rebuild' ),
			'before_widget' => '<section class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1200;
		}
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 1.0.0
	 */
	public function assets() {
		$version = JANIKING_REBUILD_VERSION;

		// Poppins font (matches Jani-King reference).
		wp_enqueue_style(
			'jkrb-fonts',
			'https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
			array(),
			$version
		);

		// Main theme stylesheet.
		wp_enqueue_style(
			'jkrb-style',
			get_template_directory_uri() . '/assets/css/style.css',
			array( 'jkrb-fonts' ),
			$version
		);

		// Main JavaScript.
		wp_enqueue_script(
			'jkrb-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			$version,
			true
		);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	/**
	 * Register block categories.
	 *
	 * @since 1.0.0
	 */
	public function block_categories() {
		// Register block categories via block editor settings if needed.
	}

	/**
	 * Body open hook - add body classes.
	 *
	 * @since 1.0.0
	 */
	public function body_open() {
		// Body open hooks for custom elements.
	}
}
