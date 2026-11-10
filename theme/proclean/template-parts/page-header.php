<?php
/**
 * Page-header template part.
 *
 * Displays the page/archive title area.
 *
 * @package   ProClean
 * @since     1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<header class="proclean-page-header">
		<h1 class="proclean-page-title">
			<?php
			if ( is_category() ) :
				/* translators: %s: category name. */
				printf( esc_html__( 'Category: %s', 'proclean' ), single_cat_title( '', false ) );
			elseif ( is_tag() ) :
				/* translators: %s: tag name. */
				printf( esc_html__( 'Tag: %s', 'proclean' ), single_tag_title( '', false ) );
			elseif ( is_author() ) :
				/* translators: %s: author name. */
				printf( esc_html__( 'Author: %s', 'proclean' ), get_the_author() );
			elseif ( is_day() ) :
				/* translators: %s: date. */
				printf( esc_html__( 'Date: %s', 'proclean' ), get_the_date() );
			elseif ( is_month() ) :
				/* translators: %s: month year. */
				printf( esc_html__( 'Month: %s', 'proclean' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'proclean' ) ) );
			elseif ( is_year() ) :
				/* translators: %s: year. */
				printf( esc_html__( 'Year: %s', 'proclean' ), get_the_date( _x( 'Y', 'yearly archives date format', 'proclean' ) ) );
			elseif ( is_search() ) :
				/* translators: %s: search query. */
				printf( esc_html__( 'Search results for: %s', 'proclean' ), get_search_query() );
			elseif ( is_post_type_archive() ) :
				/* translators: %s: post type label. */
				printf( esc_html__( '%s Archive', 'proclean' ), post_type_archive_title( '', false ) );
			else :
				esc_html_e( 'Archives', 'proclean' );
			endif;
			?>
		</h1>
	</header>
