/*
 * Jani-King Rebuild — Main JavaScript
 * Small enhancements: mobile menu, FAQ accordion, smooth scroll.
 */

( function( $ ) {
	'use strict';

	/**
	 * Mobile menu toggle.
	 */
	function initMobileMenu() {
		var $toggle = $( '.jk-menu-toggle' );
		var $menu   = $( '.jk-primary-menu' );

		if ( ! $toggle.length || ! $menu.length ) {
			return;
		}

		$toggle.on( 'click', function() {
			var expanded = $toggle.attr( 'aria-expanded' ) === 'true';
			$toggle.attr( 'aria-expanded', ! expanded );
			$menu.slideToggle( 200 ).toggleClass( 'jk-menu-open' );
		} );
	}

	/**
	 * FAQ accordion toggle.
	 */
	function initFaqAccordion() {
		$( '.jk-faq-question' ).on( 'click', function() {
			var $item = $( this ).closest( '.jk-faq-item' );
			$item.toggleClass( 'open' );
		} );
	}

	/**
	 * Initialize on document ready.
	 */
	$( function() {
		initMobileMenu();
		initFaqAccordion();
	} );
} )( jQuery );
