<?php
/**
 * ProClean Core Post Types — Skeleton.
 *
 * Custom post type and taxonomy definitions live here (plugin-territory).
 * Registration is intentionally deferred to Phase 5 to keep Phase 3 scoped to
 * the foundation. No custom post types are registered by this file yet.
 *
 * @package   ProClean_Core
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ProClean_Core_Post_Types class.
 *
 * Skeleton for custom post types and taxonomies. CPT registration is deferred
 * to Phase 5; this class is instantiated but registers nothing yet.
 *
 * @since 1.0.0
 */
class ProClean_Core_Post_Types {

	/**
	 * The single instance of the class.
	 *
	 * @since 1.0.0
	 * @var ProClean_Core_Post_Types|null
	 */
	protected static $instance = null;

	/**
	 * Get the class instance.
	 *
	 * @since 1.0.0
	 * @return ProClean_Core_Post_Types
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	protected function __construct() {
		// Intentionally empty: CPT/taxonomy registration deferred to Phase 5.
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
	}

	/**
	 * Register custom post types.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register_post_types() {
		// Deferred to Phase 5.
	}

	/**
	 * Register custom taxonomies.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register_taxonomies() {
		// Deferred to Phase 5.
	}

	/**
	 * Prevent cloning.
	 *
	 * @since 1.0.0
	 */
	private function __clone() {}

	/**
	 * Prevent unserialization.
	 *
	 * @since 1.0.0
	 */
	public function __wakeup() {}
}
