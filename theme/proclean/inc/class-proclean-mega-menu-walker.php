<?php
/**
 * ProClean Mega Menu Walker.
 *
 * Walks nav menus producing the Jani-King mega-menu structure:
 * top-level items with dropdown containers, heading groups and link lists.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ProClean_Mega_Menu_Walker.
 *
 * @since 1.0.0
 */
class ProClean_Mega_Menu_Walker extends Walker_Nav_Menu {

	/**
	 * Start level.
	 *
	 * @since 1.0.0
	 * @param string $output Passed by reference.
	 * @param int    $depth  Depth of current item.
	 * @param array  $args   Arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 0 === $depth ) {
			$output .= '<ul class="jk-sub-menu jk-mega-columns" style="display:flex;flex-wrap:wrap;">';
		} else {
			$output .= '<ul class="jk-sub-sub-menu">';
		}
	}

	/**
	 * End level.
	 *
	 * @since 1.0.0
	 * @param string $output Passed by reference.
	 * @param int    $depth  Depth of current item.
	 * @param array  $args   Arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 0 === $depth ) {
			$output .= '</ul>';
		} else {
			$output .= '</ul>';
		}
	}

	/**
	 * Start element.
	 *
	 * @since 1.0.0
	 * @param string $output Passed by reference.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of current item.
	 * @param array  $args   Arguments.
	 * @param int    $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		if ( 0 === $depth ) {
			$output    .= $indent . '<li class="menu-item-has-children">';
			$attributes = ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '"' : '';
			$output    .= '<a' . $attributes . ' class="jk-nav-link">' . esc_html( $item->title ) . '</a>';
		} else {
			$output    .= $indent . '<li class="jk-sub-menu-item">';
			$attributes = ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '"' : '';
			$output    .= '<a' . $attributes . '>' . esc_html( $item->title ) . '</a>';
		}
	}

	/**
	 * End element.
	 *
	 * @since 1.0.0
	 * @param string $output Passed by reference.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of current item.
	 * @param array  $args   Arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
	}
}
