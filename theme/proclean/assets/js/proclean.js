/**
 * ProClean — Main JavaScript
 * Small, dependency-free (except jQuery already enqueued) enhancements.
 *
 * @package ProClean
 */

( function ( $ ) {
	'use strict';

	/**
	 * Mobile menu toggle.
	 * Toggles the primary navigation on small screens.
	 */
	function initMobileMenu() {
		var $toggle = $( '.proclean-menu-toggle' );
		var $menu   = $( '.proclean-primary-menu' );

		if ( ! $toggle.length || ! $menu.length ) {
			return;
		}

		$toggle.on(
			'click',
			function () {
				var expanded = $toggle.attr( 'aria-expanded' ) === 'true';
				$toggle.attr( 'aria-expanded', ! expanded );
				$menu.slideToggle( 200 ).toggleClass( 'proclean-menu-open' );
			}
		);
	}

	/**
	 * Initialize on document ready.
	 */
	$(
		function () {
			initMobileMenu();
		}
	);
} )( jQuery );
